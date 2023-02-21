<?php

namespace App\Http\Livewire\Personnel\Vue;

use Livewire\Component;

use App\Models\Personnel;

use Livewire\WithPagination;
use Illuminate\Contracts\Database\Eloquent\Builder;


class ListePersonnel extends Component
{
    use WithPagination;

    public $recherche = '';
    public $perPage = 12 ;
    public $ancien_employe ;

    protected $queryString = ['recherche','ancien_employe'];


    public function render()
    {
        $data = Personnel::query()
            ->select('*')
            ->orderByDesc('created_at')
            ->when(
                $this->ancien_employe,
                fn (Builder $query) => $query
                    ->where('date_depart', null)
            )
            ->when(
                true,
                fn (Builder $query) => $query
                    ->where('nom', 'like', "%{$this->recherche}%")
                    ->orWhere('prenoms', 'like', "%{$this->recherche}%")
                    ->orWhere('email', 'like', "%{$this->recherche}%")
                    ->orWhere('phone', 'like', "%{$this->recherche}%")
            ) ;


        $data = $data->paginate($this->perPage) ;

        return view('livewire.personnel.vue.liste-personnel', [
            'personnels' => $data ,
        ]);
    }
}
