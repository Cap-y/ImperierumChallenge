<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswearQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answears', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('result_id')->unsigned();
            $table->foreign('result_id')->references('id')->on('user_results');
            $table->integer('answear');
            $table->string('pic');
            $table->text('text');
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
        Schema::drop('answears');
    }
}
