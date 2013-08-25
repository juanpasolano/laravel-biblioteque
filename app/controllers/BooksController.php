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


	public function get_byTag($id)
	{
		$tags  = Tag::with('books')->get()->find($id);
		// dd($tags);

		$this->layout->content = View::make('books.index', array('books'=>$tags->books));
		// return Response::json($tags->books, 200);
		// dd($tags);
	}


}