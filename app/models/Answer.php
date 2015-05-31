<?php

class Answer extends Eloquent {

    protected $table = 'answer'; // or whatever your table is

    public function question()
    {
        return $this->belongsTo('Question');
    }

}