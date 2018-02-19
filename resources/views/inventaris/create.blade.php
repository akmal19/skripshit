@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Inventaris</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        <form action="{{ route('post.inventaris.create') }}" method="post">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode">Kode Barang</label>
                                <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode Barang">
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
                                <label for="jumlah">Jumlah Barang</label>
                                <input type="text" name="kuantitas" class="form-control" id="jumlah" placeholder="Jumlah">
                            </div>
                            <div class="form-group">
                                <label for="layak">Jumlah Barang Layak</label>
                                <input type="text" name="layak" class="form-control" id="layak" placeholder="Jumlah Barang Layak">
                            </div>
                            <div class="form-group">
                                <label for="perbaikan">Jumlah Barang Butuh Perbaikan</label>
                                <input type="text" name="perbaikan" class="form-control" id="perbaikan" placeholder="Jumlah Barang Butuh Perbaikan">
                            </div>
                            <div class="form-group">
                                <label for="tidak_layak">Jumlah Barang Tidak Layak</label>
                                <input type="text" name="tidak_layak" class="form-control" id="tidak_layak" placeholder="Jumlah Barang Tidak Layak">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Barang"></textarea>
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
