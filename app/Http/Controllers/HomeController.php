<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return array
     */
    public function index(Request $request)
    {
//        $request->session()->put(['sojib' => 'web developer']);

//        session(['sojib'=>'developer']);
//
//        return session('sojib');

//        $request->session()->forget('sojib');

//        $request->session()->flush();
//
//        return $request->session()->all();


//        $request->session()->flash('message', 'post has been created');

//        return $request->session()->get('message');
//
//        $request->session()->reflash();
//
//        $request->session()->keep('message');

//        return view('home');
    }
}
