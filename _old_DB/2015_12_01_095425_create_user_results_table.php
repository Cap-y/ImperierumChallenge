<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user_challenges');
            $table->integer('challenge_id')->unsigned();
            $table->foreign('challenge_id')->references('challenge_id')->on('user_challenges');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->string('challenge_name')->unsigned();
            $table->foreign('challenge_name')->references('name')->on('challenges');
            $table->string('challenge_desc')->unsigned();
            $table->foreign('challenge_desc')->references('description')->on('challenges');            
            $table->string('challenge_type')->unsigned();
            $table->foreign('challenge_type')->references('type')->on('challenges');
            $table->integer('challenge_admin')->unsigned();
            $table->foreign('challenge_admin')->references('admin')->on('challenges');
            $table->string('challenge_thumbnail')->unsigned();
            $table->foreign('challenge_thumbnail')->references('thumbnail')->on('challenges');
            $table->integer('secrecy');
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
        Schema::drop('user_results');
    }
}
