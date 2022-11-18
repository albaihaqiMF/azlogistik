<?php

namespace App\Http\Livewire;

use App\Helpers\Helpers;
use App\View\Components\GuestLayout;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public function loadComment()
    {
        $url = "https://jsonplaceholder.typicode.com/comments";
        $this->comments = Helpers::repsonseAPI($url);
    }
    public function render()
    {
        return view('livewire.comments')->layout(GuestLayout::class);
    }
}
