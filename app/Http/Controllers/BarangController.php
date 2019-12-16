<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('barang.index')->with('barang', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
            'nama_barang'=>'required',
            'stok'=>'required',
            'hargaPokok'=>'required',
            'hargaJual'=>'required',
            'ppn'=>'required',
            'diskon'=>'required',
        ]);
        $barang = new Barang([
            'nama_barang' => $request->input('nama_barang'),
            'stok' => $request->input('stok'),
            'hargaPokok' => $request->input('hargaPokok'),
            'hargaJual' => $request->input('hargaJual'),
            'ppn' => $request->input('ppn'),
            'diskon' => $request->input('diskon'),
        ]);
        $barang->save();
        return redirect('barang');
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
        $data = Barang::where('id_barang',"=",$id)->firstOrFail();
        return view('barang.edit')->with('barang',$data);
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
        $request->validate(['nama_barang'=>'required','stok'=>'required','hargaPokok'=>'required','hargaJual'=>'required','ppn'=>'required','diskon'=>'required',]);
        $data = ['nama_barang'=>$request->nama_barang,'stok'=>$request->stok,'hargaPokok'=>$request->hargaPokok,'hargaJual'=>$request->hargaJual,'ppn'=>$request->ppn,'diskon'=>$request->diskon,];
        Barang::where('id_barang',$id)->update($data);
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id_barang',$id)->delete();
        return redirect('barang');
    }
}
