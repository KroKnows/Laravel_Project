<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use App\Models\Category;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories from the database
        $electronicsCategory = Category::where('name', 'Electronics')->first();
        $clothingCategory = Category::where('name', 'Clothing')->first();

        // Insert sample inventory data
        Inventory::create([
            'item_name' => 'Laptop', // ✅ Match database field
            'category_id' => $electronicsCategory->id, // ✅ Use category_id
            'qty' => 10, // ✅ Match database field
            'price' => 45000.00
        ]);

        Inventory::create([
            'item_name' => 'T-Shirt',
            'category_id' => $clothingCategory->id,
            'qty' => 50,
            'price' => 500.00
        ]);

        Inventory::create([
            'item_name' => 'Phone',
            'category_id' => $electronicsCategory->id,
            'qty' => 20,
            'price' => 25000.00
        ]);
    }
}
