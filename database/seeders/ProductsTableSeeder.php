<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        for ($i=0; $i < 30; $i++) {
            # code...
            Product::create([
                'title'=>$faker->sentence(1),
                'slug'=>$faker->slug,
                'subtitle'=>$faker->sentence(12),
                'description'=>$faker->text,
                'price'=>$faker->numberBetween(60000, 300000),
                'image'=> 'https://via.placeholder.com/400x225'
            ]);
        }
    }
}
