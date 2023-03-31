<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('command');
            $table->string('command_custom')->nullable();
            $table->text('params')->nullable();
            $table->string('expression');
            $table->string('environments')->nullable();
            $table->text('options')->nullable();
            $table->string('log_filename')->nullable();
            $table->boolean('even_in_maintenance_mode')->default(false);
            $table->boolean('without_overlapping')->default(false);
            $table->boolean('on_one_server')->default(false);
            $table->string('webhook_before')->nullable();
            $table->string('webhook_after')->nullable();
            $table->string('email_output')->nullable();
            $table->boolean('sendmail_error')->default(false);
            $table->boolean('log_success')->default(true);
            $table->boolean('log_error')->default(true);
            $table->boolean('status')->default(true);
            $table->boolean('run_in_background')->default(false);
            $table->string('groups')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('sendmail_success')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
