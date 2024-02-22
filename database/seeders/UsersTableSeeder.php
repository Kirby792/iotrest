<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //eloquent arm model 
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 
            'username' => 'admin',
            'password' => '123',
            'rol' => 'A', 
         ]);

         $faker = Faker::create();
         for($i=1; $i < 10; $i++){
             User::create([
                 'username' => $faker->unique()->userName,
                 'password' => '111',
                 'rol' =>$faker->randomElement(['A','U','D'])
             ]);
    
         }

    }
}
