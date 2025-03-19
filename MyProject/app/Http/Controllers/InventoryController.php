<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory; // Ensure Inventory model exists

class InventoryController extends Controller
{
    // Display inventory list
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index', compact('inventory'));
    }

    // Show the form for creating a new item
    public function create()
    {
        return view('inventory.create');
    }

    // Store new item in database
    public function store(Request $request)
{
    $request->validate([
        'item_name' => 'required|string|max:255',
        'category_id' => 'required|integer',
        'qty' => 'required|integer',
        'price' => 'required|numeric',
    ]);

    Inventory::create([
        'item_name' => $request->item_name,  // Updated to match the database
        'category_id' => $request->category_id, // Updated to match the database
        'qty' => $request->qty,  // Updated to match the database
        'price' => $request->price,  // Updated to match the database
    ]);

    
    return redirect()->route('inventory.index')->with('success', 'Item added successfully!');
}

}

