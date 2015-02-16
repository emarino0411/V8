<?php

use Illuminate\Database\Migrations\Migration;

class CreateStorescheduleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_schedule', function($table) {
            $table->increments('store_schedule_id');
            $table->string('store_schedule_day', 45)->nullable();
            $table->string('store_schedule_open', 45)->nullable();
            $table->string('store_schedule_close', 45)->nullable();
            $table->string('store_schedule_status', 45)->nullable();
            $table->integer('store_id')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_schedule');
    }

}