<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Games;

class SearchGame extends Component
{
    public $busqueda = '';

    public function render()
    {
        // Obtener lista de juegos
        $games = Games::where('nombre_game','like','%'.strtoupper($this->busqueda).'%')->get();

        return view('livewire.search-game',[
            'games' => $games
        ]);
    }
}
