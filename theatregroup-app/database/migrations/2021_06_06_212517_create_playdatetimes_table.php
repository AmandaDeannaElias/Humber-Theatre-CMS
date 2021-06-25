<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaydatetimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playdatetimes', function (Blueprint $table) {
            $table->id('pdt_id');
            $table->date('play_date');
            $table->time('play_time');
            $table->unsignedBigInteger('eprogram_id');
            $table->foreign('eprogram_id')->references('eprogram_id')->on('eprograms')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('playdatetimes');
    }
}
