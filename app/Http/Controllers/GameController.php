<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function startGame()
    {
        session(['target_number' => rand(1, 100), 'attempts' => 0]);
        return redirect()->route('game.play');
    }

    public function playGame(Request $request)
    {
        $guess = $request->input('guess');

        if (!isset($guess)) {
            $result = "";
        } else {
            $result = $this->guessNumber($guess);
        }

        return view('game', compact('result'));
    }

    private function guessNumber($guess)
    {
        session(['attempts' => session('attempts') + 1]);

        if ($guess == session('target_number')) {
            return "Selamat! Anda menebak benar setelah " . session('attempts') . " percobaan.";
        } elseif ($guess < session('target_number')) {
            return "Tebakan Anda terlalu rendah. Coba lagi!";
        } else {
            return "Tebakan Anda terlalu tinggi. Coba lagi!";
        }
    }

}
