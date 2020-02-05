<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('uid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('activity_type');
            $table->text('address');
            $table->text('info')->nullable();
            $table->boolean('fresh')->default(1);
            $table->boolean('active')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('artisans');
    }
}
