<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category; // Ensure Category model exists

class InventoryController extends Controller
{
    // Display inventory list
    public function index()
    {
        $inventory = Inventory::with('category')->get(); // Load categories with inventory
        return view('inventory.index', compact('inventory'));
    }

    // Show the form for creating a new item
    public function create()
    {
        $categories = Category::all(); // Fetch categories for dropdown
        return view('inventory.create', compact('categories'));
    }

    // Store new item in database
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // Ensure valid category
            'qty' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Inventory::create([
            'item_name' => $request->item_name,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'price' => $request->price,
        ]);

        return redirect()->route('inventory.index')->with('success', 'Item added successfully!');
    }
}
