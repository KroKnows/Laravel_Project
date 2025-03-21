<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventories'; // Ensure it matches your table name

    protected $fillable = [
        'item_name',
        'category_id',
        'qty',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

