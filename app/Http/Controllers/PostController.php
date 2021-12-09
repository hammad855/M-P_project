<?php

namespace App\Http\Controllers;
// namespace App\Http\PostController;
// use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use DB;
use Response;

class PostController extends Controller
{
    public function createpost(){
        $locations = DB::table('mytable')->get();
        $departments = DB::table('departments')->get();

        // dd($locations);
        // $output = '<select name="location" class="typeahead form-control dropdown-menu location" style="display:block; position:relative" id="location"><option selected="selected" disabled>Choose Location</option>';
        // foreach($locations as $row)
        // {
        //  $output .= '
        //  <option value='.$row->Field1.'>'.$row->Field1.'</option>
        //  ';
        // }
        // $output .= '</select>';
        return view('careers_admin.post_job',compact('locations'))->with("departments",$departments);
    }

    public function autocomplete(Request $request){
        dd($request->all());
    }

    public function createjob(Request $request){
        
        $career_id = DB::table('careers')->insertGetId([
            "title"=>$request->title,
            "location_id"=>$request->location,
            "department_id"=>$request->department,
            "receive"=>$request->rec,
            "email"=>$request->email,
            "employment_type_id"=>$request->type,
            "jobs" => $request->occ,
        ]);

        DB::table('careers_description')->insert([
            "description"=>$request->description,
            "skills"=>$request->skills,
            "careers_id"=>$career_id
        ]);

        foreach($request->question as $key => $ques){
            if($ques != null){
                $answer = $request->answer[$key];
                $idealanswer = $request->idealanswer[$key];
                DB::table('career_options')->insert([
                    "question"=>$ques,
                    "tool"=>$answer,
                    "answer"=>$idealanswer,
                    "careers_id"=>$career_id
                ]);
            }
        }
        echo 1;
    }

public function joblist(Request $request){
    $data = DB::table('careers')
    ->leftJoin('departments','departments.id','=','careers.department_id')
    ->select('careers.*','departments.department')
    ->where('careers.status','open')
    ->orderBy('id','DESC')
    ->get();
    return view('careers.list',compact('data'));
}



public function applypost(Request $request){

  $request->validate([
      'cv' => 'required|mimes:pdf|max:2048',
      'career_id' => 'required'
  ]);

//   dd($request->file('cv'));


  if($request->file('cv')) {
    $fileName = time().'_'.$request->cv->getClientOriginalName();
    // $filePath = $request->file('cv')->storeAs('uploads', $fileName, 'public');
    $request->cv->move('uploads/careers_assets',$fileName);



  DB::table('apply_careers')->insert([
  "name" => $request->name,
  "gender" => $request->gender,
  "cnic" => $request->cnic,
  "email" => $request->email,
  "phone" => $request->phone,
  "mobile" => $request->mobile,
  "contact" => $request->contact,
  "address" => $request->address,
  "city" => $request->city,
  "province" => $request->province,
  "country" => $request->country,
  "experience" => $request->experience,
  "salary_expectation" => $request->salary_expectation,
  "designation" => $request->designation,
  "company" => $request->company,
  "joining" => $request->joining,
  "leaving" => $request->leaving,
  "old_salary" => $request->old_salary,
  "benefits" => $request->benefits,
  "institute" => $request->institute,
  "degree" => $request->degree,
  "year_start" => $request->year_start,
  "year_completion" => $request->year_completion,
  "cgpa" => $request->cgpa,
  "qualification_province" => $request->qualification_province,
  "qualification_country" => $request->qualification_country,
  "certification_Institute" => $request->certification_Institute,
  "certification_completion" => $request->certification_completion,
  "skills" => $request->skills,
  "cv" => $fileName,
  "career_id" => $request->career_id,
  ]);
 }

  return back()->with('success','Application has been sent successfully.');
    }


    // public function downloadcv(Request $req){
    //     $file_name = $req->cv;
    //     $path = storage_path().'/'.'app'.'/public/uploads/'.$file_name;
    //      if (file_exists($path)) {
    //         $headers = array(
    //             'Content-Type: application/pdf',
    //           );
    //         return Response::download($path,$file_name,$headers);
    //     }
    // }


    public function downloadcv(Request $req,$file){
        return response()->download(public_path('uploads/careers_assets/'.$file));
    }

    public function changeapplicationstatus(Request $req){
        DB::table('apply_careers')->where('id',$req->app_id)->update([
            'status'=>$req->status,
        ]);
        echo 1;
    }


    public function applications(){
        $applications = DB::table('apply_careers')
        ->leftJoin('careers','careers.id','=','apply_careers.career_id')
        ->select('apply_careers.*','careers.title as job_title')
        ->orderBy('apply_careers.id','DESC')
        ->get();
        return view('careers_admin.jobs',compact('applications'));
    }

    public function joblisting(){
        $data = DB::table('careers')->get();
        $fulldata = array();
        foreach($data as $job){
            $applicants = DB::table('apply_careers')->where('career_id',$job->id)->select('id')->get();
            $hired = DB::table('apply_careers')->where('status','hired')->select('id')->get();
            $job->apply = $applicants;
            $job->hired = $hired;
            array_push($fulldata,$job);
        }

        // ->leftJoin('apply_careers','apply_careers.career_id','=','careers.id')
        // ->select('careers.*',)
        // ->orderBy('id','DESC')->get();
        return view('careers_admin.joblisting',compact('data'));
    }

    public function joblistingedit($id)
    {
        $locations = DB::table('mytable')->get();
        $departments = DB::table('departments')->get();
        $job = DB::table('careers')->where('id',$id)->first();
	    return view('careers_admin.joblistingedit',compact('job'))->with(["departments"=>$departments,"locations"=>$locations]);
    }

    public function joblistingupdate(Request $req){
        DB::table('careers')->where('id',$req->id)->update([
            "title" => $req->title,
            "location_id" => $req->location,
            "jobs" => $req->jobs,
            "status" => $req->status,
        ]);
        return redirect('/hr-admin/joblisting')->with('message','job has been updated successfully');
    }

    public function edit(Request $req, $id)
    {
        DB::table('careers')->where('id',$id)->update([
            "title" => $req->title, 
            "location_id" => $req->location, 
            "jobs" => $req->jobs,
            "status" => $req->status,
        ]);  
      
      return response()->json([ 'success' => true ]);

    }

    public function joblistingdelete($id){
        DB::table('careers')->where('id',$id)->update([
            "status"=>"close",
        ]);
        return back()->with('message','job has been closed successfully!');
    }

}
