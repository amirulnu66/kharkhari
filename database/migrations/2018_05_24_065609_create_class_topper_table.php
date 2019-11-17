<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTopperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_toppers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_class');
            $table->string('student_section');
            $table->string('student_image');
            $table->string('student_position');
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
        Schema::dropIfExists('class_toppers');
    }
}
