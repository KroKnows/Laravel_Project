<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemsTableSeeder extends Seeder {
    public function run(): void {
        $categories = Category::all();

        foreach ($categories as $category) {
            Item::create([
                'name' => $category->name,
                'category_id' => $category->id,
                'stock' => rand(10, 50),
                'price' => rand(100, 1000),
            ]);
        }
    }
}
