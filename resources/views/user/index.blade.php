@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">Data Admin</h3>
                    </div>
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Admin 
                        </a>
                    </div>
                </div>
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
                <table id="table" class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telpon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->nama }}</td>
                            <td>{{ $v->username }}</td>
                            <td>{{ $v->email }}</td>
                            <td>{{ $v->no_telp }}</td>
                            <td>
                                <form action="{{ route('user.destroy', $v->user_id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('user.edit', $v->user_id) }}">Edit</a>
                                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data admin ini?')">Delete</button>
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