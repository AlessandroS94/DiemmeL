<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLineFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_line_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('product_line_id');
            $table->timestamps();

            $table->foreign('product_line_id')->references('id')->on('product_lines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_line_files');
    }
}
