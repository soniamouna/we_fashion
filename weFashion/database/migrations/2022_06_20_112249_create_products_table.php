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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('picture_id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->enum("size", ["XS","S","M","L","XL"]);
            $table->enum('visible', ["Non publié","Publié"]);
            $table->enum('state', ["Standard", "En solde"]);
            $table->string('reference');
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
        Schema::dropIfExists('products');
    }
};
