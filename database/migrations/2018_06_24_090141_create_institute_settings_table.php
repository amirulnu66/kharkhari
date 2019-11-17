<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institute_name');
            $table->string('english_name');
            $table->string('institute_logo');
            $table->string('institute_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('notice');
            $table->string('holiday_list');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institute_settings');
    }
}
