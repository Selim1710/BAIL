<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_orders', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('product_id');
            $table->string('product_model')->default('');
            $table->string('product_name');
            $table->string('unit_price');
            $table->string('quantity');

            $table->string('total_price');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('manage_orders');
    }
}
