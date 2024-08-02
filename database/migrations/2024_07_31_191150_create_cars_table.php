<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->string('vin')->unique()->default('');
            $table->string('shipping_status'); // e.g., 'available', 'in_transit', 'delivered'
            $table->string('image')->nullable();
            $table->string('fuel_type'); // e.g., 'Gasoline'
            $table->string('engine'); // e.g., '2.0 L'
            $table->string('location'); // e.g., 'Media City Dubai, UAE'
            $table->string('mileage'); // e.g., '1500 mi'
            $table->decimal('price', 10, 2); // Price with 10 digits in total and 2 decimal places
            $table->integer('stock'); // Number of cars in stock
            $table->string('used'); // Descriptive field for usage, e.g., '2 Years used'
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
