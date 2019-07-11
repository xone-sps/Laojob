<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostJob;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
         return view('login.index');
    }
    public function home(){
        $jobs = PostJob::all();
        return view('pages.home', compact('jobs'));
    }
    public function jobDetail($id){
        $jobDetail = PostJob::find($id);
        return view('pages.jobdetail',compact('jobDetail'));
    }
}
