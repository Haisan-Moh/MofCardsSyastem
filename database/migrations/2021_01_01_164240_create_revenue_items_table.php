<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول بنود الايرادات
        Schema::create('revenue_items', function (Blueprint $table) {
            $table->id();
            $table->text('item_name');
            //$table->foreignId('id')->constrained('revenue_chaps');
            $table->unsignedInteger('chapNO');
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
        Schema::dropIfExists('revenue_items');
    }
}
