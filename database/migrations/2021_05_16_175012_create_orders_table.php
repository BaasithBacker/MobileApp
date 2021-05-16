<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->String('cid');
            $table->unsignedBigInteger('proid');
            $table->foreign('proid')->references('id')->on('items')->onUpdate('cascade')->OnDelete('cascade');

            $table->String('oqty');
            $table->String('oprice');
            $table->String('ototal');
            $table->String('odate');
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
        Schema::dropIfExists('orders');
    }
}
