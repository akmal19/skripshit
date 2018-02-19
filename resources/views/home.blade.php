@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Data Fasilitas</h3>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $fasilitas }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Data Pengajuan</h3>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $pengajuan }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Data Peminjaman</h3>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $peminjaman }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
