@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                Tambah Data Jenis Barang
            </div>

            <div class="card-body">

                <form action="{{ route('jenis.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang</label>
                        <input type="text" name="jenis_barang" id="jenis_barang" class="form-control" placeholder="Masukkan jenis barang" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
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