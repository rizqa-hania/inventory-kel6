<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Ruang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::with('ruang')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruang = Ruang::all();
        return view('barang.create', compact('ruang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|max:100',
            'merk' => 'required|max:100',
            'jumlah' => 'required|integer|min:1',
            'ruang_id' => 'required|exists:ruang,ruang_id',
            'status' => 'required',
        ]);

        Barang::create([
                'nama_barang' => $request->nama_barang,
                'merk'        => $request->merk,
                'jumlah'      => $request->jumlah,
                'ruang_id'    => $request->ruang_id,
                'status'      => $request->status,

        ]);

        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $ruang = Ruang::all();
        return view('barang.edit', compact('barang', 'ruang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|max:100',
            'merk' => 'required|max:100',
            'jumlah' => 'required|integer|min:1',
            'ruang_id' => 'required|exists:ruang,ruang_id',
            'status' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'merk'        => $request->merk,
            'jumlah'      => $request->jumlah,
            'ruang_id'    => $request->ruang_id,
            'status'      => $request->status,
        ]);

        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil dihapus.');
    }
}