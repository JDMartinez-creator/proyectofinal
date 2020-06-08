<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        articuloSeeder::class,
        lanzamientoSeeder::class,
        modificacionesSeeder::class,
        noticiasSeeder::class,
        pendientesSeeder::class,
        permisos_usersSeeder::class,
        permisosSeeder::class,
        revisarSeeder::class,
        subscripcionesSeeder::class,

        USerSeeder::class,
    ]);
    }
}
