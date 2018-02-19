@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h4>Data Master Peminjaman</h4>
                    </div>
                    <div class="pull-right"><a href="{{ route("peminjaman.create") }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="panel-title text-center">peminjaman Pending</h3>
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
                                            <th rowspan="2" class="text-center">Action</th>
                                        </tr>
                                        <tr>
                                            <th>Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($peminjaman_pending)
                                            @foreach ($peminjaman_pending as $peminjaman)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $peminjaman->kategori }}</td>
                                                    <td>{{ $peminjaman->barang }}</td>
                                                    <td>{{ $peminjaman->brand }}</td>
                                                    <td>{{ $peminjaman->kuantitas }}</td>
                                                    <td>{{ $peminjaman->satuan_harga }}</td>
                                                    <td>{{ $peminjaman->satuan_harga * $peminjaman->kuantitas }}</td>
                                                    <td class="text-center">
                                                      <form action="{{ route('post.manage.peminjaman') }}" method="post">
                                                        <div class="form-group">
                                                          {{ csrf_field() }}
                                                          <input type="hidden" name="id" value="{{$peminjaman->id}}">
                                                          <input type="hidden" name="approval" value="APPROVED">
                                                          <button class="btn btn-success" type="submit" name="submit">Approve</button>
                                                        </div>
                                                      </form>

                                                      <form action="{{ route('post.manage.peminjaman') }}" method="post">
                                                        <div class="form-group">
                                                          {{ csrf_field() }}
                                                          <input type="hidden" name="id" value="{{$peminjaman->id}}">
                                                          <input type="hidden" name="approval" value="REJECTED">
                                                          <button class="btn btn-danger" type="submit" name="submit">Reject</button>
                                                        </div>
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
                            <h3 class="panel-title text-center">peminjaman Disetujui</h3>
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
                                      @if ($peminjaman_approved)
                                          @foreach ($peminjaman_approved as $peminjaman)
                                              <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td>{{ $peminjaman->kategori }}</td>
                                                  <td>{{ $peminjaman->barang }}</td>
                                                  <td>{{ $peminjaman->brand }}</td>
                                                  <td>{{ $peminjaman->kuantitas }}</td>
                                                  <td>{{ $peminjaman->satuan_harga }}</td>
                                                  <td>{{ $peminjaman->satuan_harga * $peminjaman->kuantitas }}</td>
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
