@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pengajuan Peminjaman</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        <form action="{{ route('post.peminjaman.create') }}" method="post">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Peminjam</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Peminjam">
                            </div>
                            <div class="form-group">
                                <label for="barang">Nama Barang</label>
                                <input type="text" name="barang" class="form-control" id="barang" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" name="kuantitas" class="form-control" id="jumlah" placeholder="Jumlah">
                            </div>
                            <div class="form-group">
                                <label for="lama_pinjaman">Lama Pinjaman</label>
                                <input type="text" name="lama_pinjaman" class="form-control" id="lama_pinjaman" placeholder="Lama Pinjaman">
                            </div>
                            <div class="form-group">
                                <label for="keperluan_pinjaman">Keperluan Peminjaman</label>
                                <input type="text" name="keperluan_pinjaman" class="form-control" id="keperluan_pinjaman" placeholder="Keperluan Pinjaman">
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
