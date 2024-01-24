<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function hitungLuas($alas, $tinggi)
    {
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', compact('luas', 'alas', 'tinggi'));
    }
}
