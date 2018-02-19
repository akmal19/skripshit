@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Pengajuan</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        <form action="{{ route('put.pengajuan', ['id' => $pengajuan->id]) }}" method="post">
                            <div class="form-group">
                                <label>Kategori</label>
                                {{ Form::select('kategori', $kategori, $pengajuan->kategori, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label for="barang">Nama Barang</label>
                                <input type="text" name="barang" class="form-control" id="barang" placeholder="Nama barang" value="{{ $pengajuan->barang }}">
                            </div>
                            <div class="form-group">
                                <label for="type">Type Barang</label>
                                <input type="text" name="type" class="form-control" id="type" placeholder="Tipe Barang" value="{{ $pengajuan->type }}">
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand" value="{{ $pengajuan->brand }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" name="kuantitas" class="form-control" id="jumlah" placeholder="Jumlah" value="{{ $pengajuan->kuantitas }}">
                            </div>
                            <div class="form-group">
                                <label for="satuan_harga">Harga satuan</label>
                                <input type="text" name="satuan_harga" class="form-control" id="satuan_harga" placeholder="Harga Satuan" value="{{ $pengajuan->satuan_harga }}">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Pengajuan">{{ $pengajuan->deskripsi }}</textarea>
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
