<?php

namespace App\Http\Livewire\Widget\Components;

use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Support\Collection;

class SelectNationalite extends LivewireSelect
{


    /*
     // Data for options
         $users = \App\User::limit(6)->get()->transform(fn($user) => [
            'id' => $user->id,
            'title' => $user->name,
            'subtitle' => $user->email
         ]); 
    */

    public function options($searchTerm = null) : Collection 
    {
        $path = public_path('dist/json/pays2.json');
        $json = json_decode(file_get_contents($path), true);
        return collect($json);
    }

}
