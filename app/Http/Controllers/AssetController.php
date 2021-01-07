<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset = Asset::all();
        return view('listasset',compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
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
            'Kode_Asset' => 'required|unique:asset,Kode_Asset',
            'Tanggal_Asset' => 'required',
            'Jumlah' => 'required'
        ], [
            'Nama_Asset.required' => 'Wajib diisi!!!',
            'Kode_Asset.required' => 'Wajib diisi!!!',
            'Tanggal_Asset.required' => 'Wajib diisi!!!',
            'Jumlah.required' => 'Wajib diisi!!!'
        ]);

        $asset = new Asset([
            'Nama_Asset' => $request->input('Nama_Asset'),
            'Kode_Asset' => $request->input('Kode_Asset'),
            'Tanggal_Asset' => $request->input('Tanggal_Asset'),
            'Jumlah' => $request->input('Jumlah')
        ]);
        $asset->save();
        return redirect('/listasset');
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
        $asset = Asset::find($id);
        return view('crud.edit', compact('asset'));
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
         $asset = Asset::find($id);
         $asset->Nama_Asset = $request->input('Nama_Asset');
         $asset->Kode_Asset = $request->input('Kode_Asset');
         $asset->Tanggal_Asset = $request->input('Tanggal_Asset');
         $asset->Jumlah = $request->input('Jumlah');
         $asset->save();
         return redirect('/listasset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        return redirect('/listasset');
    }
}
