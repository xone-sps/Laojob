<?php

namespace App\Http\Controllers;

use\App\PostJob;
use Illuminate\Http\Request;

class AdminController extends Controller
{
protected $uploadPath ='/images/';

    function index(){
    	return view('admin.dashboard');
    }
    public function allJob(){
    	$alljob = Postjob::orderBy('id','desc')->paginate(3);
    	$total = Postjob::all()->count();
    	return view('admin.posts.job.alljob', compact('alljob','total'));
    }


        function job(){
    	return view('admin.posts.job.index');
    }
    function Postjob(Request $request){

    	            // dd($request->all());
    $this->validate($request, [
		'title'=>'required',
		'company_name'=>'required',
		'location'=>'required',
		'logo'=>'required',
		'description'=>'required',
		 'logo'=>'max:3000|mimes:jpeg,png,jpg',
		    ]);
		$file = $request->file('logo');
		$fileExtr = strtolower($file->getClientOriginalExtension());
		$imagOriginlName = $file->getClientOriginalExtension();
		$logo_name = md5($imagOriginlName).microtime() . '_upload.'. $fileExtr;
		$location = public_path($this->uploadPath);
		$file->move($location,$logo_name);

		$save = new PostJob;
		$save->title = $request->title;
		$save->company_name = $request->company_name;
		$save->location = $request->location;
		$save->logo = $logo_name;
		$save->description = $request->description;

		$save->save();
		return redirect(route('job'));

    }
    public function Editjob($id){
    	$editjob = Postjob::findOrFail($id);
    	return view('admin.posts.job.editjob',compact('editjob'));
    }
    public function Updatejob(Request $request,$id){
    	// dd($request->all());
    	    $this->validate($request, [
		'title'=>'required',
		'company_name'=>'required',
		'location'=>'required',
		'logo'=>'required',
		'description'=>'required',
		'logo'=>'max:3000|mimes:jpeg,png,jpg'
		    ]);
		$update =  PostJob::findOrFail($id);
            if(!isset($update))
                return back();
            if($file= $request->hasFile('logo')){
                $file = $request->file('logo');
                $path =public_path($this->uploadPath);
                $getlogoName = time().'.'.$file->getClientOriginalExtension();
                try {
                    unlink(public_path($this->uploadPath) . $update->logo);

                }catch (\Exception $e){  
                }

        $file->move($path, $getlogoName);
		$update->title = $request->title;
		$update->company_name = $request->company_name;
		$update->location = $request->location;
		$update->logo = $getlogoName;
		$update->description = $request->description;

		$update->save();
		return redirect(route('job'));

    }
    }
    public function Deletejob($id){
    	$deletejob = Postjob::findOrFail($id);
    	try {
    		unlink(public_path($this->uploadPath) . $deletejob->logo);
    	} catch (Exception $e) {	
    	}
    	$deletejob->delete();
    	return back();

    }


      public function Search(Request $request){
     $this->validate($request, ['search' => 'required']);
        $total = Postjob::all()->count();
		$search = $request->get('search');
		$alljob = Postjob::where('title', 'LIKE','%' . $search . '%')->orWhere('company_name', 'LIKE', '%' . $search . '%')->orWhere('location', 'LIKE', '%' . $search . '%')->paginate(3);
			return view('admin.posts.job.alljob', compact('alljob', 'total'));
		
}
}