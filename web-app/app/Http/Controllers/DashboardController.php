<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('olshop');
    }

    public function product() {
        return view('product');
    }

    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }

    public function about() {
        return view('about');
    }
}
    

        