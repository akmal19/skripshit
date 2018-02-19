@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h4>Data Master Inventaris</h4>
                    </div>
                    <div class="pull-right"><a href="{{ route("inventaris.create") }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kategori</th>
                                            <th>Barang</th>
                                            <th>Brand</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Jumlah Layak</th>
                                            <th class="text-center">Jumlah Perbaikan</th>
                                            <th class="text-center">Jumlah Tidak Layak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($inventaris)
                                            @foreach ($inventaris as $inventaris)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $inventaris->kategori }}</td>
                                                    <td>{{ $inventaris->barang }}</td>
                                                    <td>{{ $inventaris->brand }}</td>
                                                    <td class="text-center">{{ $inventaris->kuantitas }}</td>
                                                    <td class="text-center">{{ $inventaris->layak }}</td>
                                                    <td class="text-center">{{ $inventaris->perbaikan }}</td>
                                                    <td class="text-center">{{ $inventaris->tidak_layak }}</td>
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
