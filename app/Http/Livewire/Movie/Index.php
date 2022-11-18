<?php

namespace App\Http\Livewire\Movie;

use App\Helpers\Helpers;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {

        $url = 'https://api.themoviedb.org/3/discover/movie?api_key=1edacbe6242e545f3d25c466e18a26f9&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false';
        $data = Helpers::repsonseAPI($url);

        return view('livewire.movie.index', [
            'data' => $data
        ]);
    }
}
