@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Update Data Masa Ekonomis
            </div>
            <form action="{{ route('masa.update', $masa->masa_id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="barang" class="form-label">Barang</label> 
                        <select name="barang_id" class="form-control">   
                            @foreach ($barang as $v)
                                <option value="{{ $v->barang_id }}">
                                    {{ $v->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                        @error('barang_id')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label> 
                        <input type="date" class="form-control @error('tanggal_pembelian') is-invalid @enderror" name="tanggal_pembelian" value="{{ old('tanggal_pembelian', $masa->tanggal_pembelian) }}">
                        @error('tanggal_pembelian')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga_pembelian" class="form-label">Harga Pembelian</label> 
                        <input type="number" class="form-control @error('harga_pembelian') is-invalid @enderror" name="harga_pembelian" value="{{ old('harga_pembelian', $masa->harga_pembelian) }}">
                        @error('harga_pembelian')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="masa_pakai_pertahun" class="form-label">Masa Pakai Pertahun</label> 
                        <input type="number" class="form-control @error('masa_pakai_pertahun') is-invalid @enderror" name="masa_pakai_pertahun" value="{{ old('masa_pakai_pertahun', $masa->masa_pakai_pertahun) }}">
                        @error('masa_pakai_pertahun')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <a href="{{ route('masa.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection