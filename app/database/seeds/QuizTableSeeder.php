<?php
 
class QuizTableSeeder extends Seeder {
 
  public function run()
  {
  	DB::table('quiz')->delete();
  	DB::table('answer')->delete();
  	DB::table('question')->delete();

  	$quiz = Quiz::create([
  		'name' => 'test', 
  		'description' => 'test quiz'
  	]);

  	$question1 = Question::create(['question' => 'question1', 'quiz_id' => $quiz->id]);

  	$answer1 = Answer::create(['answer' => 'answer1', 'question_id' => $question1->id]);
  	$answer2 = Answer::create(['answer' => 'answer2', 'question_id' => $question1->id]);
  	$answer3 = Answer::create(['answer' => 'answer3', 'question_id' => $question1->id]);
  }
 
}