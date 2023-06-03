<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tire;
use Faker\Factory as Faker;

class TiresTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            Tire::create([
                'brand' => $faker->randomElement(['Pirelli', 'Michelin', 'Bridgestone', 'Momo', 'Nexen', 'Goodyear']),
                'size' => $faker->randomElement(['195/65 R15', '205/55 R16', '225/45 R17']),
                'dot' => $faker->randomNumber(4, true),
                'season' => $faker->randomElement(['Winter', 'Summer', '4 Season']),
                'price' => $faker->randomFloat(2, 50, 200),
            ]);
        }
    }
}
