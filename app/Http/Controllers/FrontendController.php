<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    function index()
    {
        return view('welcome', [
            "brand_images" => Brand::all()
        ]);
    }
    function regestration()
    {
        return view('regestration');
    }
    function home()
    {
        return view('layouts.home', [
            "brand_images" => Brand::all(),
        ]);
    }
    function regestration_post(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            User::insert([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);
            return redirect('/login');
        }
        else{
            "Password dosen't match";
        }
    }
    function login()
    {
        return view('login');
    }
    function login_post(Request $request)
    {
        // return $request;
        $user = User::where('email', $request->email)->first();
        if($user){
            if($request->password == $user->password){
                $request->session()->put('authid', $user->id);
                return redirect('/home');
            }else{
                // return back()->withErrors('fail', 'Password not match!');
                'Password not match!';
            }
        }else{
            return back()->withErrors('fail', 'This email is not registered!');
        }
    }
}
