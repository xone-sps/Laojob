<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }


    public function getlogin(){
    	return view('login.index');
    }
    public function postLogin(Request $request){

        $this->validate($request, [
            'email' => 'required|email|max:191',
            'password' => 'required|min:6|max:191'
        ]);

// $user_data = array(
// 'email' => $request->get('email'),
// 'password' => $request->get('password')
// );
// if(User::attempt($user_data)){
// 	return redirect('/admins/dashboard');
// }else
// {
// 	return back();
// }

        $user = User::where('email', $request->email)->first();
        if(isset($user)){
            $check = User::find($user->id)->userType;
            if($check->typeUser->name == 'super_admin' || $check->typeUser->name == 'admin'){
                return $this->login($request);
            }
        }
        return redirect('/admins/dashboard');
    }
}
