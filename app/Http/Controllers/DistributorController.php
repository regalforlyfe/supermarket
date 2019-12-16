<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Distributor::all();
        return view('distributor.index')->with('distributor', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdistributor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Distributor::updateOrCreate(
            ['id_distributor' => $request->id_distributor],
            [
                'nama_distributor' => $request->nama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon
                ]
            );
            return redirect("/distributor");
                
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
        $data = DB::table('distributor')->where('id_distributor',$id)->get();
        // $data = Distributor::find($id);
        return view('editdistributor')->with('data',$data);
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
            'nama_distributor'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        $data = [
            'nama_distributor' => $request->nama_distributor,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];
        Distributor::where('id_distributor', $id)->update($data);
        return redirect('distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Distributor::where('id_distributor',$id)->delete();
        return redirect('distributor');
    }
}
