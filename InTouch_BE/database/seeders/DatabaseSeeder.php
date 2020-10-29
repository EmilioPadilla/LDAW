<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConsolaSeeder::class);
        $this->call(PrivilegiosSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(TituloSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(VideojuegoSeeder::class);
    }
}
