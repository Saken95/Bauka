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
    function getUser() {
        $user = Auth::user()->role_id;
        $bool = false;
        if ( $user == 1 ) {
            $bool = true;
        }

        return $bool;
    }
    public function index()
    {
        $main = Main::where('baza', NULL)->get();
        return view('home', [
            'object'    => $main,
            'form'      => $this->getUser()
        ]);
    }

    public function update( Request $request ) {
        if( $request->ajax() ) {
            if ( $request->has('baza') && $request->has('element') ) {
                $baza = $request->baza;
                if ( $baza == 'null' ) {
                    $baza = NULL;
                }
                foreach ( $request->element as $item) {
                    Main::where( 'id', $item )->update([
                        'baza' => $baza
                    ]);
                }

                return response()->json(['success'=>'ajax', 'data' => true]);
            }
        }
        return response()->json(['data' => false]);
    }

    public function delete( Request $request ) {
        if( $request->ajax() ) {
            if ( $request->has('element') ) {

                foreach ( $request->element as $item) {
                    Main::where( 'id', $item )->delete();
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
            'object'    => $main,
            'form'      => $this->getUser()
        ]);
    }

    public function sklad() {
        $main = Main::where('baza', '2')->get();
        return view('sklad', [
            'object'    => $main,
            'form'      => $this->getUser()
        ]);
    }

    public function spisania() {
        $main = Main::where('baza', '3')->get();
        return view('spisania', [
            'object'    => $main,
            'form'      => $this->getUser()
        ]);
    }

    public function utilizatsia() {
        $main = Main::where('baza', '4')->get();
        return view('utilizatsia', [
            'object'    => $main,
            'form'      => $this->getUser()
        ]);
    }
}
