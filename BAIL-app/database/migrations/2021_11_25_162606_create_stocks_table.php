<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();

            $table->string('product_model');
            $table->string('name');
            $table->string('product_type');
            $table->string('current_stock');
            $table->timestamps();
        });
        // schema::create('stocks', function(Blueprint $table){
        //     $table->increments('id');
        //     $table->unsignedInteger('add_products_id');
        //     $table->string('available');
        //     $table->timestamps();

        //     $table->foreign('add_products_id')
        //             ->references('id')
        //             ->on('add_products')
        //             ->onDelete('cascade');
        //             //->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
