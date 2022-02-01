<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoryStocksTable extends Migration
{
    
    public function up()
    {
        Schema::create('accessory_stocks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accessories_id');
            $table->integer('total_produce');
            $table->foreign('accessories_id')
                ->references('id')
                ->on('add_accessories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('accessory_stocks');
    }
}
