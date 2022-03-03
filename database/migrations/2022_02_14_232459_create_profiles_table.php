<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->index('profiles_user_id_foreign');
			$table->text('bio', 65535)->nullable();
			$table->string('gender', 191)->nullable();
			$table->date('dob')->nullable();
			$table->string('pic', 191)->nullable();
			$table->string('country', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('state', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('address', 191)->nullable();
			$table->string('postal', 191)->nullable();
			$table->string('skype', 191)->nullable();
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
		Schema::drop('profiles');
	}

}
