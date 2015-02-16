<?php

use Illuminate\Database\Migrations\Migration;

class CreateCrowdielocationhistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowdie_location_history', function($table) {
            $table->increments('crowdie_location_id');
            $table->integer('crowdie_id')->nullable()->index();
            $table->string('crowdie_location_street', 45)->nullable();
            $table->string('crowdie_location_city', 45)->nullable();
            $table->string('crowdie_location_state', 45)->nullable();
            $table->string('crowdie_location_zip', 45)->nullable();
            $table->float('crowdie_location_latitude')->nullable();
            $table->float('crowdie_location_longitude')->nullable();
            $table->date('crowdie_location_date')->nullable();
            $table->time('crowdie_location_time')->nullable();
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
        Schema::drop('crowdie_location_history');
    }

}