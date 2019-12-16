<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kasir::all();
        return view('kasir.index')->with('kasir', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.create');
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
            'nama_kasir'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        $kasir = new Kasir([
            'nama_kasir' => $request->input('nama_kasir'),
            'alamat' => $request->input('alamat'),
            'telepon' => $request->input('telepon'),
        ]);
        $kasir->save();
        return redirect('kasir');
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
        $data = Kasir::where('id_kasir',"=",$id)->firstOrFail();
        return view('kasir.edit')->with('kasir',$data);
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
            'nama_kasir'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        $data = [
            'nama_kasir'=>$request->nama_kasir,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
        ];
        Kasir::where('id_kasir',$id)->update($data);
        return redirect('kasir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kasir::where('id_kasir',$id)->delete();
        return redirect('kasir');
    }
}
