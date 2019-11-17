<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pass_year');
            $table->string('total_std');
            $table->string('total_pass');
            $table->string('scholarship');
            $table->string('gread_aplus');
            $table->string('gread_a');
            $table->string('pass_presen');
            $table->string('exam_type');
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
        Schema::dropIfExists('public_results');
    }
}
