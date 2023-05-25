<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i = 20; $i++) {
            $newTrain = new Train();
            $newTrain->bigIncrements('id');
            $newTrain->company = $faker->name;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->time('H:i:s');
            $newTrain->arrival_time = $faker->time('H:i:s');
            $newTrain->train_code = $faker->randomNumber(7);
            $newTrain->wagons_n = $faker->randomDigitNotNull;
            $newTrain->on_time = $faker->boolean;
            $newTrain->delayed = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;
        }
    }
}
