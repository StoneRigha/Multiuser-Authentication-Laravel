<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //index function
    public function index(){
        $role = Auth::user()->role;

        if($role==1){
            return view('admin');
        }
        if($role==2){
            return view('distributor');
        }
        else{
            return view('dashboard');
        }
    }
    // add seller to the DB to make a seller account
    public function addSeller(Request $request){
        $data = new user;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='2';

        $data->save();
        return redirect()->back();
    }
}
