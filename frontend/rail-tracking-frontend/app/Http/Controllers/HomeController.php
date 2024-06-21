<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua pengguna atau sejumlah pengguna tertentu
        $users = User::all(); // Untuk mengambil semua pengguna
        // $users = User::limit(10)->get(); // Untuk mengambil 10 pengguna

        return view('home', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_ka' => 'required|string|max:255'
        ]);

        return redirect()->route('tracking', $request->all());
    }
}
