<?php

namespace App\Http\Controllers;

use App\Models\PickupRequest;
use App\Models\QuoteRequest;
use Exception;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function quoteForm(Request $request){
        try{
            $quote = QuoteRequest::create($request->all());
        }catch(Exception $e){
            return response()->json(["error" => true, "msg" => $e], 200);
        }
        return response()->json(["success" => true, "msg" => "Your request has been received..."], 200);
    }
    public function pickupRequest(Request $request){
        try{
            $quote = PickupRequest::create($request->all());
        }catch(Exception $e){
            return response()->json(["error" => true, "msg" => $e], 200);
        }
        return response()->json(["success" => true, "msg" => "Your request has been received..."], 200);
    }
}
