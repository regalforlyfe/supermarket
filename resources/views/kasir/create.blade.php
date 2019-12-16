@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Tambah Kasir</div>
                <div class="card-body">
                    <form action="{{route('kasir.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kasir</label>
                            <input type ="text" name="nama_kasir" class="form-control" placeholder=".....">
                            </br>
                            <label>Alamat</label>
                            <input type ="text" name="alamat" class="form-control" placeholder=".....">
                            </br>
                            <label>Telepon</label>
                            <input type ="text" name="telepon" class="form-control" placeholder=".....">
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