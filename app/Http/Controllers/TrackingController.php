<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function tracking($provider,$id){
        $api = env('API_TRACKING');
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api.'&courier='.$provider.'&awb='.$id.'');

        return view('web.app', compact('response'));
    }
}
