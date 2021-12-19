<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->id();
            
            $table->string('product_model');
            $table->string('name');
            $table->string('product_price');
            $table->string('product_type');
            $table->string('product_details');
            $table->string('total_produce');
            // $table->string('color')->nullable();

            $table->timestamps();
        });

        // Schema::create('manage_orders',function(Blueprint $table){
        //     $table->unsignedInteger('product_id');
        //     $table->foreign('product_id')
        //          ->references('id')
        //          ->on('add_products')
        //          ->onDelete('cascade');
                
        //             // ->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_products');
    }
}
