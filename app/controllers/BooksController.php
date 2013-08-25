<?php

class BooksController extends BaseController {

	protected $layout = 'master';
	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = BookRepository::all();
		$this->layout->content = View::make('books.index', array('books'=>$books));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $rules = array(
    	// 'name' => 'required|min:5',
    	// 'description' => 'required',
    	// 'author' => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) return Response::json($validator->messages(), 500);

		//Saving the book with repository
		if(!$book = BookRepository::save(Input::get('book'), Input::get('tags'))) {
			return Response::json('Something went wrong', 500);
		}

		//final response
		return Response::json($book, 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// $book = BookRepository::printVoteUp($id);
		// return Response::json($book, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



	/**
	 * Updets print_vote in database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function post_print($id)
	{
		$book = BookRepository::printVoteUp($id);
		return Response::json($book, 200);
	}

	/**
	 * Gets book print ranking.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function get_print()
	{
		$books = BookRepository::printRanking();
		return Response::json($books, 200);
	}

	/**
	 * Gets books by tag id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function get_byTag($id)
	{
		$tags  = Tag::with('books')->get()->find($id);
		$this->layout->content = View::make('books.index', array('books'=>$tags->books));
	}


	/*
	|-----------------------------------------------------------------------------
	| MODALS AND OTHER MARKUPS
	|-----------------------------------------------------------------------------
	*/

	/**
	 * Return HTML markup to create a new book.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function get_createBookModal(){
		$tags = Tag::all();
	 	return View::make('createBookModal', array('tags'=>$tags));
	}

	/**
	 * Return HTML markup to create a new book.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function get_printRankingWidget(){
		$books = BookRepository::printRanking();
		return View::make('printwidget', array('books'=>$books));
	}

}