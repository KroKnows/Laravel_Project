<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Item name
            $table->unsignedBigInteger('category_id'); // Foreign key to categories
            $table->integer('stock'); // Stock count
            $table->decimal('price', 8, 2); // Price with 2 decimal places
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
