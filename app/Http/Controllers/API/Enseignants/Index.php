<?php

namespace App\Http\Controllers\API\Enseignants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Enseignant;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('token_id',50)->nullable();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('designation')->nullable();
            $table->string('qualification')->nullable();
            $table->date('date_de_naissance',10);
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->string('email',100)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('adresse',500)->nullable();
            $table->date('date_embauche');
            $table->date('date_depart')->nullable();
            $table->boolean('active')->default(true);
     */
    public function __invoke(Request $request): Collection
    {
        return Enseignant::query()
            ->select('id', 'nom', 'prenoms' , 'email' , 'phone')
            ->where('active',true)
            ->where('date_depart', null)
            ->orderByDesc('created_at')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('nom', 'like', "%{$request->search}%")
                    ->orWhere('prenoms', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%")
                    ->orWhere('phone', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get()
            ->map(function (Enseignant $enseignant) {
                $enseignant->nom_complet = $enseignant->nom." ".$enseignant->prenoms  ;
                $enseignant->profile_image = route('avatar', $enseignant->nom." ".$enseignant->prenoms );
                return $enseignant;
            });
    }
}

