<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('videojuego')->insert([
    [
        'Condicion' => 'Como nuevo',
    ],
    [
        'Condicion' => 'Nuevo',
    ],
    [
        'Condicion' => 'Usado',
    ],
    ]);
    }
}
