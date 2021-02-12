<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول المبالغ المحصله
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('wallet_id');
            $table->bigInteger('cash');
            $table->unsignedInteger('section_no');
            $table->unsignedInteger('chap_no');
            $table->unsignedInteger('item_no');
            $table->unsignedInteger('type_no');
            $table->text('note');
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
        Schema::dropIfExists('receipts');
    }
}
