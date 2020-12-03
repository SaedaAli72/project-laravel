<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssexams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('is_timed')->nullable();
            $table->integer('allowed_timed')->nullable();
            $table->integer('open_date')->nullable();
            $table->integer('open_time')->nullable();
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
        Schema::dropIfExists('ssexams');
    }
}
