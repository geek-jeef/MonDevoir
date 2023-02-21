<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Avatar\Generator\DefaultGenerator as InitialGenerator;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;

use Illuminate\Database\Eloquent\SoftDeletes;



class Eleve extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use Searchable;
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


        /*
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('prenoms',50)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->date('date_inscription');
            $table->string('nationalite',50)->nullable();
            $table->string('adresse',500)->nullable();
            $table->json('data')->nullable();
            $table->boolean('active')->default(true);
    */

    protected $fillable = [
        'nom',
        'prenoms',
        'genre',
        'date_de_naissance',
        'lieu_de_naissance',
        'date_inscription',
        'nationalite',
        'adresse',
    ];


    public function setGenreAttribute($value)
    {
        $value = str_replace(' ', '', $value); 
        $value = substr($value, 0, 1); 
        $value = strtolower($value);
        $feminity = ( ($value == 'f') || ($value == 'w') );// check feminity
        $this->attributes['genre'] = (!$feminity) ? 'Masculin' : 'Feminin';
    }

    /*
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('prenoms',50)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->date('date_inscription');
            $table->string('nationalite',50)->nullable();
            $table->string('adresse',500)->nullable();
            $table->json('data')->nullable();
            $table->boolean('active')->default(true);
    */

    //#[SearchUsingPrefix(['id', 'email'])]
    //#[SearchUsingFullText(['sexe'])]
    public function toSearchableArray()
    {
        return [
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'genre' => $this->genre,
            'lieu_de_naissance' => $this->lieu_de_naissance,
            'date_inscription' => $this->date_inscription,
            'adresse' => $this->adresse,
            'data' => $this->data,
        ] ;

    }

    protected $appends = array('nom_complet','photo','description','url','image_preview','image','info_naissance');

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 200, 200)
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Photos')
            ->acceptsMimeTypes(['image/jpeg','image/png','image/ief'])
            ->useFallbackUrl('/assets/eleve.png')
            ->useFallbackPath(public_path('/assets/eleve.png'));
    }
    

    public function enregistrerPhoto($photo){
        $annee = \Hp::annee();
        return $this->enregistrerPhotoAnnee($photo, $annee) ;
    }

    public function enregistrerPhotoAnnee($photo, $annee){
        try {
            $this->addMedia( $photo->getRealPath() )
             ->usingName( \Hp::nomDossier($this->id.'_'.$this->nom_complet) )
             ->withCustomProperties([
                    'annee_academique' => ['id' => $annee->id , 'nom_annee' => $annee->nom_annee] ,
                    'annee_academique_id' => $annee->id ,
                ])
             ->toMediaCollection('Photos');
            return true;
        } catch (FileDoesNotExist | FileIsTooBig $e) {
            return false;
        }
        return false;
    }

    public function getDescriptionAttribute(){
        $description = $this->salle ;
        if($description){
            return "{$description->nom_salle} {$this->tags_courants}";
        }
        if(count($this->inscriptions)){
            return 'Ancien Elève' ;
        }else{
            return 'Non-Inscrit' ;
        }

    }

    public function getUrlAttribute(){

        return url("/eleve/show/".$this->id) ;
    }

    public function getPhotoAttribute(){
        $annee = \Hp::annee();
        return $this->photoAnnee($annee);
    }
    
    public function getImagePreviewAttribute(){
        $annee = \Hp::annee();
        $tof = $this->photoAnnee($annee);
        if($tof){
            return $tof->preview_url ;
        }else{
            return url('avatar/'.$this->nom_complet) ;
        }
    }
    public function getImageAttribute(){
        $annee = \Hp::annee();
        $tof = $this->photoAnnee($annee);
        if($tof){
            return $tof->original_url ;
        }else{
            return url('avatar/'.$this->nom_complet) ;
        }
    }

    public function photoAnnee($annee){
        $filteredCollection = 
            $this->getMedia('Photos', function (Media $media) {
            return isset($media->custom_properties['annee_academique']) ;
        } );

        $filteredCollection = $filteredCollection->where('custom_properties.annee_academique_id',$annee->id)->sortByDesc('created_at');

        if($filteredCollection->count() >= 2){
            $firstToKeep = $filteredCollection->first();
            foreach($filteredCollection as $one){
                if($firstToKeep->id == $one->id){
                    continue ;
                }else{
                    $one->delete();
                }
            }
            return $firstToKeep ;
        }

        return $filteredCollection->first() ;
    }


    protected $casts = [
        'data' => 'array',
        'date_de_naissance' => 'date:Y-m-d',
        'date_inscription' => 'datetime:Y-m-d',
    ];

    public function getNomCompletAttribute()
    {
        return $this->nom." ".$this->prenoms;  
    }

    public function getNaissanceAttribute()
    {
        return date('d/m/Y', strtotime($this->date_de_naissance));  
    }


    public function getInfoNaissanceAttribute()
    {
        return "le {$this->naissance} à {$this->lieu_de_naissance}" ;  
    }


    public function salle()
    {    
        $annee = \Hp::annee();
        return $this->HasOneDeep(Salle::class ,['eleve_salle'])
                        ->where('eleve_salle.annee_academique_id', $annee->id)
                        ->latest('eleve_salle.created_at')
                        ;
    }

    /*public function cycles()
    {
        return $this->hasMany(CycleAcademique::class);
    }

    public function classes()
    {
        return $this->hasManyThrough(Classe::class ,CycleAcademique::class);
    }*/

   /*
    Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('prenoms',50)->nullable();
            $table->enum('genre', [1,2])->default(1);
            $table->date('date_de_naissance');
            $table->date('date_inscription');
            $table->string('nationalite',50)->nullable();
            $table->string('adresse',500)->nullable();
            $table->json('data')->nullable();
            $table->enum('status', [0,1])->default(1);
            $table->softDeletes();
            $table->userstamps();
            $table->timestamps();
    */

    public function salle_actuelle()
    {
        $annee = \Hp::annee();
        return $this->hasOneDeepFromReverse(
            (new Salle())->eleves()
        );
    }

    public function classe_actuelle()
    {
        $annee = \Hp::annee();
        return $this->hasOneDeepFromReverse(
            (new Classe())->eleves()
        );
    }

    public function cycle_actuelle()
    {
        $annee = \Hp::annee();
        return $this->hasOneDeepFromReverse(
            (new CycleAcademique())->eleves()
        );
    }

    public function salle_annee(AnneeAcademique $annee)
    {
        return $this->HasOneDeep(Salle::class ,['eleve_salle'])
                        ->where('eleve_salle.annee_academique_id', $annee->id)
                        ->latest('eleve_salle.created_at')
                        ->first();
                        ;
    }
    public function salle_annee_id($annee_id)
    {
        return $this->HasOneDeep(Salle::class ,['eleve_salle'])
                        ->where('eleve_salle.annee_academique_id', $annee_id)
                        ->latest('eleve_salle.created_at')
                        ->first();
                        ;
        
    }

    public function tuteurs()
    {
        return $this->hasManyDeep(Tuteur::class, ['eleve_tuteur' ]);
    }




    public function inscriptions()
    {
        return $this->hasMany(Inscription::class)->withTrashed();
    }



  
    public function getInscriptionCouranteAttribute()
    {
        $annee = \Hp::annee();
        if($annee){
            return $this->inscriptions->firstWhere('annee_academique_id', $annee->id);
        }else{
            return null;
        }
    }



    public function getTagsCourantsAttribute()
    {
        $inscr = $this->getInscriptionCouranteAttribute();
        if($inscr){
            $tags = $inscr->tags;
            $n = count($tags);
            $liste = "";
            for ($i=0; $i < $n ; $i++) {
                if($i == ($n-1) ){
                    $liste .= "{$tags[$i]->getTranslation('name', 'court')}" ;
                }else{
                    $liste .= "{$tags[$i]->getTranslation('name', 'court')} | " ;
                }
            }
            return ($liste) ? "({$liste})" : "" ;
        }else{
            return '';
        }
    }




    public function assignerTuteur($tuteur_id)
    {
        $tuteur = Tuteur::find($tuteur_id);
        if($tuteur){
            return EleveTuteur::updateOrCreate([
                'eleve_id' => $this->id,
                'tuteur_id' => $tuteur->id,
            ]) ;
        }
        return false;
    }


    public function retirerTuteur(Tuteur $tuteur)
    {
        if($tuteur){
            EleveTuteur::firstWhere([
                'eleve_id' => $this->id,
                'tuteur_id' => $tuteur->id,
            ])->delete() ;
        }
        return true;
    }






}
