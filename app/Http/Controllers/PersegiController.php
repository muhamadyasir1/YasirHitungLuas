<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function hitungLuas($sisi)
    {
        $luas = $sisi * $sisi;
        return view('luas_persegi', ['sisi' => $sisi, 'luas' => $luas]);
    }
}
