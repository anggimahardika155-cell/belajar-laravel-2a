<!-- menggunakan layout dashboard yang sudah dibuat sebelumnya -->
@extends('dashboard') 

<!-- bagian konten utama -->
@section('content') 
    <h1>{{ $judul }}</h1>
        <!-- Form Pencarian -->
    <form action="/employe" method="get">
        <input type="text" name="cari" placeholder="Cari nama atau alamat..." 
        value="{{ request('cari') }}">
        <button type="submit">Cari</button>
        @if(request('cari'))
            <a href="/employe"><button type="button">Reset</button></a>
        @endif
    </form>
    <br>

        <!-- Tombol Tambah Data Baru -->
    <a href="/employe/create"><button>Tambah Data Baru</button></a>
    <br><br>

    <!-- Pesan Notifikasi Setelah Simpan -->
    @if(session('pesan'))
        <p style="color: green; font-weight: bold;">{{ session('pesan') }}</p>
    @endif

    <!-- tabel untuk menampilkan data -->
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        <!-- perulangan untuk menampilkan setiap baris data -->
        @foreach ($employes as $row) 
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->gaji }}</td>
            <td>
                <a href="/employe/{{ $row->id }}/edit"><button>Edit</button></a>
                |
                <form action="/employe/{{ $row->id }}" method="post" style="display: inline;">
                     @csrf
                     @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </table>
@endsection
