<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimetimes', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('crime1')->default(\Carbon\Carbon::now());
            $table->string('crime1a')->default('0');
            $table->string('crime2')->default(\Carbon\Carbon::now());
            $table->string('crime2a')->default('0');
            $table->string('crime3')->default(\Carbon\Carbon::now());
            $table->string('crime3a')->default('0');
            $table->string('crime4')->default(\Carbon\Carbon::now());
            $table->string('crime4a')->default('0');
            $table->string('crime5')->default(\Carbon\Carbon::now());
            $table->string('crima5a')->default('0');
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
        Schema::drop('crimetimes');
    }
}
