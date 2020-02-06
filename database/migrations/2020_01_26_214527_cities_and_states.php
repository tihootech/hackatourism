<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CitiesAndStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         \DB::unprepared(file_get_contents('database/raws/cities.sql'));
     }
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('cities');
     }
}
