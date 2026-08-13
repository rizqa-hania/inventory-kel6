@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">Tambah Masa Pakai </div>
                <form action="{{ route('masa.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="barang" class="form-label" id="barang">Barang</label>
                        <select name="barang_id" class="form-control">
                                <option value="">-- Pilih Barang --</option>   
                            @foreach ($barang as $v)
                                <option value="{{ $v->barang_id }}">
                                    {{ $v->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('barang'))
                        <span class="text-danger">{{ $errors->first('barang') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_pembelian" class="form-control" value="{{old('tanggal_pembelian')}}">
                        @if ($errors->has('tanggal_pembelian'))
                        <span class="text-danger">{{ $errors->first('tanggal_pembelian') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="harga_pembelian" class="form-label">Harga Pembelian</label>
                        <input type="number" name="harga_pembelian" class="form-control" value="{{ old('harga_pembelian') }}">
                        @if ($errors->has('harga_pembelian'))
                        <span class="text-danger">{{ $errors->first('harga_pembelian') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="masa_pakai_pertahun" class="form-label">Masa Pakai Pertahun</label>
                        <input type="number" name="masa_pakai_pertahun" class="form-control" value="{{ old('masa_pakai_pertahun') }}">
                        @if ($errors->has('masa_pakai_pertahun'))
                        <span class="text-danger">{{ $errors->first('masa_pakai_pertahun') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('masa.index')}}" class="btn btn-secondary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection