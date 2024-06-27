<?php
// app/Http/Controllers/TrainController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Train;

class TrainController extends Controller
{
    // Menampilkan halaman tracking dengan nomor KA
    public function showTracking($trainNumber)
    {
        return view('tracking', ['trainNumber' => $trainNumber]);
    }

    // Mendapatkan rute kereta berdasarkan nomor KA
    public function getRoute($trainNumber)
    {
        // Ambil rute dari tabel trains berdasarkan trainNumber
        $train = Train::where('TrainNumber', $trainNumber)->first();

        if ($train) {
            // Dapatkan daftar kode stasiun dari rute
            $stationCodes = explode(',', $train->Route);

            // Ambil data stasiun berdasarkan kode stasiun
            $stations = Station::whereIn('StationCode', $stationCodes)
                               ->orderByRaw('FIELD(StationCode, "' . implode('","', $stationCodes) . '")')
                               ->get(['Latitude', 'Longitude', 'StationName']);

            return response()->json($stations);
        }

        return response()->json([]);
    }
}
