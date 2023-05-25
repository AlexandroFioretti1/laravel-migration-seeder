<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $train = new Train();
        $train->agenzia = $faker->words(5, true);
        $train->stazione_partenza = $faker->words(10, true);
        $train->stazione_arrivo = $faker->words(8, true);
        $train->orario_partenza = $faker->time();
        $train->orario_arrivo = $faker->time();
        $train->codice_treno = $faker->words(12, true);
        $train->numero_carozze = $faker->numberBetween(1, 10);
        $train->in_orario = $faker->randomElement([0, 1]);
        $train->cancellato = $faker->randomElement([0, 1]);
        $train->save();
        
    }
}
