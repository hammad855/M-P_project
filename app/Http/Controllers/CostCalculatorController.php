<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CostCalculatorController extends Controller
{
    public function getBranches()
    {
        $requests = Http::get('http://20.46.47.21/CustomerAPI/api/Users/Branches');
        return $requests->json();
    }

    public function costCalculate(Request $request)
    {
        $cost = Http::get("http://20.46.47.21/CustomerAPI/api/Consignment/GetRate?Origin={$request->origin}&Destination={$request->destination}&Weight={$request->densityWeight}&ServiceType={$request->serviceType}&pieces={$request->pieces}");
        return $cost->json();
    }
}
