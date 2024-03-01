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
            $table->text('brief')->nullable();
            $table->text('description')->nullable();
            $table->string('portions', 10)->default('1');
            $table->string('duration', 10)->default('0');
            $table->string('catalog_name', 50)->nullable(false);
            $table->foreign('catalog_name')->references('name')->on('catalogs');
            $table->foreignId('catalog_name')->nullable()->constrained('catalogs');
            $table->string('category_name', 50)->nullable(false);
            $table->foreign('category_name')->references('name')->on('categories');
            $table->string('kind_name', 50)->nullable(false);
            $table->foreign('kind_name')->references('name')->on('kinds');
            $table->string('group_name', 50)->nullable(false);
            $table->foreign('group_name')->references('name')->on('groups');
            $table->string('rubric_name', 50)->nullable(false);
            $table->foreign('rubric_name')->references('name')->on('rubrics');
            $table->string('protein_name', 50)->nullable(false);
            $table->foreign('protein_name')->references('name')->on('proteins');
            $table->string('carb_name', 50)->nullable(false);
            $table->foreign('carb_name')->references('name')->on('carbs');
            $table->string('dairyveg_name', 50)->nullable(false);
            $table->foreign('dairyveg_name')->references('name')->on('dairyvegs');
            $table->string('fruitdrink_name', 50)->nullable(false);
            $table->foreign('fruitdrink_name')->references('name')->on('fruitdrinks');
            $table->string('oilnut_name', 50)->nullable(false);
            $table->foreign('oilnut_name')->references('name')->on('oilnuts');
            $table->string('sweet_name', 50)->nullable(false);
            $table->foreign('sweet_name')->references('name')->on('sweets');
            $table->foreignId('image_id')->nullable()->constrained('images');
            $table->enum('status', ['1', '2', '3'])->default('1');
            $table->string('slug', 50)->unique()->nullable(false);
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
