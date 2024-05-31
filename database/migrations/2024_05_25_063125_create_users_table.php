<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_user');
            $table->string('surname_user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fiscalCode_user');
            $table->string('address_user');
            $table->string('country_user');
            $table->string('city_user')->nullable();
            $table->string('region_user')->nullable();
            $table->timestamps();
            $table->tinyInteger('active');
            $table->string('remember_token', 100)->nullable();
            $table->unsignedBigInteger('group_id');
            $table->softDeletes();

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }

}
