<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guns', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('power');
            $table->integer('accuracy');
            $table->string('price');
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
        //
    }
}
