<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::where('baza', NULL)->get();
        return view('home', [
            'object' => $main
        ]);
    }

    public function update( Request $request ) {
        if( $request->ajax() ) {
            if ( $request->has('baza') && $request->has('element') ) {
                foreach ( $request->element as $item) {
                    Main::where( 'id', $item )->update([
                        'baza' => $request->baza
                    ]);
                }

                return response()->json(['success'=>'ajax', 'data' => true]);
            }
        }
        return response()->json(['data' => false]);
    }
    
    public function create(Request $request) {
        $request['user_id']= Auth::id();
        Main::create($request->all());
        return redirect()->route('main');
    }

    public function server() {
        $main = Main::where('baza', '1')->get();
        return view('server', [
            'object' => $main
        ]);
    }
}
