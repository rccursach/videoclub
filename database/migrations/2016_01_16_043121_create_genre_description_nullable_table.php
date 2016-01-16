<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreDescriptionNullableTable extends Migration
{
    public function up()
    {
        Schema::table('genres', function ($table) {
            $table->text('description')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('genres', function ($table) {
            $table->text('description')->change();
        });
    }
}
