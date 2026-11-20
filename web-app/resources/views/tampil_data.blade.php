@extends('dashboard') 

@section('content') 
    <h1>{{ $judul }}</h1>

    <!-- Pesan Notifikasi Sukses -->
    @if(session('pesan'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 3px; margin-bottom: 15px; font-size: 14px;">
            {{ session('pesan') }}
        </div>
    @endif

    <!-- Form Pencarian dan Tombol Tambah Data -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
        <form action="/employe" method="get" style="display: flex; gap: 5px;">
            <input type="text" name="cari" placeholder="Cari nama atau alamat..." value="{{ request('cari') }}"
                style="padding: 6px 10px; border: 1px solid skyblue; border-radius: 3px; font-size: 14px; width: 220px;">
            <button type="submit" class="btn-navy">Cari</button>
            @if(request('cari'))
                <a href="/employe" class="btn-gray">Reset</a>
            @endif
        </form>

        <a href="/employe/create" class="btn-blue">+ Tambah Data Baru</a>
    </div>

    <!-- Tabel Data Sesuai Modul tapi Rapi -->
    <table class="table-modul">
        <thead>
            <tr>
                <th style="width: 50px; text-align: center;">ID</th>
                <th style="text-align: left; padding-left: 10px;">Nama</th>
                <th style="text-align: left; padding-left: 10px;">Alamat</th>
                <th style="width: 100px; text-align: center;">Gender</th>
                <th style="width: 120px; text-align: right; padding-right: 12px; white-space: nowrap;">Gaji</th>
                <th style="width: 130px; text-align: center; white-space: nowrap;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employes as $row) 
            <tr>
                <td>{{ $row->id }}</td>
                <td style="text-align: left; padding-left: 10px;">{{ $row->nama }}</td>
                <td style="text-align: left; padding-left: 10px;">{{ $row->alamat }}</td>
                <td>
                    @if($row->gender == 'L')
                        <span class="badge badge-l">Laki-laki</span>
                    @else
                        <span class="badge badge-p">Perempuan</span>
                    @endif
                </td>
                <td style="text-align: right; padding-right: 12px; white-space: nowrap; font-weight: 500;">
                    Rp {{ number_format($row->gaji, 0, ',', '.') }}
                </td>
                <td style="text-align: center; white-space: nowrap;">
                    <div style="display: inline-flex; gap: 5px; align-items: center; justify-content: center;">
                        <a href="/employe/{{ $row->id }}/edit" class="btn-edit">Edit</a>
                        <form action="/employe/{{ $row->id }}" method="post" style="margin: 0; display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="padding: 20px; color: #888;">Data tidak ditemukan.</td>
            </tr>
            @endforelse 
        </tbody>
    </table>
@endsection
