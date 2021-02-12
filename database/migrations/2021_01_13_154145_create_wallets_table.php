<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //جدول الحوافظ النقدية
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('resource_no');
            $table->text('taxpayer');
            $table->unsignedInteger('box_no');
            $table->unsignedInteger('order_no');
            $table->unsignedInteger('status')->default('0');
            $table->unsignedInteger('signature')->default('0');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('wallets');
    }
}
