<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function index() {
        
    }
    public function create(Request $request) {
        $request['user_id']=Auth::id();
        Main::create($request->all());

        return view('home');
    }
}
