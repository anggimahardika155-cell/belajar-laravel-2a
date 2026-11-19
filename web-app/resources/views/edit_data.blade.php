@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <hr>

    <form action="/employe/{{ $employe->id }}" method="post">
        @csrf
        @method('PUT')

        <table cellpadding="8">
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" value="{{ $employe->nama }}" required>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" required rows="4" cols="30">{{ $employe->alamat }}</textarea>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="gender" value="L" 
                        {{ $employe->gender == 'L' ? 'checked' : '' }}> Laki-laki
                    <input type="radio" name="gender" value="P" 
                        {{ $employe->gender == 'P' ? 'checked' : '' }}> Perempuan
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>
                    <input type="number" name="gaji" value="{{ $employe->gaji }}" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan Perubahan</button>
                    <a href="/employe"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>
@endsection
