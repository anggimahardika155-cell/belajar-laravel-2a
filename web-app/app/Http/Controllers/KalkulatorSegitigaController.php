<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorSegitigaController extends Controller
{
    public function segitiga() {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['luas'] = 0;
        return view('kalkulator_segitiga', $data);
    }

    public function prosesSegitiga(Request $request) {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = $request->input('alas');
        $data['tinggi'] = $request->input('tinggi');
        $data['luas'] = 0.5 * $data['alas'] * $data['tinggi'];
        
        return view('kalkulator_segitiga', $data);
    }
}
