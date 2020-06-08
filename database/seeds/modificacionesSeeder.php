<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class modificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('modificaciones')->insert([
            'titulo' => 'Cyberpunk 2077',
            'introduccion' => 'Cuando pensamos en el estudio polaco CD Projekt RED no podemos evitar pensar en The Witcher,',
            'contenido' => 'Pero nadie se puede quitar de la mente la gran historia de Cyberpunk 2077, un título que está cada vez más cerca y que sin lugar a dudas tiene muchas sorpresas por presentar.',
            'fecha' =>  '2020-06-05',
            'user_id' => 4,
            'contenido_id' => 1,
            'seccion' => 'lanzamientos',
        ]);
        DB::table('modificaciones')->insert([
            'titulo' => 'Así de impresionante se verá Assassins Creed: Valhalla en Xbox Series X',
            'introduccion' => 'El Inside Xbox enfocado en los juegos para Xbox Series X estuvo lleno de grandes anuncios',
            'contenido' => 'El evento nos permitió ver los primeros avances de nuevos títulos, así como novedades de juegos recientemente anunciados.',
            'fecha' =>  '2020-06-04',
            'user_id' => 3,
            'contenido_id' => 2,
            'seccion' => 'lanzamientos',
        ]);
    }
}
