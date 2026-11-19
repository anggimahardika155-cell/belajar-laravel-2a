@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <hr>

    <form action="/employe" method="post">
        @csrf

        <table cellpadding="8">
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" required placeholder="Masukkan nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" required placeholder="Masukkan alamat" rows="4" cols="30"></textarea>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="gender" value="L" required> Laki-laki
                    <input type="radio" name="gender" value="P"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>
                    <input type="number" name="gaji" required placeholder="Masukkan nominal gaji">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan Data</button>
                    <button type="reset">Reset</button>
                    <a href="/employe"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>
@endsection
