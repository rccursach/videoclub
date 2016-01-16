<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorSurnameTable extends Migration
{
    
    public function up()
    {
        Schema::table('directors', function ($table) {
            $table->string('surname',25)->nullable();
        });
    }

    public function down()
    {
        Schema::table('directors', function ($table) {
            $table->dropColumn('surname');
        });
    }
}
