@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">Tambah Admin </div>
                <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label" id="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
                        @if ($errors->has('nama'))
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{old('username')}}">
                        @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telpon</label>
                        <input type="number" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                        @if ($errors->has('no_telp'))
                        <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('user.index')}}" class="btn btn-secondary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection