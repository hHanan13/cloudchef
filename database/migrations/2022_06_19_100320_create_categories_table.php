<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_ar')->nullable();
			$table->string('name_en')->nullable();
			$table->string('description_ar')->nullable();
			$table->string('description_en')->nullable();
			$table->integer('parent_id')->nullable();
			$table->string('image')->nullable();
			$table->boolean('status')->default(1)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('categories');
	}
}
