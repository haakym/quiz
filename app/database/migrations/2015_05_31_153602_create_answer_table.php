<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answer', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('answer');
			$table->integer('question_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('answer', function(Blueprint $table){
			$table->foreign('question_id')
        		->references('id')->on('question')
        		->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answer');
	}

}
