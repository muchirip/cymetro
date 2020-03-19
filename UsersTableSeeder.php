<?php

// use Illuminate\Database\Seeder;

// class UsersTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //
//     }
// }


use Illuminate\Support\Str;
use Illuminate\UsersTable\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'isdriver' => integerValue::random(1),
            'password' => bcrypt('password'),
        ]);
    }
}

