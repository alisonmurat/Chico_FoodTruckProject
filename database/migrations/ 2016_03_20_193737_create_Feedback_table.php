<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('UserName');
            $table->string('Comment');
            $table->string('Email');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Feedback');
    }
}
