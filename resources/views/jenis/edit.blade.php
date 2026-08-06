<h3>Edit Data Jenis Barang</h3>

<form action="{{ route('jenis.update', $jenis->jenis_id) }}" method="POST">
    @csrf
    @method('PUT')

    <table>
        <tr>
            <td>Jenis Barang</td>
            <td>
                <input type="text" name="jenis_barang" value="{{ $jenis->jenis_barang }}">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit">Update</button>
                <a href="{{ route('jenis.index') }}">Kembali</a>
            </td>
        </tr>
    </table>
</form>