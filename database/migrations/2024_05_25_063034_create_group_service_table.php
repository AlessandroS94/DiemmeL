<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_service', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('service_id')->references('id')->on('service')->onUpdate('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_service');
    }

}
