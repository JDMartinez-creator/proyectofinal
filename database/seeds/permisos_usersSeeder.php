<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class permisos_usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos_users')->insert([
            'user_id' => 3,
            'permisos_id' => 1,
        ]);
        DB::table('permisos_users')->insert([
            'user_id' => 3,
            'permisos_id' => 2,
        ]);
        DB::table('permisos_users')->insert([
            'user_id' => 3,
            'permisos_id' => 3,
        ]);
        DB::table('permisos_users')->insert([
            'user_id' => 4,
            'permisos_id' => 1,
        ]);
        DB::table('permisos_users')->insert([
            'user_id' => 4,
            'permisos_id' => 2,
        ]);
        DB::table('permisos_users')->insert([
            'user_id' => 4,
            'permisos_id' => 3,
        ]);
    }
}
