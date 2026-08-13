@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Edit Ruang
            </div>
            <form action="{{ route('ruang.update', $ruang->ruang_id) }}" method="POST">
                    {{ csrf_field() }}
                     @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_ruang" class="form-label">Nama Ruang :</label>
                     <input type="text" class="form-control" name="nama_ruang" value="{{$ruang->nama_ruang}}" required>
                </div>
                <div class="mb-3">
                     <label for="deskripsi" class="form-label">Deskripsi :</label>
                     <textarea name="deskripsi" class="form-control">{{$ruang->deskripsi}}</textarea>
                </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                     <a href="{{route('ruang.index')}}" class="btn btn-success btn-sm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
