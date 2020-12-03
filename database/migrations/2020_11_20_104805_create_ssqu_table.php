<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsquTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssqu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question')->nullable();
            $table->enum('type', ['mcq', 'essay']);
            $table->string('chapter')->nullable();
            $table->enum('answer', ['sel-a', 'sel-b','sel-c','sel-d']);
            $table->string('essay_answer')->nullable();
            $table->enum('difficulty', ['easy','medium','hard']);
            $table->unsignedBigInteger('staff_subject_id');
            $table->foreign('staff_subject_id')->references('id')->on('staff_subjects');
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
        Schema::dropIfExists('ssqu');
    }
}
