<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function subLocations(Request $request, $location, $branchCode){
        $locationsApi = Http::get("http://20.46.47.21/CustomerApi/api/Consignment/LocateUs?branch={$branchCode}");
        $locations = $locationsApi->json();
        return view('about_us.sub_locations', ['locations' => $locations['expressCenters'], 'location' => $location]);
    }
}
