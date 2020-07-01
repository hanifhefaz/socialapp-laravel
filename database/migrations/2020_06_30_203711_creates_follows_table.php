<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesFollowsTable extends Migration
{

    public function up()
    {
        Schema::create('follows', function(Blueprint $table){

        $table->primary(['user_id', 'following_user_id']);
        $table->foreignId('user_id');
        $table->foreignId('following_user_id');
        $table->timestamps();

        $table->foreign('user_id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');

        $table->foreign('following_user_id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');

    });
}


    public function down()
    {
        //
    }
}
