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
        $marcas =['renault','citroen','ford','maserati','hummer'];
        for($i= 0; $i < count($marcas); $i++){
            $marca = new Marca();
            $marca->name = $marcas[$i];
            $marca->save();
        }
    }
}
