<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class subscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscripciones')->insert([
            
            'correo' => Str::random(10).'@gmail.com',
            'seccion' => 'noticias',
            'contenido_id' => 1,
        ]);
        DB::table('subscripciones')->insert([
            
            'correo' => Str::random(10).'@gmail.com',
            'seccion' => 'articulos',
            'contenido_id' => 1,
        ]);
    }
}
