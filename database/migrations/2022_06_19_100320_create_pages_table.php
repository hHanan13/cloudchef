<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_ar')->nullable();
			$table->string('name_en')->nullable();
			$table->string('type')->nullable();
			$table->string('slug')->nullable();
			$table->string('description_ar')->nullable();
			$table->string('description_en')->nullable();
			$table->boolean('status')->nullable()->default(1);
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('pages');
	}
}