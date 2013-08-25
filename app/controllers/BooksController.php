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
		$books = Book::orderBy('print_votes', 'DESC')->with('tags')->get()->all();
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
		if ($validator->fails())
		{
			return Response::json($validator->messages(), 500);
		}

		$book = new Book;
		$book->fill(Input::get('book'));
		$id = $book->save();
		// if(!RegisterService::insertTagsBook(Input::get('tags') , $book->id)) {
		// 	return Response::json('Something went wrong', 200);
		// }
		foreach (Input::get('tags') as $tag) {
				DB::table('book_tag')->insert(array('book_id'=> $book->id, 'tag_id'=>$tag));
			}
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
		$book = Book::find($id);
		// dd($book->print_votes+1);
		$book->print_votes = $book->print_votes+1;
		$book->save();
		return Response::json($book, 200);
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


}