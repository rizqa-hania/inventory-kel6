@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Data Masa Ekonomis
            </div>
            <div class="card-body table-responsive">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table id="table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Barang</th>
                            <th>Tanggal Pembelian</th>
                            <th>Harga Pembelian</th>
                            <th>Masa Pakai</th>
                            <th>      
                                <a href="{{ route('masa.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Masa Ekonomis 
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masa as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->barang->nama_barang ?? '-' }}</td>
                            <td>{{ $v->tanggal_pembelian }}</td>
                            <td>Rp {{ number_format($v->harga_pembelian, 0, ',', '.') }}</td>
                            <td>{{ $v->masa_pakai_pertahun }} Tahun</td>
                            <td>
                                <form action="{{ route('masa.destroy', $v->masa_id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('masa.edit', $v->masa_id) }}">Edit</a>
                                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data masa ekonomis ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection