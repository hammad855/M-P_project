<?php

namespace App\Http\Controllers\JobPortal;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment(Request $request){
        $department = Department::insertGetId([
            'department' => $request->department_name,
            'code' => $request->department_code,
        ]);
        if($department){
            $inserted = (object)['id' => $department, 'department' => $request->department_name, 'code' => $request->department_code];
            return response()->json(["success" => true, "data" => $inserted], 200);
        }else{
            return response()->json(["error" => true, "msg" => "Could not add department, please try again or contact administrator"], 500);
        }
    }

    public function getDepartments(){
        return response()->json(Department::withCount('users')->get(), 200);
    }
    public function editDepartments(Request $request, $id){
        $department = Department::where('id', $id)->update([
            'department' => $request->department_name,
            'code' => $request->department_code,
        ]);
        if($department){
            $inserted = (object)['id' => $id, 'department' => $request->department_name, 'code' => $request->department_code];
            return response()->json(["success" => true, "data" => $inserted], 200);
        }else{
            return response()->json(["error" => true, "msg" => "Could not add department, please try again or contact administrator"], 500);
        }
    }
    public function deleteDepartments($id){
        $delete = Department::destroy($id);
        if($delete){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["error" => true]);
        }

    }
}
