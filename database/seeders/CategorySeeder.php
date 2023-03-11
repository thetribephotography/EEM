<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'HOTEL']);
        Category::create(['name' => 'BREAKFAST']);
        Category::create(['name' => 'PARKING']);
        Category::create(['name' => 'ELECTRONICS']);
        Category::create(['name' => 'RENTAL CAR']);
        Category::create(['name' => 'RIDE SHARING']);
        Category::create(['name' => 'SHUTTLE']);
        Category::create(['name' => 'OFFICE SUPPLIES']);
        Category::create(['name' => 'FAST FOOD']);
        Category::create(['name' => 'RESTURANT']);
        Category::create(['name' => 'TAXI']);
        Category::create(['name' => 'AIRLINE']);
    }
}
