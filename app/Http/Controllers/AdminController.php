<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view("admin");
    }

    public function operator(){
        return view("admin");
    }

    public function keuangan(){
        return view("admin");
    }

    public function marketing(){
        return view("admin");
    }
    
}