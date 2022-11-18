<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $count = 1;

    public function add()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.card');
    }
}
