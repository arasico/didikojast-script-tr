<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StateMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::STATE_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
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
        Schema::dropIfExists(Constants::STATE_DB);
    }
}
