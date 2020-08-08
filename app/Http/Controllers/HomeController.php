<?php

namespace App\Http\Controllers;

use App\Book;
use App\BorrowHistory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index(Book $books)
    {
        $id =auth()->id();

        $books = BorrowHistory::where('user_id', $id)->pluck('book_id');
    dd($books);
        return view('home', [
            'books' => $books
        ]);
    }*/

    public function index()
    {
        $books = auth()->user()->borrow;

        return view('home', [
            'books' => $books,
        ]);
    }
}
