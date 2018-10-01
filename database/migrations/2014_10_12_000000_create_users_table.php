<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::USERS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->integer('active');
            $table->string('type_phone');
            $table->string('auto_charge');
            $table->integer('expire_at');
            $table->json('info')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists(Constants::USERS_DB);
    }
}
