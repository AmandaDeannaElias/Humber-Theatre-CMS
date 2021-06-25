<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumbertheatrepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humbertheatrepages', function (Blueprint $table) {
            $table->id('ht_id');
            $table->string('faculty_year');
            $table->string('special_thanks')->nullable();
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
        Schema::dropIfExists('humbertheatrepages');
    }
}
