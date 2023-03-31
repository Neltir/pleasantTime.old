<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
    public function mentions(){
        return view('mentions');
    }
    public function contact(){
        return view('contact');
    }
}
