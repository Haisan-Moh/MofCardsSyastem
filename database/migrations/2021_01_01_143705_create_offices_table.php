<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول  المكاتب
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('office_no');
            $table->string('office_name');
            $table->foreignId('director_no')->constrained('Directorates');
            $table->integer('office_status');
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
        Schema::dropIfExists('offices');
    }
}
