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
}
