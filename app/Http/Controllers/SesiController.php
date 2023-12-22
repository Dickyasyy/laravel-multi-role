<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request){
        $this->validate($request, [
            "email"     => "required",
            "password"  => "required"
        ],[
            'email.required'    => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            
            if(Auth::user()->role == 'operator'){
                return redirect('admin/operator');
            }elseif(Auth::user()->role == 'keuangan'){
                return redirect('admin/keuangan');
            }elseif(Auth::user()->role == 'marketing'){
                return redirect('admin/keuangan');
            }

        }else{ 
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
