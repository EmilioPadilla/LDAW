<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuario')->insert([
    [
        'usuario' => 'emipad',
        'nombre' => 'Emilio Padilla',
        'contraseña' => 'pirulon27',

    ],
    [
      'usuario' => 'sebastaf',
      'nombre' => 'Sebastian Tafoya',
      'contraseña' => 'pirulin16',
    ],
    ]);
    }
}
