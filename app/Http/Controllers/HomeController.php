<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data['courses'] = Courses::where('is_advanced',Auth::user()->advanced)->get();
        
        return view('home',$data);
    }
}
