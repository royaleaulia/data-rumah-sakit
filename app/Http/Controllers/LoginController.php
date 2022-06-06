<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supoort\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use PharIo\Manifest\Author;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    
    public function store(){
        return request()->all();
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(FacadesAuth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        FacadesAuth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect ("/");
    }
}
