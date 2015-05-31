<?php

class Quiz extends Eloquent {

    protected $table = 'quiz'; // or whatever your table is

    public function questions()
    {
        return $this->hasMany('Question'); // this should be the model name
    }

}