<?php

namespace App\Http\Controllers;

use\App\PostJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

    // $jobs = PostJob::all();
        $jobs = PostJob::orderBy('id','desc')->paginate(4);

    	return view('pages.home',compact('jobs'));
    }

    public function blog(){
    	return view('pages.blog');
    }
    public function jobDetail($id){
     $jobDetail = PostJob::find($id);
    	return view('pages.jobdetail', compact('jobDetail'));
    }

}
