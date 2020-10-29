<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('consola')->insert([
    [
        'nombre' => 'Nintendo Switch',
        'año' => '2020-10-01',
    ],
    [
      'nombre' => 'Xbox One',
      'año' => '2020-10-01',
    ],
    [
      'nombre' => 'Play Station 5',
      'año' => '2020-10-01',
    ],
    [
      'nombre' => 'Xbox 360',
      'año' => '2020-10-01',
    ],
    [
      'nombre' => 'Play Station 4',
      'año' => '2020-10-01',
    ],
    [
        'descripcion' => 'PC',
        'año' => '2020-10-01',
    ],
    ]);
    }
}
