<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactShowcaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_showcase', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->text('text');
            $table->string('email', 40)->unique();
            $table->string('region', 40);
            $table->string('nation', 40);
            $table->string('number', 255);
            $table->string('street', 255);
            $table->string('lat', 255);
            $table->string('long', 255);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_showcase');
    }

}
