@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h4>Data Master Fasilitas</h4>
                    </div>
                    <div class="pull-right"><a href="{{ route("fasilitas.create") }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="panel-title text-center">Fasilitas Ruangan dan Laboratorium</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Barang</th>
                                            <th>Brand</th>
                                            <th class="text-center">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($fasilitas1)
                                            @foreach ($fasilitas1 as $fasilitas)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $fasilitas->barang }}</td>
                                                    <td>{{ $fasilitas->brand }}</td>
                                                    <td class="text-center">{{ $fasilitas->kuantitas }}</td>
                                                    <td class="text-center">
                                                        <form action="{{ route('post.fasilitas.destroy', $fasilitas->id) }}" method="post">
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
                            <h3 class="panel-title text-center">Fasilitas Komputer dan Alat Bengkel</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Barang</th>
                                            <th>Brand</th>
                                            <th class="text-center">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if ($fasilitas2)
                                          @foreach ($fasilitas2 as $fasilitas)
                                              <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td>{{ $fasilitas->barang }}</td>
                                                  <td>{{ $fasilitas->brand }}</td>
                                                  <td class="text-center">{{ $fasilitas->kuantitas }}</td>
                                                  <td class="text-center">
                                                      <form action="{{ route('post.fasilitas.destroy', $fasilitas->id) }}" method="post">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
