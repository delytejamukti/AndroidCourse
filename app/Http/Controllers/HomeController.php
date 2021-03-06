<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;
use App\Courses;
use App\User;
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
        $id = Auth::user()->id;
        $total = HistoryView::where('id_user',Auth::user()->id)->pluck('id_course')->toArray();
        $total2 = count($total);
        if($total2 >=6 && Auth::user()->advanced==0){
            $user = User::where('id',Auth::user()->id)->first();
            // dd($user);
            $user->advanced = 1;
            $user->save();

        }

        $courses = Courses::where('is_advanced',"0")->orderBy('id','ASC')->get();
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
        if( Auth::user()->advanced > 0){
            $persentase =  100;
        }
        $data['persen'] = (int)$persentase;   
        return view('home',$data);
        
    }
    
    public function play($id)
    {   $id_vidio = $id;
        $user_id = Auth::user()->id;
        $data = Courses::where('id',$id_vidio)->first();

        $view = HistoryView::where('id_user',$user_id)->where('id_course',$id_vidio)->first();
        if(!$view){
            $add_history = new HistoryView;
            $add_history->id_user = $user_id;
            $add_history->id_course = $id_vidio;
            $add_history->save();
        }
        
        $data['course'] = Courses::where('id',$id_vidio)->first();

        return view('play',$data);

    }

    public function convert(Request $request)
    {
        ini_set('max_execution_time', 600);
        $nama_vidio = $request->nama_vidio;
        $format = $request->format;
        $frame_size = $request->frame_size;
        $frame_rate = $request->frame_rate;
        $unik = mt_rand(1000000, 9999999);
        
        $input = public_path('video').'/'.$nama_vidio;
        $info = pathinfo($input);
        
        $video_name =  basename($input,'.'.$info['extension']);
        $new_name = $video_name.$unik.'.'.$format;

        $output = public_path('converted').'/'.$new_name;

        
        $command = "ffmpeg -i ".$input." -vf scale=".$frame_size." ".$frame_rate." ".$output;
        $process = new Process ($command);
        $process->run();
        
        if (!$process->isSuccessful()){
            $error = new ProcessFailedException($process);
		    return response()->json([
			    'message'   => 'video failed to convert :'.$error.'.',
			    'link' => $nama_vidio,
			    'class_name'  => 'alert-danger',
			    'flag' => false
		    ]);	
        }else{
            return response()->json([
                'message'   => 'video converted Successfully ',
                'link' => $new_name,
                'class_name'  => 'alert-success',
                'flag' => true
                ]);

        }
        




    }

   
}
