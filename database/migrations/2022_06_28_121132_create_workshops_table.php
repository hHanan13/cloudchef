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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('work_name');
            $table->string('price');
            $table->string('category');
            $table->string('desc');
            $table->string('stock');
            $table->string('quantity');
            $table->string('name_inquiry');
            $table->string('email_inquiry');
            $table->string('text_inquiry');
            $table->string('date');
            $table->string('rate');
            $table->string('count_in_rate');
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
        Schema::dropIfExists('workshops');
    }
};
