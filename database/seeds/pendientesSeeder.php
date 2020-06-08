<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pendientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendientes')->insert([
            'titulo' => 'Dead by Daylight podría estar trabajando en el cross-play entre todas las plataformas',
            'introduccion' => 'El videojuego de terror multijugador asimétrico Dead by Daylight sigue recibiendo contenido regularmente, pero hay un problema que azota al título de Behaviour Interactive desde hace tiempo',
            'contenido' => 'las largas colas en las salas de espera para encontrar partida, especialmente en las versiones de consola. Es por ello que desde hace un tiempo la comunidad de jugadores viene reclamando medidas que palíen este inconveniente. Así las cosas, ahora sabemos que Dead by Daylight podría estar trabajando en el cross-play entre todas las plataformas, según ha descubierto la cuenta especializada Leaks by Daylight indagando en el código de la obra.',
            'fecha' =>  '2020-05-01',
            'autor_id' => 4,
            'seccion' => 'noticias',
        ]);
        DB::table('pendientes')->insert([
            'titulo' => 'Así de impresionante se verá Assassins Creed: Valhalla en Xbox Series X',
            'introduccion' => 'El Inside Xbox enfocado en los juegos para Xbox Series X estuvo lleno de grandes anuncios',
            'contenido' => 'El evento nos permitió ver los primeros avances de nuevos títulos, así como novedades de juegos recientemente anunciados.
Uno de los títulos que generaron más expectativa fue sin duda Assassins Creed: Valhalla, la nueva entrega de la saga. Tal como se prometió, fue en el Inside Xbox que vimos el primer gameplay del título.
El juego sacará todo el potencial de la nueva consola de Microsot, pues sus locaciones, personajes y todos los detalles de los escenarios luce realmente increíbles. Ubisoft confirmó que todo lo que se muestra en el trailer corre efectivamente en Xbox Series X.',
            'fecha' =>  '2020-06-05',
            'autor_id' => 3,
            'seccion' => 'noticias',
        ]);
    }
}
