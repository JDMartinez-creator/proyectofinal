<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class lanzamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lanzamientos')->insert([
            'titulo' => 'Cyberpunk 2077',
            'introduccion' => 'Cuando pensamos en el estudio polaco CD Projekt RED no podemos evitar pensar en The Witcher,',
            'contenido' => 'Pero nadie se puede quitar de la mente la gran historia de Cyberpunk 2077, un título que está cada vez más cerca y que sin lugar a dudas tiene muchas sorpresas por presentar.
Algo que no deja de sorprender de CD Projekt RED es su capacidad para traer asombrosos proyectos de mundos que los fascinan. Tras el gran paso de la saga The Witcher y sorprendernos incluso con títulos donde este mundo llegaba a las cartas, llega el momento de ver su título más ambicioso: su adaptación del juego de mesa Cyberpunk 2020. Pero, con un lanzamiento ya programado para el 17 de septiembre de 2020.',
            'fecha' =>  '2020-06-06',
            'user_id' => 4,
        ]);
        DB::table('lanzamientos')->insert([
            'titulo' => 'Así de impresionante se verá Assassins Creed: Valhalla en Xbox Series X',
            'introduccion' => 'El Inside Xbox enfocado en los juegos para Xbox Series X estuvo lleno de grandes anuncios',
            'contenido' => 'El evento nos permitió ver los primeros avances de nuevos títulos, así como novedades de juegos recientemente anunciados.
Uno de los títulos que generaron más expectativa fue sin duda Assassins Creed: Valhalla, la nueva entrega de la saga. Tal como se prometió, fue en el Inside Xbox que vimos el primer gameplay del título.
El juego sacará todo el potencial de la nueva consola de Microsot, pues sus locaciones, personajes y todos los detalles de los escenarios luce realmente increíbles. Ubisoft confirmó que todo lo que se muestra en el trailer corre efectivamente en Xbox Series X.',
            'fecha' =>  '2020-06-05',
            'user_id' => 3,
        ]);
    }
}
