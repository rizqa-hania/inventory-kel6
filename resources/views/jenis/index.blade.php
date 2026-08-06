<h3>Data Jenis Barang</h3>

<a href="{{ route('jenis.create') }}">+ Create Jenis</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID Jenis</th>
            <th>Jenis Barang</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($jenis as $v)
        <tr>
            <td>{{ $v->jenis_id }}</td>
            <td>{{ $v->jenis_barang }}</td>
            <td>
                <a href="{{ route('jenis.edit', $v->jenis_id) }}">Edit</a>

                <form action="{{ route('jenis.destroy', $v->jenis_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>