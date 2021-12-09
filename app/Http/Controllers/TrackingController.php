<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function trackConsignment($id){
        $request = Http::get("http://20.46.47.21/MPELAPI/api/Tracking/Tracking_App?consignment={$id}");
        return $request->json();
    }
}
