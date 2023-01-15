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
        Schema::create('download_details', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('total');
            $table->string('subtotal');
            $table->string('payment_method');
            $table->json('payment_sallary')->nullable();
            $table->string('shipping');
            $table->string('paid');
            $table->string('batch_id');
            $table->string('amount');
            $table->string('batch');
            $table->string('cash');
            $table->string('billing_access_address');
            $table->string('shipping_address');
            $table->string('checkout_status');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('download_details');
    }
};
