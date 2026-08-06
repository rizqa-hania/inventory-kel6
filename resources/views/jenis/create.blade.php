<h3>Tambah Data Jenis Barang</h3>

<form action="{{ route('jenis.store') }}" method="POST">
    @csrf

    <table>
        <tr>
            <td>Jenis Barang</td>
            <td>
                <input type="text" name="jenis_barang">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
                <a href="{{ route('jenis.index') }}">Kembali</a>
            </td>
        </tr>
    </table>
</form>