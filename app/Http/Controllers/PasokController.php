<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasok;
use App\Barang;
use App\Distributor;

class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('pasok')
            ->join('barang', 'pasok.id_barang', '=', 'barang.id_barang')
            ->join('distributor', 'pasok.id_distributor', '=', 'distributor.id_distributor')
            ->get();
        $data = Pasok::all();

        return view('pasok.index')->with('pasok', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Distributor::all();
        $data2 = Barang::all();
        return view('pasok.create')->with('distributor',$data);
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
            'id_distributor'=>'required',
            'id_barang'=>'required',
            'jumlah'=>'required',
        ]);
        $pasok = new Pasok([
            'id_distributor' => $request->input('nama_distributor'),
            'id_barang' => $request->input('nama_barang'),
            'jumlah' => $request->input('jumlah'),
        ]);
        $pasok->save();
        return redirect('pasok');
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
        $data = Pasok::where('id_pasok', '=', $id)->firstOrFail();
        return view('pasok.edit')->with('pasok', $data);
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
            'id_distributor'=>'required',
            'id_barang'=>'required',
            'jumlah'=>'required',
        ]);
        $pasok = new Pasok([
            'id_distributor' => $request->input('nama_distributor'),
            'id_barang' => $request->input('nama_barang'),
            'jumlah' => $request->input('jumlah'),
        ]);
        Pasok::where('id_pasok', $id)->update($data);
        return redirect('pasok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasok::where('id_pasok',$id)->delete();
        return redirect('pasok');
    }
}
