<?php

use Illuminate\Database\Migrations\Migration;

class CreateCrowdieTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowdie', function($table) {
            $table->increments('crowdie_id');
            $table->string('crowdie_fname', 45)->nullable();
            $table->string('crowdie_lname', 45)->nullable();
            $table->string('crowdie_mobile', 45)->nullable();
            $table->string('crowdie_email', 45)->nullable();
            $table->string('crowdie_sss', 45)->nullable();
            $table->string('crowdie_license', 45)->nullable();
            $table->integer('crowdie_vehicle')->index();
            $table->string('crowdie_birthdate', 45)->nullable();
            $table->string('crowdie_referral_code', 45)->nullable();
            $table->string('crowdie_reference_code', 45)->nullable();
            $table->integer('crowdie_online_status')->nullable();
            $table->integer('crowdie_application_status')->nullable();
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
        Schema::drop('crowdie');
    }

}