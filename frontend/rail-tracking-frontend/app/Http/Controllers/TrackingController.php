<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index(Request $request)
    {
        return view('tracking', $request->all());
    }
}
