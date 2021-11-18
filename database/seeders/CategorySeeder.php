<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'mens-jeans',
            'description' => 'lorem-epsim',
            'slug' => 'mens_jeans',
            'status' => 1,
            'created_by' => 1,
        ]);
    }
}
