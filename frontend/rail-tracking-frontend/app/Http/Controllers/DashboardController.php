<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua pengguna atau sejumlah pengguna tertentu
        $users = User::all(); // Untuk mengambil semua pengguna
        // $users = User::limit(10)->get(); // Untuk mengambil 10 pengguna

        return view('dashboard', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ka' => 'required|string|max:255',
            'no_ka' => 'required|string|max:255',
            'stasiun_asal' => 'required|string|max:255',
            'stasiun_tujuan' => 'required|string|max:255',
        ]);

        return redirect()->route('tracking', $request->all());
    }
}
