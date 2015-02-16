<?php

use Illuminate\Database\Migrations\Migration;

class CreateCrowdiecurrentlocationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowdie_current_location', function($table) {
            $table->increments('crowdie_current_location_id');
            $table->integer('crowdie_id')->nullable();
            $table->string('crowdie_current_location_street', 45)->nullable();
            $table->string('crowdie_current_location_city', 45)->nullable();
            $table->string('crowdie_current_location_state', 45)->nullable();
            $table->string('crowdie_current_location_zip', 45)->nullable();
            $table->float('crowdie_current_location_latitude')->nullable();
            $table->float('crowdie_current_location_longitude')->nullable();
            $table->date('crowdie_date_last_sign_in')->nullable();
            $table->time('crowdie_time_last_sign_in')->nullable();
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
        Schema::drop('crowdie_current_location');
    }

}