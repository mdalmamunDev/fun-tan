<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function doLogin(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $loginData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => 1,
        ];

        if (Auth::attempt($loginData)){
            return redirect('admin/dashboard');
        }else{
            return redirect()->back()->with('error', 'Invalid login credentials.');
        }
    }

    public function doRegister(Request $request)
    {
        // Validation with unique email check
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed', // Added confirmation rule
        ]);


//        $studentRoleID = Role::where('name', 'Student')->value('id');

        // Create user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
//            'role_id' => $studentRoleID,
            'password' => Hash::make($request->password),
        ]);

        $url = $request->input('url');

        // Redirect after successful registration
        return redirect()->route('login', ['url' => $url])->with('success', 'Registration successful.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
