@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                Ruang
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruang</th>
                            <th>Deskripsi</th>
                            <th>
                                <a href="{{ route('ruang.create') }}" class="btn btn-primary btn-sm">+ Tambah Ruang</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ruang as $v)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $v->nama_ruang }}</td>
                            <td>{{ $v->deskripsi }}</td>
                            <td>
                                <form action="{{ route('ruang.destroy', $v->ruang_id) }}" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <a href="{{ route('ruang.edit', $v->ruang_id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus ruang ini?' )" class="btn btn-danger btn-sm">Delete</button>
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
