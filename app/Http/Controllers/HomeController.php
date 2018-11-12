<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::get();
        return view('home');
    }

    public function create() {
        
    }
}
