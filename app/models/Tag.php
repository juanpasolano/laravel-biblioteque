<?php

class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function books()
	{
	     return $this->belongsToMany('Books', 'book_tags')
	     							->withPivot('equipable');
	}
}