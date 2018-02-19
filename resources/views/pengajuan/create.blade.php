@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Pengajuan</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        <form action="{{ route('post.pengajuan.create') }}" method="post">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="barang">Nama Barang</label>
                                <input type="text" name="barang" class="form-control" id="barang" placeholder="Nama barang">
                            </div>
                            <div class="form-group">
                                <label for="type">Type Barang</label>
                                <input type="text" name="type" class="form-control" id="type" placeholder="Tipe Barang">
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" name="kuantitas" class="form-control" id="jumlah" placeholder="Jumlah">
                            </div>
                            <div class="form-group">
                                <label for="satuan_harga">Harga satuan</label>
                                <input type="text" name="satuan_harga" class="form-control" id="satuan_harga" placeholder="Harga Satuan">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Pengajuan"></textarea>
                            </div>
                            {{ csrf_field() }}
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
