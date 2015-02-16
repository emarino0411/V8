<?php

use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function($table) {
            $table->increments('vehicle_id');
            $table->string('vehicle_name', 45)->nullable();
            $table->string('vehicle_load', 45)->nullable();
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
        Schema::drop('vehicle');
    }

}