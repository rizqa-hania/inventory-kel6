@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                Data Jenis Barang
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
                            <th>Jenis Barang</th>
                            <th>Deskripsi</th>  
                            <th>
                                <a href="{{ route('jenis.create') }}" class="btn btn-primary btn-sm">
                                    + Tambah Jenis
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($jenis as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->jenis_barang }}</td>
                            <td>{{ $v->deskripsi }}</td>
                            <td>
                                <form action="{{ route('jenis.destroy', $v->jenis_id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('jenis.edit', $v->jenis_id) }}" class="btn btn-success btn-sm">
                                        Edit
                                    </a>

                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                        class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>

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