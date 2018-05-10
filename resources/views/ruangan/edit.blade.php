@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Ruangan</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        @if (Session::has('message'))
                           <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        @if (Session::has('error'))
                           <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <form action="{{ route('ruangan.put', $ruangan->id) }}" method="post">
                            <div class="form-group">
                                <label for="kode">Kode Ruangan</label>
                                <input type="text" name="id" class="form-control" id="kode" value="{{ $ruangan->id }}" placeholder="Kode Ruangan">
                            </div>
                            <div class="form-group">
                                <label for="barang">Nama Ruangan</label>
                                <input type="text" name="nama" class="form-control" id="barang" value="{{ $ruangan->nama }}" placeholder="Nama Ruangan">
                            </div>
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
