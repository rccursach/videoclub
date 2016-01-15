<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    
    public function up()
    {
        Schema::create('genres', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->text('description');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('genres');
    }
}
