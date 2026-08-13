@extends('template.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Tambah Barang
            </div>

            <form action="{{ route('barang.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Nama Barang :</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') }}">
                        @if ($errors->has('nama_barang'))
                            <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Merk :</label>
                        <input type="text" class="form-control" name="merk" value="{{ old('merk') }}">
                        @if ($errors->has('merk'))
                            <span class="text-danger">{{ $errors->first('merk') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jumlah :</label>
                        <input type="number" class="form-control" name="jumlah" value="{{ old('jumlah') }}">
                        @if ($errors->has('jumlah'))
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ruang :</label>
                        <select name="ruang_id" class="form-control">
                            <option value="">-- Pilih Ruang --</option>

                            @foreach ($ruang as $r)
                                <option value="{{ $r->ruang_id }}" {{ old('ruang_id') == $r->ruang_id ? 'selected' : '' }}>
                                    {{ $r->nama_ruang }}
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('ruang_id'))
                            <span class="text-danger">{{ $errors->first('ruang_id') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis :</label>
                        <select name="jenis_id" class="form-control">
                            <option value="">-- Pilih Jenis --</option>

                            @foreach ($jenis as $j)
                                <option value="{{ $j->jenis_id }}" {{ old('jenis_id') == $j->jenis_id ? 'selected' : '' }}>
                                    {{ $j->jenis_barang }}
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('jenis_id'))
                            <span class="text-danger">{{ $errors->first('jenis_id') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status :</label>
                        <select name="status" class="form-control">
                            <option value="">-- Pilih Status --</option>
                            <option value="baik" {{ old('status') == 'baik' ? 'selected' : '' }}>Baik</option>
                            <option value="rusak ringan" {{ old('status') == 'rusak ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                            <option value="rusak berat" {{ old('status') == 'rusak berat' ? 'selected' : '' }}>Rusak Berat</option>
                            <option value="dalam perbaikan" {{ old('status') == 'dalam perbaikan' ? 'selected' : '' }}>Dalam Perbaikan</option>
                            <option value="tidak digunakan" {{ old('status') == 'tidak digunakan' ? 'selected' : '' }}>Tidak Digunakan</option>
                        </select>

                        @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-success btn-sm">Kembali</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection