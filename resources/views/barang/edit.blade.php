@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Edit Barang
            </div>

            <form action="{{ route('barang.update', $barang->barang_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Nama Barang :</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
                        @if($errors->has('nama_barang'))
                            <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Merk :</label>
                        <input type="text" class="form-control" name="merk" value="{{ old('merk', $barang->merk) }}">
                        @if($errors->has('merk'))
                            <span class="text-danger">{{ $errors->first('merk') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jumlah :</label>
                        <input type="number" class="form-control" name="jumlah" value="{{ old('jumlah', $barang->jumlah) }}">
                        @if($errors->has('jumlah'))
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ruang :</label>
                        <select name="ruang_id" class="form-control">
                            @foreach($ruang as $r)
                                <option value="{{ $r->ruang_id }}" {{ $barang->ruang_id == $r->ruang_id ? 'selected' : '' }}>
                                    {{ $r->nama_ruang }}
                                </option>
                            @endforeach
                        </select>

                        @if($errors->has('ruang_id'))
                            <span class="text-danger">{{ $errors->first('ruang_id') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori :</label>
                        <select name="kategori_id" class="form-control">
                            @foreach($kategori as $j)
                                <option value="{{ $j->kategori_id }}" {{ $barang->kategori_id == $j->kategori_id ? 'selected' : '' }}>
                                    {{ $j->kategori_barang }}
                                </option>
                            @endforeach
                        </select>

                        @if($errors->has('kategori_id'))
                            <span class="text-danger">{{ $errors->first('kategori_id') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status :</label>
                        <select name="status" class="form-control">
                            <option value="baik" {{ $barang->status == 'baik' ? 'selected' : '' }}>Baik</option>
                            <option value="rusak ringan" {{ $barang->status == 'rusak ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                            <option value="rusak berat" {{ $barang->status == 'rusak berat' ? 'selected' : '' }}>Rusak Berat</option>
                            <option value="dalam perbaikan" {{ $barang->status == 'dalam perbaikan' ? 'selected' : '' }}>Dalam Perbaikan</option>
                            <option value="tidak digunakan" {{ $barang->status == 'tidak digunakan' ? 'selected' : '' }}>Tidak Digunakan</option>
                        </select>

                        @if($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('barang.index') }}" class="btn btn-success btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Perbarui</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection