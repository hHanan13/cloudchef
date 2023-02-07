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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('phone');
            $table->string('brand_name');
            $table->string('city');
            $table->string('email');
            $table->string('website');
            $table->string('date');
            $table->string('clock');
            $table->string('product');
            $table->string('quantity');
            $table->string('price');
            $table->string('discount');
            $table->string('final_price');
            $table->string('notes');
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
        Schema::dropIfExists('invoices');
    }
};
