<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;



class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');

    }
    public function login_trait(Request $request){
        $email = $request-> email;
        $password= $request-> password;
        $credentials= ['email'=>$email,"password"=>$password];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin');

        }else{
            return back()->withErrors([
                'email'=>'email ou password incorrect'
            ])->onlyInput('email');
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login') ;
    }
    public function register()
    {
        return view('auth.register');

    }
    public function ajoute_register(Request $request){
        $request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=>'required',
        ]);


        $registers = new user();
        $registers->email = $request->email;
        $registers->name = $request->name;
        $registers->password = $request->password;
        $registers->save();
        return redirect('/login');
    }
}
