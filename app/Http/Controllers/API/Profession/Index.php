<?php

namespace App\Http\Controllers\API\Profession;

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
    public function __invoke(Request $request): Collection
    {
        return DB::table('professions')
            ->select('nom')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('nom', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('nom', $request->input('selected', []))
            )
            ->get()
            ->map(function ($profession) {
                return $profession;
            });
    }
}
