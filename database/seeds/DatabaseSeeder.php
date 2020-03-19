<?php 

// use Illuminate\Database\Seeder;

// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
        // $this->call(UsersTableSeeder::class);
    // }
// }



use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VansTableSeeder::class);
        
    };
    
//     public function run()
// {
//     factory(App\User::class, 50)->create()->each(function($u) {
//         $u->posts()->save(factory(App\Post::class)->make());
    
//     factory(App\Event::class, 50)->create()->each(function($u) {
//         $u->posts()->save(factory(App\Post::class)->make());

//     factory(App\Reservation::class, 50)->create()->each(function($u) {
//         $u->posts()->save(factory(App\Post::class)->make());
    
//     factory(App\Van::class, 50)->create()->each(function($u) {
//         $u->posts()->save(factory(App\Post::class)->make());
//     });
    // public function run()
    // {
    //     DB::table('users')->insert([
    //         'first_name' => Str::random(10),
    //         'last_name' => Str::random(10),
    //         'email' => Str::random(10).'@gmail.com',
    //         'isdriver' => integerValue::random(1),
    //         'password' => bcrypt('password'),
    //     ]);
  
    
    
