<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\user_domicilio;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         User::factory(100)->create()->each(function ($user){
            user_domicilio::factory()->create(['user_id' => $user->id,]);
         });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
