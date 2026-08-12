@extends('template.layout')

@section('content')

<div class="container">

    <h3>Tambah Kategori</h3>

    <form action="{{ route('kategori.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="kategori_barang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection