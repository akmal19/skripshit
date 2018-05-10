@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h4>Data Master Pengajuan</h4>
                    </div>
                    <div class="pull-right"><a href="{{ route("pengajuan.create") }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="panel-title text-center">Pengajuan Pending</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">#</th>
                                            <th rowspan="2">Kategori</th>
                                            <th rowspan="2">Barang</th>
                                            <th rowspan="2">Brand</th>
                                            <th rowspan="2">Jumlah</th>
                                            <th colspan="2" class="text-center">Harga</th>
                                            <th rowspan="2" class="text-center">Status</th>
                                            <th rowspan="2" class="text-center">Action</th>
                                        </tr>
                                        <tr>
                                            <th>Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pengajuan_pending)
                                            @foreach ($pengajuan_pending as $pengajuan)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $pengajuan->kategori }}</td>
                                                    <td>{{ $pengajuan->barang }}</td>
                                                    <td>{{ $pengajuan->brand }}</td>
                                                    <td>{{ $pengajuan->kuantitas }}</td>
                                                    <td>{{ $pengajuan->satuan_harga }}</td>
                                                    <td>{{ $pengajuan->satuan_harga * $pengajuan->kuantitas }}</td>
                                                    <td class="text-center">{{ $pengajuan->status }}</td>
                                                    <td class="text-center">
                                                        <form action="{{ route('post.re.pengajuan') }}" method="post">
                                                          <div class="form-group">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{$pengajuan->id}}">
                                                            <input type="hidden" name="approval" value="PENDING">
                                                            @if ($pengajuan->status == "PENDING")
                                                                Sedang proses
                                                            @else
                                                                <a class="btn btn-link" href="{{ route('edit.pengajuan', ['id' => $pengajuan->id]) }}">Edit</a><button class="btn btn-success" type="submit" name="submit">Ajukan</button>
                                                            @endif
                                                          </div>
                                                        </form>
                                                        <form action="{{ route('post.pengajuan.destroy', $pengajuan->id) }}" method="post">
                                                            <input type="hidden" name="_method" value="delete">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger" name="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">Belum ada data masuk</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="panel-title text-center">Pengajuan Disetujui</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">#</th>
                                            <th rowspan="2">Kategori</th>
                                            <th rowspan="2">Barang</th>
                                            <th rowspan="2">Brand</th>
                                            <th rowspan="2">Jumlah</th>
                                            <th colspan="2" class="text-center">Harga</th>
                                        </tr>
                                        <tr>
                                            <th>Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if ($pengajuan_approved)
                                          @foreach ($pengajuan_approved as $pengajuan)
                                              <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td>{{ $pengajuan->kategori }}</td>
                                                  <td>{{ $pengajuan->barang }}</td>
                                                  <td>{{ $pengajuan->brand }}</td>
                                                  <td>{{ $pengajuan->kuantitas }}</td>
                                                  <td>{{ $pengajuan->satuan_harga }}</td>
                                                  <td>{{ $pengajuan->satuan_harga * $pengajuan->kuantitas }}</td>
                                              </tr>
                                          @endforeach
                                      @else
                                          <tr>
                                              <td colspan="4" class="text-center">Belum ada data masuk</td>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
