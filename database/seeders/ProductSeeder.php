<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csvFile = fopen(base_path("database/data/monstreet.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
            if ($firstline) {
                $firstline = false;
                continue;
            }
            DB::table('products')->insert([
                'title' => $data[0],
                'price' => $data[1],
                'desc' => $data[2],
                'stock' => $data[3],
                'image' => $data[4],
                'type' => 'online'
            ]);
        }
        // $faker = Faker::create();
        // for($i = 0; $i<10; $i++ ){
        //     DB::table('products')->insert([
        //         'title' => $faker->name(),
        //         'price' => $faker->numberBetween(10000,100000),
        //         'desc' => $faker->text(),
        //         'stock' =>$faker->numberBetween(100,500),
        //         'image' =>$faker->imageUrl(640, 480, 'animals', true),
                

        //     ]);
        // }
       
    }
}
