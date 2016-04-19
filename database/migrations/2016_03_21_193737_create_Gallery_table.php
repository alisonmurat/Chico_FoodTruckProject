 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ImageName');
            $table->string('GalleryDescription');
            $table->string('FileName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Gallery');
    }
}
