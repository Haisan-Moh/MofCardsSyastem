<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول  المديريات
        Schema::create('directorates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('director_no');
            $table->string('director_name');
            $table->foreignId('region_no')->constrained('Regions');
            //$table->foreign('user_id')->references('region_no')->on('Regions');
            $table->integer('director_status');
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
        Schema::dropIfExists('directorates');
    }
}
