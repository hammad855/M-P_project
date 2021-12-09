<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    public function getdeparts(){
        $departs = Db::table('departments')->orderBy('id','DESC')->get();
        return view('careers_admin.department',compact('departs'));
    }
}
