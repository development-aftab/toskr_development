<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('password', 191)->nullable();
			$table->string('gender', 191)->nullable();
			$table->string('dob', 191)->nullable();
			$table->string('pic', 191)->nullable();
			$table->string('phone', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
