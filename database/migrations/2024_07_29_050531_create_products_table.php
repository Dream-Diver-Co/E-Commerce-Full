<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('title');
            $table->string('sub_title');
            $table->json('sizes'); // Store sizes as JSON
            $table->json('colors'); // Store colors as JSON
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('old_price', 8, 2)->nullable();
            $table->text('sub_description')->nullable();
            $table->text('description')->nullable();
            $table->text('information')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
