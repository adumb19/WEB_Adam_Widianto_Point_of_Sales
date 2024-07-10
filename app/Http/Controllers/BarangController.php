<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::with('kategori')->get();

        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Kategori_barang::all();

        return view('barang.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ]);

        return redirect()->to('barang');
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
        $edit = Barang::find($id);

        $data = Kategori_barang::all();

        return view('barang.edit', compact('edit', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //data yang tidak ingin diedit boleh dibiarkan
        $data = [];
        if ($request->filled('id_barang')) {
            $data['id_barang'] = $request->id_barang;
        }
        if ($request->filled('nama_barang')) {
            $data['nama_barang'] = $request->nama_barang;
        }
        if ($request->filled('satuan')) {
            $data['satuan'] = $request->satuan;
        }
        if ($request->filled('qty')) {
            $data['qty'] = $request->qty;
        }
        if ($request->filled('harga')) {
            $data['harga'] = $request->harga;
        }

        Barang::where('id', $id)->update($data);

        return redirect()->to('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('id', $id)->delete();

        return redirect()->to('barang');
    }
}
