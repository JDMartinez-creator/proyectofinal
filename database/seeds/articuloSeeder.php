<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class articuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            'titulo' => 'XBOX SERIES X: UNA FILTRACIÓN REVELARÍA EL NUEVO DISEÑO DEL MENÚ',
            'introduccion' => 'Microsoft ha desvelado cuantiosa información sobre la que será su nueva consola. Conocemos la potencia de Xbox Series X',
            'contenido' => 'las novedades en el mando e incluso muchas de las características de la plataforma como Quick Resume o Smart Delivery. En esta completa guía podrás echar un vistazo pormenorizado a todas las noticias de Xbox Series X y los últimos rumores.
En este aspecto, esta semana se ha filtrado una nueva aplicación para Windows 10 que servirá como tienda para los juegos de Xbox sin tener que pasar por la tienda de Microsoft, y cuyo diseño está planeado que se utilize también en Series X, así como en la generación actual de Xbox One S y Xbox One X. Entre los numerosos cambios, la barra de navegación se mueve a la izquierda, y en general la aplicación tiene un diseño más simplificado.',
            'fecha' =>  '2020-06-08',
            'user_id' => 4,
        ]);
        DB::table('articulos')->insert([
            'titulo' => '¿QUÉ MODELO DE PS4 COMPRAR EN 2020?',
            'introduccion' => '¿Qué consola comprar?',
            'contenido' => 'Si en pleno 2020 todavía no te has lanzado a la compra de una PlayStation 4, estás de suerte. Comprar una PS4 o esperar a PlayStation 5 es una pregunta que seguramente se hayan hecho muchos usuarios durante estos meses, pero lo cierto es que la actual plataforma de Sony tiene todavía mucho contenido por ofrecer, tanto por los lanzamientos futuros como los que ya están disponibles.
En las tiendas podemos encontrar dos modelos de PS4, la versión Slim y el modelo Pro. Ya en los mercados de segunda mano la versión que más prolifera es la original, la de 2013, aunque con más desventajas que puntos positivos frente a las versiones actuales.
PlayStation 4, en cualquiera de sus modelos, sigue siendo una gran inversión debido al gran catálogo disponible y el que está por llegar',
            'fecha' =>  '2020-06-07',
            'user_id' => 3,
        ]);
    }
}
