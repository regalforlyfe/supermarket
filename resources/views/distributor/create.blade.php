@extends('base')
@section('konten')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i>
        Tambah Distributor</div>
        <div class="card-body">
          <form action="{{route('distributor.store')}}" method="POST">
          @csrf
            <div class="form-group">
              <label>Nama Distributor</label>
              <input type="text" name="nama_distributor" class="form-control" placeholder="Enter nama distributor">
              </br>
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="Enter alamat">
              </br>
              <label>Telepon</label>
              <input type="text" name="telepon" class="form-control" placeholder="Enter telepon">
              </br>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
          </form>
        </div>
    </div>
  </div>
</div>

@endsection