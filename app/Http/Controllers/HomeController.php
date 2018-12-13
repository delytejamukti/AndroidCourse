<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\HistoryView;
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
    {   $id_course_beginner = Courses::where('is_advanced',Auth::user()->advanced)->pluck('id')->toArray();
        $data['courses'] = Courses::where('is_advanced',Auth::user()->advanced)->get();
        $data['history'] = HistoryView::whereIn('id_course',$id_course_beginner)->where('id_user',Auth::user()->id)->pluck('id')->toArray();
        $persentase =  (count($data['history'])/6)*100;
        $data['persen'] = (int)$persentase;   
        return view('home',$data);
    }
}
