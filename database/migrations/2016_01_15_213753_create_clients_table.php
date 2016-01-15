<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    
    public function up()
    {
        Schema::create('clients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->string('surname',25);
            $table->string('run',12);
            $table->date('birth_date');
            $table->string('phone',12);
            $table->string('address',30);
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('clients');
    }
}
