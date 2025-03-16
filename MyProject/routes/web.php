<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InventoryController;

// Home Page Route (Optional)
Route::get('/', function () {
    return view('welcome'); // You can change this to another homepage if needed
});

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect('/login'); // Redirect homepage to login page
})->name('home');


// Inventory Page Route
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

// Protected Routes (Only authenticated users can access)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // You can create a dashboard.blade.php for this
    })->name('dashboard');
});
