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
         Schema::create('cities', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('name');
         });

         \DB::table('cities')->insert([
             ['name' => 'کرمانشاه'],
             ['name' => 'اسلام آباد غرب'],
             ['name' => 'جوانرود'],
             ['name' => 'کنگاور'],
             ['name' => 'سرپل ذهاب'],
             ['name' => 'سنقر'],
             ['name' => 'هرسین'],
             ['name' => 'صحنه'],
             ['name' => 'پاوه'],
             ['name' => 'روانسر'],
             ['name' => 'گیلانغرب'],
             ['name' => 'روانسر'],
             ['name' => 'قصر شیرین'],
             ['name' => 'تازه‌آباد'],
         ]);
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
