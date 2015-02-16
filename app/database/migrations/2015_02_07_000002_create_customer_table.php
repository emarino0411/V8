<?php

use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function($table) {
            $table->increments('customer_id');
            $table->string('customer_fname', 45)->nullable();
            $table->string('customer_lname', 45)->nullable();
            $table->string('customer_street', 45)->nullable();
            $table->string('customer_city', 45)->nullable();
            $table->string('customer_state', 45)->nullable();
            $table->string('customer_zip', 45)->nullable();
            $table->string('customer_line_2', 45)->nullable();
            $table->string('customer_email', 45)->nullable();
            $table->string('customer_mobile', 45)->nullable();
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
        Schema::drop('customer');
    }

}