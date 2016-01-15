<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('rents', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer,unsigned('movie_id');
            $table->integer,unsigned('client_id');
            $table->boolean('returned');
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies');
            $table->foreign('client_id')
                ->references('id')
                ->on('clients');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rents');
    }
}
