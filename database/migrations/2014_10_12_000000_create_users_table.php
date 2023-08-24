<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key with auto_increment
            $table->string('name');
            $table->string('email');
            $table->string('address')->nullable(true);
            $table->string('tel')->nullable(true);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); // Created at and updated at
            $table->softDeletes(); // For soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

