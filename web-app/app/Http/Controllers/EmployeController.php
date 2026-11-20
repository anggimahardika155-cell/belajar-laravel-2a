<?php
namespace App\Http\Controllers; 
// memanggil model Employe
use App\Models\Employe; 
use Illuminate\Http\Request; 

class EmployeController extends Controller
{ 
        public function index(Request $request)
    {
        $data['judul'] = 'Data Pegawai';

        if ($request->has('cari')) {
            // Jika ada yang dicari
            $data['employes'] = Employe::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('alamat', 'like', '%' . $request->cari . '%')
                ->get();
        } else {
            // Jika tidak ada pencarian, tampil semua
            $data['employes'] = Employe::all();
        }

        return view('tampil_data', $data);
    }

    // menampilkan halaman form tambah data
    public function create()
    {
        $data['judul'] = 'Tambah Data Pegawai';
        return view('tambah_data', $data);
    }

    // menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi: pastikan kolom terisi dengan benar & ID unik jika diisi manual
        $request->validate([
            'id' => 'nullable|numeric|unique:employes,id',
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'gaji' => 'required|numeric'
        ], [
            'id.unique' => 'ID sudah terdaftar di database! Kosongkan kolom ID agar otomatis dibuat oleh sistem.',
            'id.numeric' => 'ID harus berupa angka!',
            'nama.required' => 'Nama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'gender.required' => 'Jenis kelamin wajib dipilih!',
            'gaji.required' => 'Gaji wajib diisi!',
            'gaji.numeric' => 'Gaji harus berupa angka!'
        ]);

        // Simpan data ke tabel employes
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'gaji' => $request->gaji
        ];

        if ($request->filled('id')) {
            $data['id'] = $request->id;
        }

        Employe::create($data);

        // Kembali ke halaman daftar data dengan pesan
        return redirect('/employe')->with('pesan', 'Data berhasil disimpan! ✅');
    }
    
        // menampilkan form edit dengan data yang dipilih
    public function edit($id)
    {
        $data['judul'] = 'Ubah Data Pegawai';
        // cari data berdasarkan id
        $data['employe'] = Employe::find($id);
        return view('edit_data', $data);
    }

    // menyimpan perubahan ke database
    public function update(Request $request, $id)
    {
        // validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gaji' => 'required'
        ]);

        // cari data lalu ubah
        Employe::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'gaji' => $request->gaji
        ]);

        // kembali ke halaman daftar dengan pesan
        return redirect('/employe')->with('pesan', 'Data berhasil diubah! ✅');
    }

    // Fungsi Hapus Data
    public function destroy($id)
    {

        // Cari data berdasarkan id, lalu hapus dari database
        Employe::destroy($id);
        
        // Kembali ke halaman daftar data + tampilkan pesan notifikasi
        return redirect('/employe')->with('pesan', 'Data berhasil dihapus! ✅');
    }
}

