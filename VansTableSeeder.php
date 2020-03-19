<?php

// use Illuminate\Database\Seeder;

// class VansTableSeeder extends Seeder
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
use Illuminate\VansTable\Seeder;
use Illuminate\Support\Facades\DB;

class VansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vans')->insert([
            'make' => Str::random(10),
            'model' => Str::random(10),
            'year' => Str::random(4),
            'registration' => str::random(45),
            'capacity' => is_integer(11),
        ]);
    }
}