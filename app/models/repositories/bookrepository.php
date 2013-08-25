<?php

class BookRepository {

	public static function all()
	{
		return Book::with('tags')->get()->all();
	}

	public static function save($bookData, $tagsData)
	{

		$book = new Book;
		$book->fill($bookData);
		$id = $book->save();

		if($tagsData){
			foreach ($tagsData as $tag) {
					DB::table('book_tag')->insert(array('book_id'=> $book->id, 'tag_id'=>$tag));
			}
		}
		return $book;
	}

	/*Vote a book up for printing*/
	public static function printVoteUp($id)
	{

		$book = Book::find($id);
		$book->print_votes = $book->print_votes+1;
		$book->save();
		return $book;
	}

	/*Gets list of books by print raking*/
	public static function printRanking()
	{
		return Book::orderBy('print_votes', 'DESC')->with('tags')->get()->all();
	}
}