@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Tambah Pasok</div>
                <div class="card-body">
                    <form action="{{route('pasok.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Distributor</label>
                            <select name="nama_distributor" class="form-control" id="exampleInputEmail1">
                                @foreach($distributor as $value)
                                <option value="{{$value->id_distributor}}">{{$value->nama_distributor}}</option>
                                @endforeach
                            </select>
                            </br>
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <select name="nama_barang" class="form-control" id="exampleInputEmail1">
                                @foreach($barang as $value)
                                <option value="{{$value->id_barang}}">{{$value->nama_barang}}</option>
                                @endforeach
                            </select>
                            </br>
                            <label>Jumlah</label>
                            <input type ="text" name="jumlah" class="form-control" placeholder=".....">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection