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
            $table->string('name', 50)->unique()->nullable(false);
            $table->text('description')->nullable();
            $table->string('catalog_name', 50)->nullable(false);
//            $table->foreignId('catalog_name')->nullable()->constrained('catalogs');
            $table->foreign('catalog_name')->references('name')->on('catalogs');
            $table->foreignId('image_id')->nullable()->constrained('images');
            $table->enum('status', ['1', '2', '3'])->default('1');
//            $table->string('slug', 50);
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
