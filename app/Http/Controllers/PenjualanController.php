<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use App\Models\User;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penjualan::with('user')->get();

        return view('penjualan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::all();
        $barang = Barang::all();

        //membuat kode transaksi auto generate
        $kode_transaksi = Penjualan::first();
        $huruf = "TR";
        $urutan = $kode_transaksi->id;
        $kode_transaksi = $huruf . date('dmY') . sprintf("%03s", $urutan);

        return view('penjualan.create', compact('data', 'kode_transaksi', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'id_user' => $request->id_user,
            'kode_transaksi' => $request->kode_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
        ]);

        return redirect()->to('penjualan');
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
        $edit = Penjualan::find($id);

        $data = User::all();

        return view('penjualan.edit', compact('edit', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Penjualan::where('id', $id)->update([
            'id_user' => $request->id_user,
            'kode_transaksi' => $request->kode_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
        ]);

        return redirect()->to('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::where('id', $id)->delete();

        return redirect()->to('penjualan');
    }
}
