<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasok;

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
        return view('pasok.create');
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
            'jumlah'=>'required',
        ]);
        $pasok = new Post([
            'jumlah' => $request->input('jumlah'),
            'id_distributor' => $request->input('id_distributor'),
            'id_barang' => $request->input('id_barang'),
        ]);
        $pasok->save();
        return redirect('post');
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
            'jumlah'=>'required',
        ]);
        $data = [
            'jumlah' => $request->jumlah,
        ];
        Kategori::where('id_pasok', $id)->update($data);
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
