@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">
        Tambah Kategori
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kategori as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kategori_barang }}</td>
                <td>

                    <a href="{{ route('kategori.edit',$item->kategori_id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('kategori.destroy',$item->kategori_id) }}"
                        method="POST"
                        style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection