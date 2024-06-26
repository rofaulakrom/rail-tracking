<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function getRoute($no_ka)
    {
        // Gantikan dengan logika untuk mendapatkan data rute yang sebenarnya berdasarkan no_ka
        $routes = [
            'KA123' => [
                ['latitude' => 	-6.91, 'longitude' => 	107.60], // Bandung
                ['latitude' => 	-6.92, 'longitude' => 	107.63], // Cikudapateuh
                ['latitude' => 	-6.93, 'longitude' => 	107.65], // Kiaracondong
                // Tambahkan koordinat lainnya sesuai rute
            ],
            // Tambahkan rute lainnya
        ];

        return response()->json($routes[$no_ka] ?? []);
    }
}
