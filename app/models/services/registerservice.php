<?php


class RegisterService{

	public static function insertTagsBook($tags, $book_id){


		dd('I reached de Register Service');
		try {

			foreach ($tags as $tag) {
				dd($tag)
				// DB::table('book_tag')->insert(array('book_id'=>$book_id, 'tag_id'=>$tag));
			}
			return true;

		} catch (Exception $e) {

			return false;

		}


	}