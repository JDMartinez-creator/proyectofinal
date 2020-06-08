<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class permisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([
            'nombre' => 'noticia',
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'lanzamiento',

        ]);
        DB::table('permisos')->insert([
            'nombre' => 'articulo',
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'subseccion',
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'independencia',
        ]);
    }
}
