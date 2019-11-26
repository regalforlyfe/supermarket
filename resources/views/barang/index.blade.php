@extends('base')
@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Kategori</div>
                <div class="card-body">
                <a href="" class="float-right btn btn-primary">Tambah</a>
                  <h4 class="card-title">Basic Table</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Barang</th>
                          <th>Stok</th>
                          <th>Harga Pokok</th>
                          <th>Harga Jual</th>
                          <th>Ppn</th>
                          <th>Diskon</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($barang as $value)
                        <tr>
                            <td>{{$value->id_barang}}</td>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->stok}}</td>
                            <td>{{$value->hargaPokok}}</td>
                            <td>{{$value->hargaJual}}</td>
                            <td>{{$value->ppn}}</td>
                            <td>{{$value->diskon}}</td>
                            <td width="1">
                            <div class="btn-group">
                                <a href="" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                            </td>
                            <td width="1">
                            <form action="" method="POST">
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