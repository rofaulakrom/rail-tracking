<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getTrainLocation()
    {
        $client = new Client();
        $response = $client->get(env('API_URL') . '/train/location');
        $data = json_decode($response->getBody(), true);

        return view('location', compact('data'));
    }
}
