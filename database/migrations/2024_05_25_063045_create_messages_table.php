<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('body')->nullable();
            $table->string('path')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_chat');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('id_chat')->references('id')->on('chats')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }

}
