<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvitationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('company_id', 191)->nullable();
			$table->string('department_id', 191)->nullable();
			$table->string('role_id', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('url', 191)->nullable();
			$table->string('status', 191)->nullable();
			$table->string('unique_code', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invitations');
	}

}
