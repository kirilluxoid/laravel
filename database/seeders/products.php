<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'names' => $faker->word(),
                'articul' => $faker->numerify('ART###'),
                'categories_id' => $faker->numberBetween($min = 1, $max = 3),
                'weight' => $faker->numberBetween($min = 1, $max = 4),
                'onwprice' => $faker->numberBetween($min = 300000, $max = 1000000),
                'statusses_id' => $faker->numberBetween($min = 1, $max = 5),
                'addata' => $faker->date($format = 'Y-m-d', $max = 'now'),
                ]);
        }
    }
}
