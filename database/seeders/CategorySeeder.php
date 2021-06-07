<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $automotive_category = Category::create(['name' => 'Automotive']);
        $books_category = Category::create(['name' => 'Books']);
        $electronics_category = Category::create(['name' => 'Electronics']);
        $furniture_category = Category::create(['name' => 'Furniture']);
    }
}
