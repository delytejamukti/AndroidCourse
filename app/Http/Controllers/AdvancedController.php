<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use Auth;

class AdvancedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['courses'] = Courses::where('is_advanced',Auth::user()->advanced)->get();
        return view('advance', $data);
    }
}
