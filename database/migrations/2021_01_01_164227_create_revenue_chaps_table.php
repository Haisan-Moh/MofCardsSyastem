<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueChapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول الفصول للايرادات
        Schema::create('revenue_chaps', function (Blueprint $table) {
            $table->id();
            $table->text('chap_name');
            //$table->foreignId('id')->constrained('revenue_secs');
            $table->unsignedInteger('secNO');
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
        Schema::dropIfExists('revenue_chaps');
    }
}
