<?php

use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function($table) {
            $table->increments('delivery_id');
            $table->date('delivery_date')->nullable();
            $table->time('delivery_time')->nullable();
            $table->integer('delivery_status');
            $table->integer('crowdie_id')->index();
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
        Schema::drop('delivery');
    }

}