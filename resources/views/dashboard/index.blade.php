@extends('template.layout')
@section('content')
    <h1>Dashboard</h1>
<div class="row">

    {{-- Total Barang --}}
    <div class="col-lg-4 col-6">

        <div class="small-box bg-info">

            <div class="inner">

                <h3>{{ $jumlahBarang }}</h3>

                <p>Total Barang</p>

            </div>

            <div class="icon">
                <i class="fas fa-box"></i>
            </div>

            <a href="{{ route('barang.index') }}" class="small-box-footer">

                Lihat Barang
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>


    {{-- Total Ruang --}}
    <div class="col-lg-4 col-6">

        <div class="small-box bg-success">

            <div class="inner">

                <h3>{{ $jumlahRuang }}</h3>

                <p>Total Ruang</p>

            </div>

            <div class="icon">
                <i class="fas fa-door-open"></i>
            </div>

            <a href="{{ route('ruang.index') }}" class="small-box-footer">

                Lihat Ruang
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>



    {{-- Total Kategori --}}
    <div class="col-lg-4 col-6">

        <div class="small-box bg-danger">

            <div class="inner">

                <h3>{{ $jumlahKategori }}</h3>

                <p>Total Kategori</p>

            </div>

            <div class="icon">
                <i class="fas fa-tags"></i>
            </div>

            <a href="{{ route('kategori.index') }}" class="small-box-footer">

                Lihat Kategori
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>


    {{-- Masa Ekonomis --}}
    <div class="col-lg-4 col-6">

        <div class="small-box bg-primary">

            <div class="inner">

                <h3>{{ $jumlahMasa }}</h3>

                <p>Masa Ekonomis</p>

            </div>

            <div class="icon">
                <i class="fas fa-hourglass-half"></i>
            </div>

            <a href="{{ route('masa.index') }}" class="small-box-footer">

                Lihat Masa Ekonomis
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>


    {{-- Total User --}}
    <div class="col-lg-4 col-6">

        <div class="small-box bg-secondary">

            <div class="inner">

                <h3>{{ $jumlahUser }}</h3>

                <p>Total User</p>

            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>

            <a href="{{ route('user.index') }}" class="small-box-footer">

                Lihat User
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

</div>


{{-- Selamat Datang --}}

<div class="card">

    <div class="card-header bg-primary">

        <h3 class="card-title">
            <i class="fas fa-home mr-2"></i>
            Selamat Datang
        </h3>

    </div>


    <div class="card-body">

        <h4>
            Selamat datang di Sistem Informasi Inventaris Barang 👋
        </h4>

        <p class="text-muted mb-0">

            Gunakan menu di sebelah kiri untuk mengelola
            data User, Ruang, Jenis, Kategori, Barang,
            dan Masa Ekonomis.

        </p>

    </div>

</div>

@endsection