<?php

namespace Database\Seeders;
use App\Models\perfume;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        perfume::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            perfume::create([
                'category_id' => $faker->date,
                'seller_id' => $faker->buildingNumber,
                'workshop_id' => $faker->buildingNumber,
                'perfume_name_en' => $faker->cityPrefix,
                'perfume_name_ar' => $faker->cityPrefix,
                'price' => $faker->buildingNumber,
                'parent' => $faker->buildingNumber,
                'quantity' => $faker->buildingNumber,
                'name_inquiry' => $faker->cityPrefix,
                'email_inquiry' => $faker->buildingNumber,
                'text_inquiry' => $faker->sentence,
                'discount' => $faker->buildingNumber,
                'category' => $faker->cityPrefix,
                'desc_en' => $faker->sentence,
                'desc_ar' => $faker->sentence,
                'stock' => $faker->buildingNumber,
                'count_in_stock' => $faker->buildingNumber,
                'count_in_rate' => $faker->buildingNumber,
                'image' => $faker->buildingNumber,
                'date' => $faker->buildingNumber,
                'rate' => $faker->buildingNumber,
                'start_date' => $faker->buildingNumber,
                'end_date' => $faker->buildingNumber,
                'value_offer' => $faker->buildingNumber,
                'star_rating' => $faker->buildingNumber,
                'updated_at' => $faker->buildingNumber,
                'created_at' => $faker->buildingNumber,
            ]);
        }
    }
}
