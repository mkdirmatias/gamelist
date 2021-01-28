<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Games;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vacíar tabla
        Games::truncate();

        // Listar juegos
        Games::create([
            'nombre_game'      => 'BAMBOO',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);

        Games::create([
            'nombre_game'      => 'REELS OF WEALTH',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);

        Games::create([
            'nombre_game'      => 'DRAGON & PHOENIX',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);

        Games::create([
            'nombre_game'      => 'TAKE THE BANK',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);

        Games::create([
            'nombre_game'      => 'CAISHEN’S ARRIVAL',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);

        Games::create([
            'nombre_game'      => 'GEMMED!',
            'link_game'        => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'imagen_game'      => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'estado_game'      => 1,
            'descripcion_game' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit quis risus ornare cursus non eu tortor. Praesent non neque eu risus commodo sodales. Vestibulum semper fermentum luctus.',
        ]);
    }
}
