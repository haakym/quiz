<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('question');
			$table->integer('quiz_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('question', function(Blueprint $table){
			$table->foreign('quiz_id')
        		->references('id')->on('quiz')
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
		Schema::drop('question');
	}

}
