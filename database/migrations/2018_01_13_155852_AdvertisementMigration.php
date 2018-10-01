<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdvertisementMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::ADVERTISEMENT_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('tell')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('title');
            $table->string('url');
            $table->text('description')->nullable();
            $table->integer('category_id');
            $table->string('state');
            $table->string('city');
            $table->integer('publish_at');
            $table->integer('expire_at');
            $table->json('info')->nullable();
            $table->integer('updated_at');
            $table->integer('created_at');
            $table->string('type_row');
        });
        Schema::table(Constants::ADVERTISEMENT_DB, function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on(Constants::USERS_DB)->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on(Constants::CATEGORY_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::ADVERTISEMENT_DB);
    }
}
