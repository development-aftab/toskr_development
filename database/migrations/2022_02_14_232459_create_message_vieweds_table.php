<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageViewedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_vieweds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('task_id', 191)->nullable();
			$table->string('send_to', 191)->nullable();
			$table->string('receiver', 191)->nullable();
			$table->integer('is_group')->nullable();
			$table->string('group_id', 191)->nullable();
			$table->string('viewed', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message_vieweds');
	}

}
