<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Auth Login
    public function index_login(){
        return view('auth.login');
    }

    public function masuk(Request $request){
        $vData = $request->validate([
            "email" => 'required',
            "password" => 'required'
        ]);

        Auth::attempt($vData);
        return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/');
    }

    //Auth Regist
    public function index_register(){
        return view('auth.register');
    }

    public function regist(Request $request){
        $vData = $request->validate([
            "name" => 'required',
            "email" => 'email|required',
            "password" => 'required'
        ]);

        $vData['password'] = bcrypt($request->password);

        if(User::create($vData)){
            return redirect('/login');
        }else{
            return back();
        }
    }


}
