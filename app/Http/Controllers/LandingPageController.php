<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index() {
        $product = DataBarang::all();
        return view('pages.landingpage.index', compact('product'));
    }

    public function register(){
        return view('pages.register.index');
    }

    public function login(){
        return view('pages.login.index');
    }

    public function registerstore(Request $request){

        $data = $request->all();
        $data['role'] = 'user';
        User::create($data);
        return redirect()->route('login');
    }

    public function loginstore(Request $request){

        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } 
        return redirect()->route('login');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('home');
    }
}
