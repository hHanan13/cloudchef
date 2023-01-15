<?php

namespace Database\Seeders;
use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
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
            Note::create([
                'name_ar' => $faker->name('ar'),
                'name_en' => $faker->name('en'),
                'desc_ar' => $faker->text('ar'),
                'desc_en' => $faker->text('en'),
                'price' => $faker->buildingNumber,
                'stock' => $faker->buildingNumber,
                'status' => 1,
                'image' => 'default.png',

            ]);
        }
    }
}
