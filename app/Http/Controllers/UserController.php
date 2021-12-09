<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function createUser(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8',
            'department_id' => 'required',
        ]);
        $userInsert = User::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'department_id' => $request->department_id,
            'hr_portal' => $request->hr_portal,
        ]);
        if($userInsert){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["error" => true, 'message' => "Could not create user, please try again or contact administrator."]);
        }
    }
    public function getUsers(){
        $user = User::with('department')->where('hr_portal', true)->get();
        return response()->json($user);
    }
    public function deleteUser($id){
        User::destroy($id);
        return response()->json(["success" => true]);
    }
    public function getRoles(){
        $roles = Role::all();
        return response()->json($roles);
    }
    public function assignRole($id, $userId){
        $user = User::where('id', $userId)->update([
            'role_id' => $id,
        ]);
        if($user){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["error" => true, 'message' => "Could not assign role, please try again or contact administrator."]);
        }
    }

    public function loginprocess(Request $request){
        // $credentials = $request->validate([
        //     'email' => ['required'],
        //     'password' => ['required'],
        // ]);

        $dataAttempt = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($dataAttempt)) {
            $request->session()->regenerate();

            return redirect()->route('hr-admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/hr-admin/login');
    }
}
