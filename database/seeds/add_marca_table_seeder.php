<?php

use Illuminate\Database\Seeder;
use App\Marca;
use App\Car;
use Faker\Generator as Faker;

class add_marca_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 10; $i++){
            $marca = new Marca();
            $marca->name=$faker->randomElement(['renault','citroen','ford','maserati','hummer']);
            $marca->save();
        }
    }
}
