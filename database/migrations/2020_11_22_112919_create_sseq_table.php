<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSseqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sseq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mark')->nullable();
            $table->unsignedBigInteger('ssqu_id');
            $table->foreign('ssqu_id')->references('id')->on('ssqu');
            $table->unsignedBigInteger('ssexam_id');
            $table->foreign('ssexam_id')->references('id')->on('ssexams');
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
        Schema::dropIfExists('sseq');
    }
}
