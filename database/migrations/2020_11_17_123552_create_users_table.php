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
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->enum('role', ['student', 'staff','admin','parent']);
            $table->enum('gender', ['male','female', 'others']);
            $table->string('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('national_id')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('fb_url')->nullable();
            $table->unsignedBigInteger('avatar_id');
            $table->foreign('avatar_id')->references('id')->on('avatars');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');
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
        Schema::dropIfExists('users');
    }
}
