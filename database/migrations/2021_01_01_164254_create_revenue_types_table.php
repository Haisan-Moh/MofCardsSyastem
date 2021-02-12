<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول انواع الايرادات
        Schema::create('revenue_types', function (Blueprint $table) {
            $table->id();
            $table->text('type_name');
            //$table->foreignId('id')->constrained('revenue_items');
            $table->unsignedInteger('itemNO');
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
        Schema::dropIfExists('revenue_types');
    }
}
