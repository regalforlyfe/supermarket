@extends('base')
@section('konten')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Pasok</div>
                <div class="card-body">
                <a href="" class="float-left btn btn-primary">Tambah</a>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Pasok</th>
                          <th>Id Distributor</th>
                          <th>Id Barang</th>
                          <th>Jumlah</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($pasok as $value)
                        <tr>
                            <td>{{$value->id_pasok}}</td>
                            <td>{{$value->nama_distributor}}</td>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->jumlah}}</td>
                            <td width="1">
                            <div class="btn-group">
                                <a href="{{route('pasok.edit', $value->id_pasok)}}" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                            </td>
                            <td width="1">
                            <form action="{{route('pasok.destroy', $value->id_pasok)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm far fa-trash-alt" type="submit"></button>
                            </form>
                            </td>
                        </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection