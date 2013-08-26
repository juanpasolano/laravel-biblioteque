<?php

class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function books()
	{
	     return $this->belongsToMany('Book', 'book_tag', 'tag_id', 'book_id');
	     // return $this->belongsToMany('Book');

	}
}