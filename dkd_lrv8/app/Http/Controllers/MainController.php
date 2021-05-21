<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
    //
    function Login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:6|max:20'
        ]);
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();
        if($save){
            return back()->with('success','New User has been successfully added to database'); 
        }else{
           return back()->with('fail','Something went wrong, try again later'); 
        }
    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ]);
        $userInfo = Admin::where('email','=', $request->email)->first();
        if(!$userInfo){
            return back()->with('fail', 'we do not recognize your email address');
        }
        else{
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }
            else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        $req = Admin::all();
        return view('admin.dashboard',compact('req'),$data);
    }
    function settings(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings',$data);
    }
    function profile(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile',$data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff',$data);
    }
    // function index(){
    //     $res =  Admin::select("select * from admins");
    //     return view('admin.dashboard', compact('res'));
    // }
    // function index(){
    //     $data =  ['LoggedUserInfo'=>Admin::select('select * from admins')];
    //     return view('admin.dashboard',$data);
    // }
    // function index(){
    //     $req = Admin::all();
          
    //     return view('admin.dashboard', compact('req'));
    // }
  
   
}
