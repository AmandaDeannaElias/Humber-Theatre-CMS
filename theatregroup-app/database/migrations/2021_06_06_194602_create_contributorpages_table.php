<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributorpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributorpages', function (Blueprint $table) {
            $table->bigIncrements('contributorpage_id');
            //assigning fk for eprograms
            $table->unsignedBigInteger('eprogram_id');
            $table->foreign('eprogram_id')->references('eprogram_id')->on('eprograms')->onUpdate('cascade')->onDelete('cascade');
            $table->string('staff_title');
            $table->longText('description');
            //assigning fk for staffroles
            $table->unsignedBigInteger('sr_id');
            $table->foreign('sr_id')->references('sr_id')->on('staffroles')->onUpdate('cascade')->onDelete('cascade');
            //assigning fk for contributors
            $table->unsignedBigInteger('contributor_id');
            $table->foreign('contributor_id')->references('contributor_id')->on('contributors')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('contributorpages');
    }
}
