<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('pemesanan', compact('pemesanan'));
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
            'Nama_Asset' => 'required',
            'Tanggal_Pemesanan' => 'required',
            'Tanggal_Terima' => 'required',
            'Harga' => 'required',
            'Jumlah_Asset' => 'required',
        ], [
            'Nama_Asset.required' => 'Wajib diisi!!!',
            'Tanggal_Pemesanan.required' => 'Wajib diisi!!!',
            'Tanggal_Terima.required' => 'Wajib diisi!!!',
            'Harga.required' => 'Wajib diisi!!!',
            'Jumlah_Asset.required' => 'Wajib diisi!!!',
        ]);

        $pemesanan = new Pemesanan([
            'Nama_Asset' => $request->input('Nama_Asset'),
            'Tanggal_Pemesanan' => $request->input('Kode_Asset'),
            'Tanggal_Terimat' => $request->input('Tanggal_Asset'),
            'Harga' => $request->input('Harga'),
            'Jumlah_Asset' => $request->input('Jumlah_Asset'),

        ]);
        $pemesanan->save();
        return redirect('/pemesanan');
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
        $pemesanan = Pemesanan::find($id);
        return view('pemesanan.edit',compact('pemesanan'));
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
        $pemesanan = Pemesanan::find($id);
        $pemesanan->Nama_Asset = $request->input('Nama_Aseet');
        $pemesanan->Tanggal_Pemesanan = $request->input('Tanggal_Pemesanan');
        $pemesanan->Tanggal_Terima = $request->input('Tanggal_Terima');
        $pemesanan->Harga = $request->input('Harga');
        $pemesanan->Jumlah_Asset = $request->input('Jumlah_Asset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanan');
    }
}
