<?php

class Question extends Eloquent {

    protected $table = 'question'; // or whatever your table is

    public function quiz()
    {
        return $this->belongsTo('Quiz'); // defining the inverse of the relation
    }

    public function answers()
    {
        return $this->hasMany('Answer');
    }

}