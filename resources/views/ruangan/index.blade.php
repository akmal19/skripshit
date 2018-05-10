@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h4>Data Master Ruangan</h4>
                    </div>
                    <div class="pull-right"><a href="{{ route("ruangan.create") }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a></div>
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
                                            <th>Kode Ruangan</th>
                                            <th>Nama Ruangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($ruangan)
                                            @foreach ($ruangan as $ruangan)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $ruangan->id }}</td>
                                                    <td>{{ $ruangan->nama }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('ruangan.update', $ruangan->id) }}" style="display:inline-box" type="submit" class="btn btn-primary" name="button"><i class="fa fa-search"></i></a>
                                                        <form action="{{ route('post.ruangan.destroy', $ruangan->id) }}" method="post" style="display:inline;">
                                                            <input type="hidden" name="_method" value="delete">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger" name="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
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
