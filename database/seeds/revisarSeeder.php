<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class revisarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('revisiones')->insert([
            'titulo' => 'Ubisoft ofrece 3 juegos gratis de PC por tiempo limitado, incluido uno de los mejores Assassins Creed',
            'introduccion' => 'Los juegos Child of Light, Rayman Legends y Assassins Creed 2 vuelven a estar disponibles gratis para aquellos que no los reclamaron.',
            'contenido' => 'Juegos gratis. Pocas palabras son tan bonitas de leer como estas, y por si algún jugador se hubiera perdido los títulos que ha regalado Ubisoft en estos últimos meses, la compañía vuelve a ofrecer 3 juegos gratis hasta el 5 de mayo. Un trío de aventuras que incluye además uno de los mejores juegos de la saga Assassins Creed para aquellos que la vivieron desde sus inicios.',
            'fecha' =>  '2020-05-01',
            'user_id' => 4,
            'seccion' => 'noticias',
            'asunto' => 'falta mas contenido',
        ]);
        DB::table('revisiones')->insert([
            'titulo' => 'PS5: LA CPU DE LA CONSOLA LLEGA A LAS FASES FINALES DE PRODUCCIÓN',
            'introduccion' => 'PlayStation 5 (PS5) es la consola de nueva generación de Sony para 2020',
            'contenido' => 'El nuevo hardware competirá de tú a tu con Xbox Series X, intentando repetir el éxito de la actual PS4, que ha conseguido batir desde 2013 los 100 millones de unidades vendidas. Para reeditar la exitosa generación, PlayStation 5 tendrá que ser competitiva en precio, catálogo de juegos, retrocompatibilidad, características técnicas y servicios para los jugadores, como infraestructura online o juego en la nube.',
            'fecha' =>  '2020-06-05',
            'user_id' => 3,
            'seccion' => 'articulos',
            'asunto' => 'falta mas contenido',
        ]);
    }
}
