<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Ruang;
use App\Jenis;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::with('ruang', 'jenis')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = Ruang::all();
        $jenis = Jenis::all();
        return view('barang.create', compact('ruang', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required|integer',
            'ruang_id' => 'required|exists:ruang,ruang_id',
            'jenis_id' => 'required|exists:jenis,jenis_id',
            'status' => 'required',
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'jumlah' => $request->jumlah,
            'ruang_id' => $request->ruang_id,
            'jenis_id' => $request->jenis_id,
            'status' => $request->status,
        ]);

        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil ditambahkan.');
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
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $ruang = Ruang::all();
        $jenis = Jenis::all();
        return view('barang.edit', compact('barang', 'ruang', 'jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required|integer',
            'ruang_id' => 'required|exists:ruang,ruang_id',
            'jenis_id' => 'required|exists:jenis,jenis_id',
            'status' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'jumlah' => $request->jumlah,
            'ruang_id' => $request->ruang_id,
            'jenis_id' => $request->jenis_id,
            'status' => $request->status,
        ]);

        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index') ->with('success', 'Data barang berhasil dihapus.');
    }
}