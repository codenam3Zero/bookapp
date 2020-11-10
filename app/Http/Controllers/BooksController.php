<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
	{
		return Book::all();
	}
	
	public function index2($id)
	{
		$post = Book::find($id);
		if (! $post) {
			return response()->json([
			'message' => 'Book not found',
			"code" => 404
			
		]);
		}
		
		
	}
}
