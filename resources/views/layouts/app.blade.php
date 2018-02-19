<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                        <!-- Authentication Links -->
                        @if (!Auth::guest())
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">File <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Data Kelas</a></li>
                                  <li><a href="#">Exit Program</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Setting <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Set Tahun Akademik</a></li>
                                  <li><a href="#">Set Kategori Fasilitas</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cek Data <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="{{ route('fasilitas.create') }}">Input Fasilitas Ruangan dan Lab</a></li>
                                  <li><a href="{{ route('fasilitas.create') }}">Input Fasilitas bengkel</a></li>
                                  <li><a href="{{ route('pengajuan.create') }}">Input pengajuan barang</a></li>
                                  <li><a href="{{ route('peminjaman.create') }}">Input peminjaman barang</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaksi <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="{{ route('pengajuan') }}">Data pengajuan fasilitas</a></li>
                                  <li><a href="{{ route('fasilitas') }}">Data fasilitas</a></li>
                                  <li><a href="{{ route('peminjaman') }}">Data peminjaman barang</a></li>
                                  <li><a href="#">Laporan berita acara</a></li>
                              </ul>
                            </li>
                            <li><a href="#">Help</a></li>
                            @if (\Auth::user()->email == 'admin@keuangan' || \Auth::user()->email == 'admin@koordinator' || \Auth::user()->email == 'admin@skripsi')
                              <li><a href="{{ route('manage.pengajuan') }}">Manajemen Pengajuan</a></li>
                            @endif
                            {{-- <li><a href="{{ route('manage.peminjaman') }}">Manajemen Peminjaman</a></li> --}}

                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
