<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('company_id', 191)->nullable();
			$table->string('manager_id', 191)->nullable();
			$table->string('project_name', 191)->nullable();
			$table->string('category', 191)->nullable();
			$table->string('image', 191)->nullable();
			$table->string('start_date', 191)->nullable();
			$table->string('end_date', 191)->nullable();
			$table->string('assign_to', 191)->nullable();
			$table->string('priority', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('status', 191)->default('assigned');
			$table->string('bar_link', 191)->nullable()->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
