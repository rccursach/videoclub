<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('directors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->25();
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('directors');
    }
}
