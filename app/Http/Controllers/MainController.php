<?php

namespace App\Http\Controllers;

use App\Main;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    function getUser() {
        $user = Auth::user()->role_id;
        $bool = false;
        if ( $user == 1 ) {
            $bool = true;
        }

        return $bool;
    }

    public function index() {
        
    }
    
   public function users() {
       if ( $this->getUser() ) {
           $users = User::where('role_id', 2)->get();
           return view('users', [
               'users' => $users,
               'form'  => $this->getUser()
           ]);
       }

       return abort(404);
   }
}
