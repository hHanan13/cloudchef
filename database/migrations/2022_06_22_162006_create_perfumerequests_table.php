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
        Schema::create('perfumerequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id');
            $table->string('req_name');
            $table->string('quantity');
            $table->string('category');
            $table->string('sale_price');
            $table->string('ghali_price');
            $table->string('profit');
            $table->string('stock');
            $table->string('type');
            $table->string('image');
            $table->string('count_in_stock');
            $table->string('count_in_rate');
            $table->string('date');
            $table->string('tag');
            $table->string('description');
            $table->string('value_offer');
            $table->string('end_date');
            $table->string('start_date');
            $table->string('offers');
            $table->boolean('status')->nullable()->default(1);
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
        Schema::dropIfExists('perfumerequests');
    }
};
