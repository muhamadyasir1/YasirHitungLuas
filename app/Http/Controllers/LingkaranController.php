<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LingkaranController extends Controller
{
    public function hitungLuasLingkaran($jariJari)
    {
        $pi = 3.14159;
        $luas = $pi * $jariJari * $jariJari;

        return view('luas', ['jariJari' => $jariJari, 'luas' => $luas]);
    }
}
