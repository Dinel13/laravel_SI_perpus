<?php

namespace App\Http\Controllers\Admin;

use App\Autor;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function autor()
    {
        $autors = Autor::orderBy('id', 'DESC');

        return datatables()->of($autors)
            ->addColumn('Aksi', function (Autor $autor) {
                return view('hapus', ['autor' => $autor]);
            })
            ->addINdexColumn()
            ->toJson();
    }

    public function book()
    {
        return datatables()->of(Book::with('autor')->orderBy('title', 'ASC'))
            ->addColumn('autor', function (Book $model) {
                return $model->autor->name;
            })
            ->editColumn('cover', function (Book $model) {
                return '<img src=" ' . $model->getCover() . ' " height="150px">';
            })
            ->addColumn('Aksi', function (Book $book) {
                return view('admin.book.aksi', ['book' => $book]);
            })
            ->addINdexColumn()
            ->rawColumns(['cover'])
            ->toJson();
    }

    public function borrow()
    {
        $borrows = BorrowHistory::with('user', 'book')->isborrowed()->latest();

        return datatables()->of($borrows)
            ->addColumn('user', function (BorrowHistory $model) {
                return $model->user->name;
            })
            ->addColumn('book_title', function (BorrowHistory $model) {
                return $model->book->title;
            })
            ->addColumn('Aksi', 'admin.borrow.aksi')
            ->addINdexColumn()
            ->rawColumns(['Aksi'])
            ->toJson();
    }
}
