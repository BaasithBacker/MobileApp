<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('id')->on('categories')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('bid');
            $table->foreign('bid')->references('id')->on('brands')->onUpdate('cascade')->OnDelete('cascade');
            $table->string('imodel');
            $table->string('iname');
            $table->string('isize');
            $table->string('icolor');
            $table->string('idesc');
            $table->string('istock');
            $table->string('isprice');
            $table->string('icprice');
            $table->string('image');
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
        Schema::dropIfExists('items');
    }
}
