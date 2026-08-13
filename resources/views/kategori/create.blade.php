@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-primary">
                Tambah Data Kategori
            </div>

            <div class="card-body">

                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="kategori_barang" class="form-label">Nama Kategori</label>
                        <input type="text"
                            name="kategori_barang"
                            id="kategori_barang"
                            class="form-control"
                            placeholder="Masukkan nama kategori"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea
                            name="deskripsi"
                            id="deskripsi"
                            class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection