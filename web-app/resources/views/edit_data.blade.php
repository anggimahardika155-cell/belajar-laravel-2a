@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 3px; margin-bottom: 15px; font-size: 14px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/employe/{{ $employe->id }}">
    @csrf
    @method('put')
    <table border="0" cellpadding="8" style="margin: 15px auto; width: 100%; max-width: 500px;">
        <tr>
            <td width="25%"><b>ID</b></td>
            <td>
                <input type="text" name="id" value="{{ $employe->id }}" disabled style="width: 100%; padding: 6px 10px; border: 1px solid #ccc; background-color: #eee; border-radius: 3px; font-size: 14px; cursor: not-allowed;">
            </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td><input type="text" name="nama" value="{{ old('nama', $employe->nama) }}" required style="width: 100%; padding: 6px 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 14px;"></td>
        </tr>
        <tr>
            <td valign="top"><b>Alamat</b></td>
            <td><textarea name="alamat" rows="3" required style="width: 100%; padding: 6px 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 14px;">{{ old('alamat', $employe->alamat) }}</textarea></td>
        </tr>
        <tr>
            <td><b>Gender</b></td>
            <td>
                <select name="gender" style="width: 100%; padding: 6px 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 14px;">
                    <option value="L" {{ old('gender', $employe->gender) === 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('gender', $employe->gender) === 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>Gaji</b></td>
            <td><input type="number" name="gaji" value="{{ old('gaji', $employe->gaji) }}" required style="width: 100%; padding: 6px 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 14px;"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn-navy" style="padding: 8px 18px; cursor: pointer;">Update</button>
                <a href="/employe" class="btn-gray" style="padding: 8px 14px; text-decoration: none; margin-left: 8px;">Kembali</a>
            </td>
        </tr>
    </table>
</form>
@endsection
