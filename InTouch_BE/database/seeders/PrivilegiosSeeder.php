<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('privilegios')->insert([
    [
        'nombre' => 'Aceptar titulos de videojuego',

    ],
    [
      'nombre' => 'Registrar videojuegos',
    ],
    [
      'nombre' => 'Ver videojuegos',
    ],
    ]);
    }
}
