<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::CATEGORY_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('title');
            $table->string('images')->nullable();
            $table->string('description')->nullable();
            $table->integer('updated_at');
            $table->integer('created_at');
            $table->string('type_row');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Constants::CATEGORY_DB);
    }
}
