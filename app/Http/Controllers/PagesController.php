<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\HomeContent;
use App\Models\Leadership;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{

    public function homePage(){
        $homePageData = HomeContent::take(1)->first();
        return view('index', ['contents' => $homePageData]);
    }
    public function leadershipPage(){
        $leaders = Leadership::all();
        return view('about_us.our_leaders', ['leaders' => $leaders]);
    }
    public function timelinePage(){
        $timeline = Timeline::all();
        return view('about_us.timeline', ['timelines' => $timeline]);
    }
    public function courierPage(){
        $courier = Courier::take(1)->first();
        return view('courier.index', ['content' => $courier]);
    }
}
