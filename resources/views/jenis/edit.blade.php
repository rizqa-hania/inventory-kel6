@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-primary">
                Edit Data Jenis Barang
            </div>

            <div class="card-body">

                <form action="{{ route('jenis.update', $jenis->jenis_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang</label>
                        <input type="text" name="jenis_barang" id="jenis_barang" class="form-control" value="{{ $jenis->jenis_barang }}" placeholder="Masukkan jenis barang" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $jenis->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Perbarui
                    </button>

                    <a href="{{ route('jenis.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection