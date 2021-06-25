<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaycreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playcredits', function (Blueprint $table) {
            $table->id('pc_id');
            $table->string('pc_title');
            $table->string('pc_name');
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
        Schema::dropIfExists('playcredits');
    }
}
