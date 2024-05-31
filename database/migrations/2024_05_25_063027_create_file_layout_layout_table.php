<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileLayoutLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_layout_layout', function (Blueprint $table) {
            $table->unsignedBigInteger('file_layout_id');
            $table->unsignedBigInteger('layout_id');
            $table->timestamps();

            $table->foreign('file_layout_id')->references('id')->on('file_layouts')->onUpdate('cascade');
            $table->foreign('layout_id')->references('id')->on('layout')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('file_layout_layout');
    }

}
