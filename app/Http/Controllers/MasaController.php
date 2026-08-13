<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekonomis;
use App\Barang;

class MasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masa = Ekonomis::all();
        return view('masa.index', compact('masa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('masa.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'barang_id'            => 'required',
            'tanggal_pembelian'    => 'required',
            'harga_pembelian'      => 'required',
            'masa_pakai_pertahun'  => 'required',
        ]);

        Ekonomis::create([
            'barang_id'            => $request->barang_id,
            'tanggal_pembelian'    => $request->tanggal_pembelian,
            'harga_pembelian'      => $request->harga_pembelian,
            'masa_pakai_pertahun'  => $request->masa_pakai_pertahun,
        ]);
        
        return redirect()->route('masa.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
