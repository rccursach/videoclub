<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentReturnedDefaultFalseTable extends Migration
{
    public function up()
    {
        Schema::table('rents', function ($table) {
            $table->boolean('returned')->default(false)->change();
        });
    }

    public function down()
    {
        Schema::table('rents', function ($table) {
            $table->boolean('returned')->change();
        });
    }
}
