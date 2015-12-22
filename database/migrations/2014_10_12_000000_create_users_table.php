<?php

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
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->string('login_count', 10)->default(0);
            $table->string('account_type', 1)->default(1);
            $table->string('sitestate', 1)->default(0);
            $table->string('money', 20)->default(1500);
            $table->string('exp', 20)->default(0);
            $table->string('rank')->default("Tramp");
            $table->string('health', 3)->default(100);
            $table->string('points', 10)->default(0);
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
        Schema::drop('users');
    }
}
