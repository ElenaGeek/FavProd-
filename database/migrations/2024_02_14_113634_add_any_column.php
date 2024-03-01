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
        Schema::table('products', function (Blueprint $table) {
//           $table->string('protein_qnt', 20)->unique()->nullable(false)->default('')->after('protein_name')->comment('quantity');
//           $table->index('protein_qnt');
            $table->string('protein_qnt', 20)->default('')->after('protein_name');
            $table->string('carb_qnt', 20)->default('')->after('carb_name');
            $table->string('dairyveg_qnt', 20)->default('')->after('dairyveg_name');
            $table->string('fruitdrink_qnt', 20)->default('')->after('fruitdrink_name');
            $table->string('oilnut_qnt', 20)->default('')->after('oilnut_name');
            $table->string('sweet_qnt', 20)->default('')->after('sweet_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['protein_qnt', 'carb_qnt', 'dairyveg_qnt', 'fruitdrink_qnt', 'oilnut_qnt', 'sweet_qnt']);
        });
    }
};
