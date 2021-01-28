<?php

namespace App\Repositories;

use App\Models\Games;

class GamesRepository extends BaseRepository
{
    /**
     * Constructor de la clase
     *
     * @return void
     */
    public function __construct(Games $games)
    {
        // Iniciar el modelo
        parent::__construct($games);
    }
}