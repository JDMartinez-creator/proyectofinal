<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class USerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'Jorge Octavio Guzman Sanchez',
            'email' => 'jguzman@ittg.edu.mx',
            'password' => Hash::make('pasopaso'),
            'rol' => "difusor",

        ]); 
       DB::table('users')->insert([
            'name' => 'Diego de Jesus Penate Ramirez',
            'email' => 'Estudiante1@gmail.com',
            'password' => Hash::make('pasopaso'),
            'rol' => "difusor",

        ]); 
       DB::table('users')->insert([
            'name' => 'Estudiante',
            'email' => 'JEstudiante@gmail.com',
            'password' => Hash::make('pasopaso'),
            'rol' => "autor",

        ]);
       DB::table('users')->insert([
            'name' => 'Estudiante',
            'email' => 'Estudiante2@gmail.com',
            'password' => Hash::make('pasopaso'),
            'rol' => "autor",

        ]);

    }
}
