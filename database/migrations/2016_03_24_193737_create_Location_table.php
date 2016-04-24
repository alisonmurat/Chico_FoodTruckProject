<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Location', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Street');
            $table->string('City');
            $table->string('State');
            $table->string('ZipCode');
            $table->string('Hours');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Location');
    }
}
