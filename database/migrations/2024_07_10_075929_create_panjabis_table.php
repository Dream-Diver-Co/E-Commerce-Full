<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panjabis', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("price");
            $table->text("subtitle")->nullable();
            $table->text("description")->nullable();
            $table->string("information");
            $table->text("image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panjabis');
    }
};
