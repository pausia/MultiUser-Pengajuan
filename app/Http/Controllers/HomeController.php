<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{   
    public function index(){
        return view('welcome');
    }
    public function redirects(){
        $role=Auth::user()->role;

        if ($role=='0') {
            return view('admin.home');
        }
        if ($role=='2') {
            return view('seller');
        }
        else {
            return view('dashboard');
        }
    }
    public function addseller(Request $request){
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password) ;
        $data->role='2';
        $data->save();
        Alert::success('User Addeed Successfully','We have added product to the cart');
        return redirect()->back();
    }
}
