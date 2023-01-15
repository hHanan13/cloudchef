<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue')->index();
            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('job_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->nullable();
            $table->string('work_from')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('image');
            $table->string('file_job')->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->string('notes')->nullable();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
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
        Schema::dropIfExists('jobs');
    }
}
