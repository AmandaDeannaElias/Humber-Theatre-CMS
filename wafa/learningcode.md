#### Code done with Amanda to figure out foreign keys
        
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
