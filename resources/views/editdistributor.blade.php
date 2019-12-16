@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Distributor</div>
                <div class="card-body">
                    <form action="{{route('distributor.update',$distributor->id_distributor,$distributor->nama_distributor, $distributor->alamat, $distributor->telepon)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama Distributor</label>
                            <input type ="text" name="nama" value="{{$distributor->nama_distributor}}" class="form-control" placeholder=".....">
                            <label>Alamat</label>
                            <input type ="text" name="alamat" value="{{$distributor->alamat}}" class="form-control" placeholder=".....">
                            <label>Telepon</label>
                            <input type ="text" name="telepon" value="{{$distributor->telepon}}" class="form-control" placeholder=".....">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>

                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection

