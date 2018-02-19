@extends('layouts.app')

@section('content')
<div class="container">
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
                            <h3 class="panel-title text-center">Fasilitas Ruangan dan Laboratorium</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Peminjam</th>
                                            <th>Barang</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Lama Pinjaman</th>
                                            <th class="text-center">Keperluan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($peminjaman1)
                                            @foreach ($peminjaman1 as $peminjaman)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $peminjaman->nama }}</td>
                                                    <td>{{ $peminjaman->barang }}</td>
                                                    <td class="text-center">{{ $peminjaman->kuantitas }}</td>
                                                    <td class="text-center">{{ $peminjaman->lama_pinjaman }}</td>
                                                    <td>{{ $peminjaman->keperluan_pinjaman }}</td>
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
                                            <th>Peminjam</th>
                                            <th>Barang</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Lama Pinjaman</th>
                                            <th class="text-center">Keperluan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($peminjaman2)
                                            @foreach ($peminjaman2 as $peminjaman)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $peminjaman->nama }}</td>
                                                    <td>{{ $peminjaman->barang }}</td>
                                                    <td class="text-center">{{ $peminjaman->kuantitas }}</td>
                                                    <td class="text-center">{{ $peminjaman->lama_pinjaman }}</td>
                                                    <td>{{ $peminjaman->keperluan_pinjaman }}</td>
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
