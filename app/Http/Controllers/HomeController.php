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
        // $jobs = PostJob::all();
       $jobs = Postjob::orderBy('id','desc')->paginate(4);
        return view('pages.home', compact('jobs'));
    }
        public function Seach_home(Request $request){

          $this->validate($request, [
          'searchs' => 'required',
          ]);

        // $total = Postjob::all()->count();
        $search = $request->get('searchs');
        $location = $request->get('locations');
        $jobs = Postjob::where('title', 'LIKE','%' . $search . '%')->orWhere('company_name', 'LIKE', '%' . $search . '%')->orWhere('location', 'LIKE', '%' . $location . '%')->paginate(4);
            return view('pages.home', compact('jobs'));
    }
    public function jobDetail($id){
        $jobDetail = PostJob::find($id);
        return view('pages.jobdetail',compact('jobDetail'));
    }
}
