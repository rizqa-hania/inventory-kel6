@extends('template.layout')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="row mb-3">
        <div class="col-12">
            <h1 class="mb-1">Dashboard</h1>
            <p class="text-muted">
                Pantau informasi inventaris sekolah secara cepat dan mudah.
            </p>
        </div>
    </div>


    {{-- WELCOME CARD --}}
    <div class="card card-outline card-primary shadow-sm mb-4">

        <div class="card-body">

            <div class="d-flex align-items-center">

                <div>
                    <h3 class="mb-2">
                        Selamat Datang di Sistem Inventaris 👋
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola data barang, ruang, kategori, masa ekonomis,
                        dan pengguna melalui sistem ini.
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- STATISTIK --}}
    <div class="row">


        {{-- TOTAL BARANG --}}
        <div class="col-lg col-md-4 col-6">

            <div class="small-box bg-info shadow-sm">

                <div class="inner">

                    <h3>{{ $jumlahBarang }}</h3>

                    <p>Total Barang</p>

                </div>

                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>

                <a href="{{ route('barang.index') }}"
                   class="small-box-footer">

                    Lihat Data
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>


        {{-- TOTAL RUANG --}}
        <div class="col-lg col-md-4 col-6">

            <div class="small-box bg-success shadow-sm">

                <div class="inner">

                    <h3>{{ $jumlahRuang }}</h3>

                    <p>Total Ruang</p>

                </div>

                <div class="icon">
                    <i class="fas fa-door-open"></i>
                </div>

                <a href="{{ route('ruang.index') }}"
                   class="small-box-footer">

                    Lihat Data
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>


        {{-- TOTAL KATEGORI --}}
        <div class="col-lg col-md-4 col-6">

            <div class="small-box bg-danger shadow-sm">

                <div class="inner">

                    <h3>{{ $jumlahKategori }}</h3>

                    <p>Total Kategori</p>

                </div>

                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>

                <a href="{{ route('kategori.index') }}"
                   class="small-box-footer">

                    Lihat Data
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>


        {{-- MASA EKONOMIS --}}
        <div class="col-lg col-md-6 col-6">

            <div class="small-box bg-primary shadow-sm">

                <div class="inner">

                    <h3>{{ $jumlahMasa }}</h3>

                    <p>Masa Ekonomis</p>

                </div>

                <div class="icon">
                    <i class="fas fa-hourglass-half"></i>
                </div>

                <a href="{{ route('masa.index') }}"
                   class="small-box-footer">

                    Lihat Data
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>


        {{-- TOTAL USER --}}
        <div class="col-lg col-md-6 col-6">

            <div class="small-box bg-secondary shadow-sm">

                <div class="inner">

                    <h3>{{ $jumlahUser }}</h3>

                    <p>Total User</p>

                </div>

                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>

                <a href="{{ route('user.index') }}"
                   class="small-box-footer">

                    Lihat Data
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>

    </div>


    {{-- INFORMASI SISTEM --}}
    <div class="row mt-3">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header">

                    <h3 class="card-title">

                        <i class="fas fa-info-circle mr-2 text-primary"></i>

                        Informasi Sistem

                    </h3>

                </div>


                <div class="card-body">

                    <p>
                        Sistem Informasi Inventaris Barang digunakan
                        untuk membantu proses pendataan dan pengelolaan
                        inventaris sekolah.
                    </p>

                    <div class="row text-center mt-4">

                        <div class="col-md-4">

                            <i class="fas fa-box fa-2x text-info mb-2"></i>

                            <h5>Barang</h5>

                            <p class="text-muted">
                                Kelola seluruh data inventaris barang.
                            </p>

                        </div>


                        <div class="col-md-4">

                            <i class="fas fa-door-open fa-2x text-success mb-2"></i>

                            <h5>Ruang</h5>

                            <p class="text-muted">
                                Atur lokasi penyimpanan barang.
                            </p>

                        </div>


                        <div class="col-md-4">

                            <i class="fas fa-tags fa-2x text-danger mb-2"></i>

                            <h5>Kategori</h5>

                            <p class="text-muted">
                                Kelompokkan barang berdasarkan kategori.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- QUICK MENU --}}
        <div class="col-lg-4">

            <div class="card shadow-sm">

                <div class="card-header">

                    <h3 class="card-title">

                        <i class="fas fa-bolt mr-2 text-warning"></i>

                        Menu Cepat

                    </h3>

                </div>


                <div class="card-body">

                    <a href="{{ route('barang.create') }}"
                       class="btn btn-primary btn-block mb-2">

                        <i class="fas fa-plus mr-2"></i>

                        Tambah Barang

                    </a>


                    <a href="{{ route('ruang.create') }}"
                       class="btn btn-success btn-block mb-2">

                        <i class="fas fa-plus mr-2"></i>

                        Tambah Ruang

                    </a>


                    <a href="{{ route('kategori.create') }}"
                       class="btn btn-danger btn-block">

                        <i class="fas fa-plus mr-2"></i>

                        Tambah Kategori

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection