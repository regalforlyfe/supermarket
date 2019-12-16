@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Barang</div>
                <div class="card-body">
                    <form action="{{route('barang.update',$barang->id_barang)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                        <label>Nama Barang</label>
                            <input type ="text" name="nama_barang" value="{{$barang->nama_barang}}" class="form-control" placeholder=".....">
                            </br>
                            <label>Stok</label>
                            <input type ="text" name="stok" value="{{$barang->stok}}" class="form-control" placeholder=".....">
                            </br>
                            <label>Harga Pokok</label>
                            <input type ="text" name="hargaPokok" value="{{$barang->hargaPokok}}" class="form-control" placeholder=".....">
                            </br>
                            <label>Harga Jual</label>
                            <input type ="text" name="hargaJual" value="{{$barang->hargaJual}}" class="form-control" placeholder=".....">
                            </br>
                            <label>PPN</label>
                            <input type ="text" name="ppn" value="{{$barang->ppn}}" class="form-control" placeholder=".....">
                            </br>
                            <label>Diskon</label>
                            <input type ="text" name="diskon" value="{{$barang->diskon}}" class="form-control" placeholder=".....">
                            </br>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection
