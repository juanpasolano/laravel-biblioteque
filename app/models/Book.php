<?php

class Book extends Eloquent {
	protected $guarded = array();

	public static $rules = array();


     public function tags()
     {
				// return $this->belongsToMany('Tag', 'book_tags')
				// 						->withPivot('equipped');

     	return $this->belongsToMany('Tag');
     }
}