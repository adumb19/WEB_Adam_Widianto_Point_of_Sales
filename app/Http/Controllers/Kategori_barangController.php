<?php

namespace App\Http\Controllers;

use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class Kategori_barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori_barang::orderBy('id', 'desc')->get();

        return view('kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kategori_barang::create($request->all());

        return redirect()->to('kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Kategori_barang::find($id);

        return view('kategori.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori_barang::where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->to('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori_barang::where('id', $id)->delete();

        return redirect()->to('kategori');
    }
}
