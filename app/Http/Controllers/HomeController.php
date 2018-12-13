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
    {   
        $courses = Courses::where('is_advanced',Auth::user()->advanced)->orderBy('id','ASC')->get();
        $history = HistoryView::where('id_user',Auth::user()->id)->pluck('id_course')->toArray();
        foreach ($courses as $key => $c) {
            if(in_array($c->id,$history)){
                $c['play'] = 1;  
            }else{
                $c['play'] = 0;
            }
            
        }
        $data['courses'] = $courses;
        $persentase =  (count($history)/6)*100;
        $data['persen'] = (int)$persentase;   
        return view('home',$data);
    }
    
    public function play($id)
    {   $id_vidio = $id;
        $user_id = Auth::user()->id;

        $view = HistoryView::where('id_user',$user_id)->where('id_course',$id_vidio)->first();
        if(!$view){
            $add_history = new HistoryView;
            $add_history->id_user = $user_id;
            $add_history->id_course = $id_vidio;
            $add_history->save();
        }

        return view('play');

    }

   
}
