<?php

Route::get('/', function()
{
    $quiz = Quiz::first();
    
    return View::make('quizzes', compact('quiz'));
});
