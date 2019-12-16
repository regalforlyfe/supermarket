@extends('base')
@section('konten')
    @foreach($data as $distibutor)
<form action="{{route('distributor.update',$distibutor->id_distributor,$distibutor->nama_distributor, $distibutor->alamat, $distibutor->telepon)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <h1> Edit Distributor </h1>
        <label>Nama Distributor</label>
        <input type ="text" name="nama" value="{{$distibutor->nama_distributor}}" class="form-control" placeholder=".....">
        <label>Alamat</label>
        <input type ="text" name="alamat" value="{{$distibutor->alamat}}" class="form-control" placeholder=".....">
        <label>Telepon</label>
        <input type ="text" name="telepon" value="{{$distibutor->telepon}}" class="form-control" placeholder=".....">
    </div>
    <button type="submit" class="btn btn-primary">Simpan </button>
    @endforeach
</br>
</br>
@endsection

