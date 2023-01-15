<?php

namespace Database\Seeders;
use App\Models\download_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DownloaddetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        download_detail::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            download_detail::create([
                'product' => $faker->cityPrefix,
                'total' => $faker->buildingNumber,
                'subtotal' => $faker->buildingNumber,
                'payment_method' => $faker->cityPrefix,
                'payment_sallary' => $faker->shuffle,
                'shipping' => $faker->cityPrefix,
                'paid' => $faker->buildingNumber,
                'batch_id' => $faker->buildingNumber,
                'amount' => $faker->randomDigitNotNull,
                'batch' => $faker->cityPrefix,
                'cash' => $faker->buildingNumber,
                'billing_access_address' => $faker->buildingNumber,
                'shipping_address' => $faker->randomDigitNotNull,
                'checkout_status' => $faker->cityPrefix,
                
            ]);
        }
    }
}
