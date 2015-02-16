<?php

use Illuminate\Database\Migrations\Migration;

class CreateMerchantTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function($table) {
            $table->increments('merchant_id');
            $table->string('merchant_fname', 45)->nullable();
            $table->string('merchant_lname', 45)->nullable();
            $table->string('merchant_email', 45)->nullable();
            $table->string('merchant_mobile', 45)->nullable();
            $table->string('merchant_street', 45)->nullable();
            $table->string('merchant_city', 45)->nullable();
            $table->string('merchant_state', 45)->nullable();
            $table->string('merchant_zip', 45)->nullable();
            $table->string('merchant_sss', 45)->nullable();
            $table->integer('merchant_status')->nullable();
            $table->string('username', 45)->nullable();
            $table->string('password', 45)->nullable();
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
        Schema::drop('merchant');
    }

}