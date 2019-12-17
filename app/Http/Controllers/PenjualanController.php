<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penjualan;
use App\Barang;
use App\Kasir;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('penjualan')
        ->join('barang', 'penjualan.id_barang', '=', 'barang.id_barang')
        ->join('kasir', 'penjualan.id_kasir', '=', 'kasir.id_kasir')
        ->get();

        $data = Penjualan::all();
        return view('penjualan.index')->with('penjualan', $list);
        // dump($data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Penjualan $penjualan)
    {
        $barang = Barang::all();
        $kasir = Kasir::all();
        return view('penjualan.create', compact('penjualan','barang', 'kasir'));
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
            'id_barang'=>'required',
            'id_kasir'=>'required',
            'jumlah'=>'required',
            'total'=>'required',
        ]);
        $pasok = new Pasok([
            'id_barang' => $request->input('nama_barang'),
            'id_kasir' => $request->input('nama_kasir'),
            'jumlah' => $request->input('jumlah'),
            'total' => $request->input('total'),
        ]);
        $pasok->save();
        return redirect('penjualan');
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
        $data = Penjualan::where('id_penjualan', '=', $id)->firstOrFail();
        return view('penjualan.edit')->with('penjualan', $data);
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
            'id_barang'=>'required',
            'id_kasir'=>'required',
            'jumlah'=>'required',
            'total'=>'required',
        ]);
        $penjualan = new Penjualan([
            'id_barang' => $request->input('nama_barang'),
            'id_kasir' => $request->input('nama_kasir'),
            'jumlah' => $request->input('jumlah'),
            'total' => $request->input('total'),
        ]);
        Penjualan::where('id_penjualan', $id)->update($data);
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penjualan::where('id_penjualan',$id)->delete();
        return redirect('penjualan');
    }
}
