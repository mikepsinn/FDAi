<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->foreign(['client_id'], 'purchases_client_id_fk')->references(['client_id'])->on('oa_clients');
            $table->foreign(['subscriber_user_id'], 'purchases_wp_users_ID_fk')->references(['ID'])->deferrable()->on('wp_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign('purchases_client_id_fk');
            $table->dropForeign('purchases_wp_users_ID_fk');
        });
    }
}
