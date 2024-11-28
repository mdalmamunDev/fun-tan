<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
