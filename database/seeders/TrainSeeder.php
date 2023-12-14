<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train->business = $faker->word();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();

            $temp_departure_time = $faker->dateTimeBetween('today', 'tomorrow -1 second');

            $new_train->departure_time = $temp_departure_time;
            $new_train->arrival_time = $faker->dateTimeBetween($temp_departure_time, 'tomorrow');
            $new_train->number_of_carriages = $faker->numberBetween(4, 20);
            $new_train->save();
        }
    }
}
