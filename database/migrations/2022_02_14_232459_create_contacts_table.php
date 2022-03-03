<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('message', 191)->nullable();
			$table->string('state', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
