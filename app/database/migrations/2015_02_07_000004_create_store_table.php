<?php

use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function($table) {
            $table->increments('store_id');
            $table->string('store_name', 45)->nullable();
            $table->string('store_email', 45)->nullable();
            $table->string('store_mobile', 45)->nullable();
            $table->string('store_street', 45)->nullable();
            $table->string('store_city', 45)->nullable();
            $table->string('store_state', 45)->nullable();
            $table->string('store_zip', 45)->nullable();
            $table->float('store_latitude')->nullable();
            $table->float('store_longitude')->nullable();
            $table->integer('merchant_id')->index();
            $table->integer('business_type_id')->index();
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
        Schema::drop('store');
    }

}