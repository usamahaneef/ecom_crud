<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    function login (Request $req){
        //get data it is working or not 1st step
        // return $req->input();
        $user = user::where(['email'=>$req->email])->first();
        if (!$user || !Hash::check($req->password,$user->password))
        {
            return "Username Or Password Not Matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function index(){
        return view('dashboard');
    }
}
