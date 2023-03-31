<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVariablePredictorCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variable_predictor_category', function (Blueprint $table) {
            $table->foreign(['variable_id'], 'variable_predictor_category_variables_id_fk')->references(['id'])->deferrable()->on('variables');
            $table->foreign(['variable_category_id'], 'variable_predictor_category_variable_categories_id_fk')->references(['id'])->deferrable()->on('variable_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variable_predictor_category', function (Blueprint $table) {
            $table->dropForeign('variable_predictor_category_variables_id_fk');
            $table->dropForeign('variable_predictor_category_variable_categories_id_fk');
        });
    }
}
