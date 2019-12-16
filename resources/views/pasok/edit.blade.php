@extends('base')
@section('konten')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Pasok</div>
                <div class="card-body">
                    <form action="{{route('pasok.update',$pasok->jumlah)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type ="text" name="jumlah" value="{{$pasok->jumlah}}" class="form-control" placeholder=".....">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </br>
                    </br>
                </div>
            </div>
        </div>
</div>
@endsection