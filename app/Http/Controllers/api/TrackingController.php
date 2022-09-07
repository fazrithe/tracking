<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function tracking($provider,$id){
        $api = env('API_TRACKING');
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api.'&courier='.$provider.'&awb='.$id.'');
        if($response['status'] == 400){
                return response($response['message']);
            }else{
                return response($response['data']['summary']['status'],201);
            }
    }
}
