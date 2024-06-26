<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan form home
    public function index()
    {
        return view('home');
    }

    // Menangani submit form
    public function store(Request $request)
    {
        $trainNumber = $request->input('trainNumber');
        return redirect()->route('tracking', ['trainNumber' => $trainNumber]);
    }
}
