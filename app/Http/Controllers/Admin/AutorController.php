<?php

namespace App\Http\Controllers\Admin;

use App\Autor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.autor.index', ['judul' => 'Data Penulis']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.autor.create',  ['judul' => 'Buat Penulis']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        Autor::create($request->only('name'));

        return redirect()->route('autor.index')
                        ->with('success', 'Data penulis berhasil ditambhakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view('admin.autor.edit', ['autor' => $autor,  'judul' => 'Edit Penulis']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        $autor->update($request->only('name'));

        return redirect()->route('autor.index')
                        ->with('info', 'Data penulis berhasil diupdate');
                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
     
        return redirect()->route('autor.index')
        ->with('danger', 'Data penulis berhasil dihapus');

    }

}
