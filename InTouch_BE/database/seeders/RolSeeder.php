<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rol')->insert([
    [
        'nombre' => 'General',
        'descripcion' => 'Puede ver el listado de videojuegos',
    ],
    [
      'nombre' => 'Geek',
      'descripcion' => 'Puede registrar videojuegos en un titulo y pedir nuevos titulos',
    ],
    [
      'nombre' => 'Administrador',
      'descripcion' => 'Puede aceptar nuevos titulos de videojuegos',
    ],
    ]);
    }
}
