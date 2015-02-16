<?php

use Illuminate\Database\Migrations\Migration;

class CreateCrowdiescheduleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowdie_schedule', function($table) {
            $table->increments('crowdie_schedule_id');
            $table->integer('crowdie_id')->nullable()->index();
            $table->date('crowdie_schedule_date')->nullable();
            $table->time('crowdie_schedule_start')->nullable();
            $table->time('crowdie_schedule_end')->nullable();
            $table->string('crowdie_schedule_day', 45)->nullable();
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
        Schema::drop('crowdie_schedule');
    }

}