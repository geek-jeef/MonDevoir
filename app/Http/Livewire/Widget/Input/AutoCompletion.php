<?php

namespace App\Http\Livewire\Widget\Input;

use Livewire\Component;

class AutoCompletion extends Component
{
    public $search, $isEmpty = '';

    public function render()
    {
        if (!is_null($this->search)) {
            $propositions = Post::search($this->search)
                ->take(5)
                ->get();
            $this->isEmpty = '';
        } else {
            $propositions = [];
            $this->isEmpty = __('Nothings Found.');
        }

        return view('livewire.widget.input.auto-completion', [
            'propositions' => $propositions,
        ]);
    }
}
