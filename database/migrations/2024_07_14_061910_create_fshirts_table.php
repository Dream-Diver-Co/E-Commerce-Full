<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFshirtsTable extends Migration
{
    public function up()
    {
        Schema::create('fshirts', function (Blueprint $table) {
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

    public function down()
    {
        Schema::dropIfExists('fshirts');
    }
}
