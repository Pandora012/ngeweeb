<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\belanja;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belanja = belanja::all();
        return view('pemesanan',compact('belanja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.create');
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
            'Nama_Barang' => 'required',
            'Tanggal_Pemesanan' => 'required',
            'Tanggal_Terima' => 'required',
            'Harga_Barang' => 'required',
            'Jumlah_Barang' => 'required'
        ], [
            'Nama_Barang.required' => 'Harap Diisi!',
            'Tanggal_Pemesanan.required' => 'Harap Diisi!',
            'Tanggal_Terima.required' => 'Harap Diisi!',
            'Harga.Barang.required' => 'Harap Diisi!',
            'Jumlah.Barang.required' => 'Harap Diisi!'
        ]) ;
        $belanja = new belanja([
            'Nama_Barang' =>$request->input('Nama_Barang'),
            'Tanggal_Pemesanan' =>$request->input('Tanggal_Pemesanan'),
            'Tanggal_Terima' =>$request->input('Tanggal_Terima'),
            'Harga_Barang' =>$request->input('Harga_Barang'),
            'Jumlah_Barang' =>$request->input('Jumlah_Barang'),
        ]);
        $belanja->save();
        return redirect('pemesanan');
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
        $belanja = belanja::find($id);
        return view('pemesanan.edit', compact('belanja'));
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
        $belanja = belanja::find($id);
        $belanja->Nama_Barang = $request->input('Nama_Barang');
        $belanja->Tanggal_Pemesanan = $request->input('Tanggal_Pemesanan');
        $belanja->Tanggal_Terima = $request->input('Tanggal_Terima');
        $belanja->harga_Barang = $request->input('Harga_Barang');
        $belanja->Jumlah_Barang = $request->input('Jumlah_Barang');
        $belanja->save();
        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $belanja = belanja::find($id);
        $belanja->delete();
        return redirect('/pemesanan');
    }
}
