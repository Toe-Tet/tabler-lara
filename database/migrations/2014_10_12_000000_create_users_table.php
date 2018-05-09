<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 50);
            $table->string('password', 100);
            $table->string('phno', 50);
            $table->string('address', 100);
            $table->string('region', 50);
            $table->double('lat');
            $table->double('lng');
            $table->boolean('is_confirmed');
            $table->string('status', 10);
            $table->rememberToken();
            $table->timestamps();
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
