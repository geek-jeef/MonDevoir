<?php

namespace App\Http\Controllers\API\Pays;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return DB::table('pays')->select('nationalite','libelle')->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('nationalite', 'like', "%{$request->search}%")
                    ->where('libelle', 'like', "%{$request->search}%")
            )->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('nationalite', $request->input('selected', []))
            )
            ->get()
            ->map(function ($pay) {
                return $pay;
            });
            
    }
}
