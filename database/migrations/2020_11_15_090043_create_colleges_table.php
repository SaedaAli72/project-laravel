<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('code')->nullable();
            $table->string('location')->nullable();
            $table->unsignedBigInteger('avatar_id');
            $table->foreign('avatar_id')->references('id')->on('avatars');
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id')->references('id')->on('university');
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
        Schema::dropIfExists('colleges');
    }
}
