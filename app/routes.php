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
Route::get('books/createBookModal', 'BooksController@getCreateBookModal');

//Gets Ranking widget markup
Route::get('books/printRankingWidget', 'BooksController@getPrintRankingWidget');

//Gets books by tag ip
Route::get('books/byTag/{id}', 'BooksController@getByTag');

//Puts +1 vote to print
Route::post('books/print/{id}', 'BooksController@postPrint');

//Gets books order by print_vote (in other words book print ranking)
Route::get('books/print', 'BooksController@getPrint');

//Normal BOOK  resource
Route::resource('books', 'BooksController');


/*
|-----------------------------------------------------------------------------
| Tags routes
|-----------------------------------------------------------------------------
*/
Route::resource('tags', 'TagsController');