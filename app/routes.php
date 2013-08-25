<?php

Route::get('/', function()
{
	return View::make('hello');
});

/*
|-----------------------------------------------------------------------------
| Books routes
|-----------------------------------------------------------------------------
*/
//Gets CreateBookModal markup
Route::get('books/createBookModal', 'BooksController@get_createBookModal');

//Gets Ranking widget markup
Route::get('books/printRankingWidget', 'BooksController@get_printRankingWidget');

//Gets books by tag ip
Route::get('books/byTag/{id}', 'BooksController@get_byTag');

//Puts +1 vote to print
Route::post('books/print/{id}', 'BooksController@post_print');

//Gets books order by print_vote (in other words book print ranking)
Route::get('books/print', 'BooksController@get_print');

//Normal BOOK  resource
Route::resource('books', 'BooksController');


/*
|-----------------------------------------------------------------------------
| Tags routes
|-----------------------------------------------------------------------------
*/
Route::resource('tags', 'TagsController');