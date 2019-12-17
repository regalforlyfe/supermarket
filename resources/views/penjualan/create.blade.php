@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Tambah Penjualan</div>
                <div class="card-body">
                    <form action="{{route('penjualan.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama barang</label>
                            <select name="nama_barang" class="form-control" id="exampleInputEmail1">
                                @foreach($barang as $value)
                                <option value="{{$value->id_barang}}">{{$value->nama_barang}}</option>
                                @endforeach
                            </select>
                            </br>
                            <label for="exampleInputEmail1">Nama Kasir</label>
                            <select name="nama_kasir" class="form-control" id="exampleInputEmail1">
                                @foreach($kasir as $value)
                                <option value="{{$value->id_kasir}}">{{$value->nama_kasir}}</option>
                                @endforeach
                            </select>
                            </br>
                            <label>Jumlah</label>
                            <input type ="text" name="jumlah" value="{{$penjualan->jumlah}}" class="form-control" placeholder=".....">
                            </br>
                            <label>Total</label>
                            <input type ="text" name="total" value="{{$penjualan->total}}" class="form-control" placeholder=".....">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection