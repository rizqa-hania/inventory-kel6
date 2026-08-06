@extends('template.layout')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header bg-primary">
                Data Barang
            </div>

            <div class="card-body table-responsive">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Jumlah</th>
                            <th>Ruang</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>
                                <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm">  + Tambah Barang </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($barang as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->nama_barang }}</td>
                        <td>{{ $b->merk }}</td>
                        <td>{{ $b->jumlah }}</td>
                        <td>{{ $b->ruang->nama_ruang }}</td>
                        <td>{{ $b->jenis->nama_jenis }}</td>
                        <td>{{ ucfirst($b->status) }}</td>

                        <td>

                            <form action="{{ route('barang.destroy',$b->barang_id) }}" method="POST" style="display:inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <a href="{{ route('barang.edit',$b->barang_id) }}" class="btn btn-success btn-sm"> Edit</a>
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')"  class="btn btn-danger btn-sm">Hapus </button>
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