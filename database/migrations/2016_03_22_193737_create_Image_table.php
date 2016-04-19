<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Image', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('FileName');
            $table->string('GalleryName');
            $table->integer('Gallery_id')->unsigned();
            $table->foreign('Gallery_id') // country_state_id_foreign
                ->references('id')->on('Gallery') 
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Image');
    }
}
