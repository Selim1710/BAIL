<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_accessories', function (Blueprint $table) {
            $table->id();

            $table->string('accessories_model');
            $table->string('name');
            $table->string('accessories_type');
            $table->string('accessories_details');
            $table->string('acc_img');

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
        Schema::dropIfExists('add_accessories');
    }
}
