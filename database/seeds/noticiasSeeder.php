<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class noticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('noticias')->insert([
            'titulo' => 'Streets of Rage 4: Así es Como Tres Estudios Revivieron la Legendaria Serie',
            'introduccion' => 'Esta es una frase que no pensé estar escribiendo en 2020: hoy tendremos el lanzamiento de un nuevo juego de Streets of Rage',
            'contenido' => '¿Por qué la sorpresa? No es solo porque han pasado 26 años desde el último título, sino porque la trilogía original de los side-scrolling beat ‘em up fue una luz en una botella, celebrada perfectamente en su época, y ha sido venerada por seguidores del género desde entonces. ¿Por qué un estudio de la actualidad esperaría resucitar la serie? ¿Cómo podría capturar esa magia?',
            'fecha' =>  '2020-04-20',
            'user_id' => 4,
        ]);
        DB::table('noticias')->insert([
            'titulo' => 'Bullets Per Minute anunciado para Xbox One, dispara al ritmo de la música',
            'introduccion' => 'El estudio británico Awe ha anunciado el lanzamiento de Bullets Per Minute para este verano en PC y en invierno para consolas',
            'contenido' => 'Sus creadores lo definen como un «shooter en primera persona de acción rítmica roguelike», donde la acción va a ritmo de la música mientras acabas con cientos de enemigos y jefes finales en una estructura de mazmorras generadas de manera aleatoria.
Se trata de un shooter en primera persona donde tanto los ataques del enemigo, como tus propios disparos, se rigen por el ritmo de la música. Por su estética, jugabilidad y banda sonora bien podría recordarnos a DOOM Etenal. Puedes disparar, saltar y esquivar mientras corres por el escenario, pero cada acción debe ir acompañada del ritmo de una música realmente cañera. El objetivo es completar cada mazmorra y vencer a sus ocho jefes finales al mismo tiempo que vas coleccionando nueva armas y modificadores que prometen alterar radicalmente el estilo de juego. Por supuesto, su apuesta roguelike obligará a empezar de nuevo cada vez que mueras.
',
            'fecha' =>  '2020-05-01',
            'user_id' => 3,
        ]);
    }
}
