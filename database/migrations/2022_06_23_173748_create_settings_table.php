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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();

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
        Schema::dropIfExists('settings');
    }
};
