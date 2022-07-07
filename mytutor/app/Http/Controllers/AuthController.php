<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Main;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');
    }

    
    public function register()
    {
        return view('register');
    
    }

    public function landing(){

        return view('landingpage');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }
        else{
            return redirect("login")->withSuccess('You have invalid credentials');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}
