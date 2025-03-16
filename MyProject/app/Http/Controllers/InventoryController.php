<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory; // Make sure you have an Inventory model

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all(); // Fetch all inventory items
        return view('inventory', compact('inventory'));
    }
}
