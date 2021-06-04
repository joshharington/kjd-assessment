<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
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

        $book_1 = new Product([
            'name' => 'The Jungle Book',
            'description' => 'Children\'s book for bedtime stories.',
            'category_id' => $books_category->id,
            'is_published' => 1,
            'creator_id' => 1,
        ]);

        $book_2 = new Product([
            'name' => '50 Shades of Grey',
            'description' => 'Not a children\'s book about bedtime stories...',
            'category_id' => $books_category->id,
            'is_published' => 1,
            'creator_id' => 1,
        ]);


    }
}
