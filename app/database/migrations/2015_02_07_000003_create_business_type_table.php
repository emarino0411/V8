<?php

use Illuminate\Database\Migrations\Migration;

class CreateBusinesstypeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_type', function($table) {
            $table->increments('business_type_id');
            $table->string('busines_name', 45)->nullable();
            $table->string('business_description', 45)->nullable();
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
        Schema::drop('business_type');
    }

}