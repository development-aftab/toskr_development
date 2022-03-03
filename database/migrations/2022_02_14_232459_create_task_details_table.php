<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('task_id', 191)->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('manager_id')->nullable();
			$table->string('activity_name', 191)->nullable();
			$table->string('process', 191)->nullable();
			$table->text('status', 65535)->nullable();
			$table->string('note', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_details');
	}

}
