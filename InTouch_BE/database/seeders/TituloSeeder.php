<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('titulo')->insert([
    [
        'titulo' => 'Age of Empires',
        'version' => '1.7',
        'edicion' => 'Extended',

    ],
    [
        'titulo' => 'Super Mario Bros Brawl',
        'version' => '3.2',
        'edicion' => 'Brawl',
    ],
    [
        'titulo' => 'Super Mario Kart',
        'version' => '3.1',
        'edicion' => 'Double Dash',
    ],
    ]);
    }
}
