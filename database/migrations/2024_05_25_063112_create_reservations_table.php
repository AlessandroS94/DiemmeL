<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_product_line');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('id_product_line')->references('id')->on('product_lines')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }

}
