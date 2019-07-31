<?php

namespace App\Http\Controllers;

use\App\PostJob;
use\App\Province;
use\App\District;
use\DB;
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
    	return redirect()->route('job.all');

    }


      public function Search(Request $request){
     $this->validate($request, ['search' => 'required']);
        $total = Postjob::all()->count();
		$search = $request->get('search');
		$alljob = Postjob::where('title', 'LIKE','%' . $search . '%')->orWhere('company_name', 'LIKE', '%' . $search . '%')->orWhere('location', 'LIKE', '%' . $search . '%')->paginate(3);
			return view('admin.posts.job.alljob', compact('alljob', 'total'));
		
}

public function getProvince(){
    $provinces = Province::all();

    return view('admin.posts.province.index', compact('provinces'));
}
public function SaveProvince(Request $request){
    $this->validate($request, [
    'province_name' => 'required'
    ]);
    $save = new Province();
    $save ->name = $request->province_name;
    $save->save();
    return back();

}
public function EditProvince($id){
    $edit = Province::find($id);
    return view('admin.posts.province.index',compact('edit'));
}
public function UpdateProvince(Request $request , $id){

    $this->validate($request ,[
    'province_name' => 'required'
    ]);
$update = Province::find($id);
$update ->name = $request->province_name;
$update->save();
return redirect(route('province.get'));

}
public function DeleteProvince($id){

$delete = Province::find($id);
$delete->delete();
return back();

}
public function getDistrict(){

   $provinces = Province::all();
   $districts = District::all();
    return view('admin.posts.district.index',compact('provinces','districts'));

}
public function SaveDistrict(Request $request){
 $this->validate($request, [
  'district_name' => 'required',
  'province_name' => 'required'

 ]);
 $save = new District();
 $save ->name = $request->district_name;
 $save ->province_id = $request->province_name;
 $save ->save();
 return back();
}




public function getFreelancer(){
    $provinces = Province::all();
    return view('admin.posts.freelancer.index',compact('provinces'));
}
// public function Fetch(Request $request){
//     $id=$request->get('select');
//     $result=array();
//     $query = Province::all()->join('District','province_id','=','District.province_id')
//     ->select('District.name')->where('provinces.id',$id)->groupBy('districts.name')->get();
//     $output='<option value="">Select District</option>';

//     foreach ($query as $row) {
//        $output .='<option value="'.$row->name.'">'.$row->name.'</option>';
//     }
//     echo $output;

// }

public function Fetch(Request $request){
    $id=$request->get('select');
    $result=array();
    $query = DB::table('provinces')->join('districts','provinces.id','=','districts.province_id')
    ->select('districts.name')->where('provinces.id',$id)->groupBy('districts.name')->get();
    $output='<option value="">Select District</option>';

    foreach ($query as $row) {
       $output .='<option value="'.$row->name.'">'.$row->name.'</option>';
    }
    echo $output;

}

}