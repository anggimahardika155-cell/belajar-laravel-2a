<?php
namespace App\Http\Controllers; 
// memanggil model Employe
use App\Models\Employe; 
use Illuminate\Http\Request; 

class EmployeController extends Controller
{ 
    // fungsi untuk menampilkan semua data pegawai
    public function index(){ 
        $data['judul'] = 'CRUD Data Pegawai'; 
        $data['employes'] = Employe::all();  
        return view('tampil_data',$data); 
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

    // Validasi: pastikan kolom wajib diisi
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gaji' => 'required'
        ]);

    // Simpan data ke tabel employes
        Employe::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'gaji' => $request->gaji
        ]);

    // Kembali ke halaman daftar data dengan pesan
        return redirect('/employe')->with('pesan', 'Data berhasil disimpan! ✅');
    }

}

