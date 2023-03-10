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
            $table->unsignedBigInteger('merchant_id');
            $table->string('client_name');
            $table->string('phone');
            $table->string('brand_name');
            $table->string('num_emp');
            $table->string('num_branch');
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
            $table->string('status')->nullable();
            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade');
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
