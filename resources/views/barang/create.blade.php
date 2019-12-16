@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Tambah Barang</div>
                <div class="card-body">
                    <form action="{{route('barang.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type ="text" name="nama_barang" class="form-control" placeholder=".....">
                            </br>
                            <label>Stok</label>
                            <input type ="text" name="stok" class="form-control" placeholder=".....">
                            </br>
                            <label>Harga Pokok</label>
                            <input type ="text" name="hargaPokok" class="form-control" placeholder=".....">
                            </br>
                            <label>Harga Jual</label>
                            <input type ="text" name="hargaJual" class="form-control" placeholder=".....">
                            </br>
                            <label>PPN</label>
                            <input type ="text" name="ppn" class="form-control" placeholder=".....">
                            </br>
                            <label>Diskon</label>
                            <input type ="text" name="diskon" class="form-control" placeholder=".....">
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