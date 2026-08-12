@extends('template.layout')

@section('content')

<div class="container">

    <h3>Edit Kategori</h3>

    <form action="{{ route('kategori.update',$kategori->kategori_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="kategori_barang" class="form-control" value="{{ $kategori->kategori_barang }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $kategori->deskripsi }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection