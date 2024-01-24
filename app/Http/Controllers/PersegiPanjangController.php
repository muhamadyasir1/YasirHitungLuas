<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function hitungLuas()
    {
        // Menggunakan variabel untuk panjang dan lebar
        $panjang = 10;
        $lebar = 5;

        // Menghitung luas persegi panjang
        $luas = $panjang * $lebar;

        // Mengembalikan hasil dalam view
        return view('luas_persegi_panjang', ['panjang' => $panjang, 'lebar' => $lebar, 'luas' => $luas]);
    }
}
