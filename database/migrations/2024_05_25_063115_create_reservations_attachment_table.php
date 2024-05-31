<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_attachment', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('reservation');
            $table->timestamps();

            $table->foreign('reservation')->references('id')->on('reservations')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations_attachment');
    }

}
