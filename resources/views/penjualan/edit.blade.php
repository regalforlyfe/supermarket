@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Penjualan</div>
                <div class="card-body">
                    <form action="{{route('penjualan.update',$penjualan->id_penjualan)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type ="text" name="jumlah" value="{{$penjualan->jumlah}}" class="form-control" placeholder=".....">
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