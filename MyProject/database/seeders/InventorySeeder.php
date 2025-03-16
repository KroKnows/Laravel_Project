<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert sample inventory data
        Inventory::create([
            'name' => 'Laptop',
            'category' => 'Electronics',
            'stock' => 10,
            'price' => 45000.00
        ]);

        Inventory::create([
            'name' => 'T-Shirt',
            'category' => 'Clothing',
            'stock' => 50,
            'price' => 500.00
        ]);

        Inventory::create([
            'name' => 'Phone',
            'category' => 'Electronics',
            'stock' => 20,
            'price' => 25000.00
        ]);
    }
}
