<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdvertisementGalleryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::ADVERTISEMENT_GALLERY_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advertisement_id');
            $table->string('image');
            $table->integer('created_at');
        });
        Schema::table(Constants::ADVERTISEMENT_GALLERY_DB, function (Blueprint $table) {
            $table->foreign('advertisement_id')->references('id')->on(Constants::ADVERTISEMENT_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::ADVERTISEMENT_GALLERY_DB);
    }
}
