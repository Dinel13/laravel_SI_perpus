<?php

namespace App\Http\Controllers\Admin;

use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index(){
        return view('admin.borrow.index', ['judul' => 'buku yang dipinjam']);
    }

    public function returnBook(Request $request, BorrowHistory $borrowHistory){
        $borrowHistory->update([
            'dikembalikan' => Carbon::now(),
            'admin' =>  auth()->id()
        ]);

        return redirect()->back()->withSuccess('buku di kembalkan ');
    }
}
