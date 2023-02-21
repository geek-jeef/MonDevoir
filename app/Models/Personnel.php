<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;


class Personnel extends Model  implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use Searchable;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'designation',
        'qualification',
        'genre',
        'date_de_naissance',
        'email',
        'phone',
        'adresse',
        'date_embauche',
        'date_depart',
        'active',
        'data'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



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
            ->acceptsMimeTypes(['image/jpeg','image/png','image/ief']);

        $this->addMediaCollection('Tampon')
            ->acceptsMimeTypes(['image/jpeg','image/png','image/ief']);

        $this->addMediaCollection('Signature')
            ->acceptsMimeTypes(['image/jpeg','image/png','image/ief']);
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


    public function enregistrerTampon($tampon){
        $annee = \Hp::annee();
        return $this->enregistrerTamponAnnee($tampon, $annee) ;
    }

    public function enregistrerTamponAnnee($tampon, $annee){
        try {
            $this->addMedia( $tampon->getRealPath() )
             ->usingName( \Hp::nomDossier($this->id.'_'.$this->nom_complet) )
             ->withCustomProperties([
                    'annee_academique' => ['id' => $annee->id , 'nom_annee' => $annee->nom_annee] ,
                    'annee_academique_id' => $annee->id ,
                ])
             ->toMediaCollection('Tampon');
            return true;
        } catch (FileDoesNotExist | FileIsTooBig $e) {
            return false;
        }
        return false;
    }



    public function getPhotoAttribute(){
        $annee = \Hp::annee();
        return $this->photoAnnee($annee);
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



    public function getTamponAttribute(){
        $annee = \Hp::annee();
        return $this->tamponAnnee($annee);
    }

    public function tamponAnnee($annee){
        $filteredCollection = 
            $this->getMedia('Tampon', function (Media $media) {
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


    //#[SearchUsingPrefix(['id', 'email'])]
    //#[SearchUsingFullText(['sexe'])]
    public function toSearchableArray()
    {
        return [
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'designation' => $this->designation,
            'qualification' => $this->qualification,
            'genre' => $this->genre,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_de_naissance' => $this->date_de_naissance,
            'date_embauche' => $this->date_embauche,
            'data' => $this->data,
        ] ;

    }


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'date_embauche' => 'datetime',
        'date_depart' => 'datetime',
        'data' => 'array',

    ];

    protected $appends = array('nom_complet','description','url');

    public function getNomCompletAttribute()
    {
        return $this->nom." ".$this->prenoms;  
    }

    public function getDescriptionAttribute(){
        return $this->designation ;
    }

    public function getUrlAttribute(){
        return url("/personnel/".$this->id) ;
    }

}