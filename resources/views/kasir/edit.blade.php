@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Pasok</div>
                <div class="card-body">
                    <form action="{{route('kasir.update',$kasir->id_kasir)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama Kasir</label>
                            <input type ="text" name="nama_kasir" value="{{$kasir->nama_kasir}}" class="form-control" placeholder=".....">
                            <label>Alamat</label>
                            <input type ="text" name="alamat" value="{{$kasir->alamat}}" class="form-control" placeholder=".....">
                            <label>Telepon</label>
                            <input type ="text" name="telepon" value="{{$kasir->telepon}}" class="form-control" placeholder=".....">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection