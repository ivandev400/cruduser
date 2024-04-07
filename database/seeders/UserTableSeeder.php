<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Main_user;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1,20) as $index){
            Main_user::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}