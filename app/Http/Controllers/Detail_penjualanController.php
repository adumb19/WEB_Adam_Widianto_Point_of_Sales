<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detail_penjualan;
use App\Models\Penjualan;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Http\Request;

class Detail_penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Detail_penjualan::with(['penjualan', 'barang'])->orderBy('id', 'desc')->get();

        return view('detail_penjualan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        $barang = Barang::all();
        return view('detail_penjualan.create', compact('penjualan', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Detail_penjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'total_harga' => $request->total_harga,
            'nominal_bayar' => $request->nominal_bayar,
            'kembalian' => $request->kembalian,
        ]);
        
        return redirect()->to('detail_penjualan');
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
        $edit = Detail_penjualan::find($id);

        $penjualan = Penjualan::all();
        $barang = Barang::all();

        return view('detial_penjualan.edit', compact('edit', 'penjualan', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Detail_penjualan::where('id', $id)->update([
            'id_penjualan' => $request->id_penjualan,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'total_harga' => $request->total_harga,
            'nominal_bayar' => $request->nominal_bayar,
            'kembalian' => $request->kembalian,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Detail_penjualan::where('id', $id)->delete();

        return redirect()->to('detail_penjualan');
    }
}
