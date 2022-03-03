<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 191)->nullable();
			$table->integer('group_mes')->nullable()->default(0);
			$table->integer('from_user_id')->nullable();
			$table->integer('to_user_id')->nullable();
			$table->text('content', 65535)->nullable();
			$table->string('status', 191)->nullable();
			$table->string('viewed_by_sender', 191)->nullable();
			$table->string('viewed_by_receiver', 191)->nullable();
			$table->integer('task_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
