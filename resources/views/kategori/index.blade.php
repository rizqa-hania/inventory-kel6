@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                Data Kategori
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
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>
                                <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">
                                    + Tambah Kategori
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($kategori as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->kategori_barang }}</td>
                            <td>{{ $v->deskripsi }}</td>
                            <td>
                                <form action="{{ route('kategori.destroy', $v->kategori_id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('kategori.edit', $v->kategori_id) }}" class="btn btn-success btn-sm">
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