<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_barang' => 'required|max:255',
            'deskripsi' => 'nullable'
        ]);

        Kategori::create([
            'kategori_barang' => $request->kategori_barang,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_barang' => 'required|max:255',
            'deskripsi' => 'nullable'
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'kategori_barang' => $request->kategori_barang,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil diubah.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}