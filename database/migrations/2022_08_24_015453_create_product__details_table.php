<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__details', function (Blueprint $table) {
            $table->id();
            $table->string('pd_name');
            $table->longText('pd_desc');
            $table->bigInteger('pd_price');
            $table->string('pd_image');
            $table->bigInteger('pd_sold');
            $table->bigInteger('category_id');
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
        Schema::dropIfExists('product__details');
    }
};
