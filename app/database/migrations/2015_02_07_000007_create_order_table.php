<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function($table) {
            $table->increments('order_id');
            $table->string('order_destination_street', 45)->nullable();
            $table->string('order_destination_city', 45)->nullable();
            $table->string('order_destination_state', 45)->nullable();
            $table->string('order_destination_zip', 45)->nullable();
            $table->string('order_destination_line_2', 45)->nullable();
            $table->time('order_pick_up_time')->nullable();
            $table->date('order_pick_up_date')->nullable();
            $table->time('order_delivery_time')->nullable();
            $table->date('order_delivery_date')->nullable();
            $table->string('order_unique_code', 45)->nullable();
            $table->string('order_delivery_status', 45)->nullable();
            $table->string('order_assign_status', 45)->nullable();
            $table->integer('order_delivery_size')->index();
            $table->integer('store_id')->index();
            $table->integer('delivery_id')->index();
            $table->integer('customer_id')->index();
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
        Schema::drop('order');
    }

}