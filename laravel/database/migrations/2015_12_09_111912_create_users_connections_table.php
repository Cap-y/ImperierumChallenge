<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_connections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('connection_id')->unsigned();
            $table->foreign('connection_id')->references('id')->on('connections');
            $table->integer('friend_id')
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
        Schema::drop('users_connections');
    }
}
