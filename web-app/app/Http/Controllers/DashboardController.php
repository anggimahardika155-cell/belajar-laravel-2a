<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() { 
        $data['judul']='Laman Home'; 
        $data['isi']='Selamat Datang di Web Kami, ini adalah laman Home.';
        return view('home',$data); 
    } 

    public function product() {
        return view('product');
    }

    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }

    public function about() {
        $data['judul'] = 'Laman About';
        $data['isi'] = 'Ini adalah laman About sistem informasi berbasis web menggunakan framework Laravel.';
        return view('about', $data);
    }

    public function gallery(){ 
        $data['judul']='Laman Gallery'; 
        return view('gallery',$data); 
    }  
}
