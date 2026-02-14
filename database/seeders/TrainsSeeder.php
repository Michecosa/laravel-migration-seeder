<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();

            $newTrain->agency = $faker-> company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('2026-01-01', '+1 year');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('??#####');
            $newTrain->number_of_carriages = $faker->numberBetween(3, 15);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean(10);

            $newTrain->save();
        }
    }
}
