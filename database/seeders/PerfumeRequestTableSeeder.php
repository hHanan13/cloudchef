<?php

namespace Database\Seeders;
use App\Models\perfumerequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PerfumeRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        perfumerequest::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            perfumerequest::create([
                'req_name' => $faker->cityPrefix,
                'quantity' => $faker->buildingNumber,
                'category' => $faker->buildingNumber,
                'sale_price' => $faker->cityPrefix,
                'ghali_price' => $faker->cityPrefix,
                'profit' => $faker->buildingNumber,
                'stock' => $faker->buildingNumber,
                'image' => $faker->buildingNumber,
                'count_in_stock' => $faker->cityPrefix,
                'count_in_rate' => $faker->buildingNumber,
                'date' => $faker->date,
                'value_offer' => $faker->buildingNumber,
                'end_date' => $faker->date,
                'start_date' => $faker->date,
                'offers' => $faker->sentence,
            ]);
        }
    }
}
