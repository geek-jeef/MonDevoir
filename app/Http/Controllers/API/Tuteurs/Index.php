<?php

namespace App\Http\Controllers\API\Tuteurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tuteur;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  $table->string('nom');
            $table->string('phone_primaire',15)->nullable();
            $table->string('phone_secondaire',15)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->string('email')->nullable();
            $table->string('adresse',500)->nullable();
            $table->string('profession')->nullable();
     */
    public function __invoke(Request $request): Collection
    {
        return Tuteur::query()
            ->select('id', 'nom', 'phone_primaire')
            ->orderByDesc('created_at')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('nom', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%")
                    ->orWhere('phone_primaire', 'like', "%{$request->search}%")

            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get()
            ->map(function (Tuteur $tuteur) {
                $tuteur->profile_image = "https://picsum.photos/300?id={$tuteur->id}";
                return $tuteur;
            });
    }
}
