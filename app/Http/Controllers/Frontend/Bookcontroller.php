<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function index(){

        $books = Book::paginate(10);
        return view('frontend.book.index', [
            'judul' => 'Beranda Perpus',
            'books' => $books
        ]);
    }
    public function show(Book $book){
        
        return view('frontend.book.show', [
            'judul' => $book->title,
            'book' => $book
        ]);

    }

   /* public function pinjam(Book $book) {
        
        BorrowHistory::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id
        ]);

        return redirect()->back()->with('success', 'Buku berhasil dipinjam');
    }*/

    public function pinjam(Book $book)
    {
       $user = auth()->user();

       if ($user->borrow()->where('books.id', $book->id)->count() > 0) {
           return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
       }

       $user->borrow()->attach($book);
       $book->decrement('qty');

       return redirect()->back()->with('toast', 'Berhasil meminjam buku');
    }
}
