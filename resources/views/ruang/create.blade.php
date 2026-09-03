@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Tambah Ruang
            </div>
            <form action="{{ route('ruang.store') }}" method="POST">
                    {{ csrf_field() }}
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_ruang" class="form-label">Nama Ruang :</label>
                    <input type="text" class="form-control" name="nama_ruang" value="{{ old('nama_ruang') }}">
                    @if ($errors->has('nama_ruang'))
                    <span>{{ $errors->first('nama_ruang') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi :</label>
                    <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>  
                    @if ($errors->has('deskripsi'))
                    <span>{{ $errors->first('deskripsi') }}</span>
                    @endif
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route('ruang.index')}}" class="btn btn-success btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
