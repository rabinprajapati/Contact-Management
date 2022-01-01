<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    protected function register(Request $req)
    {
        $req->validate([
            'userName' => 'required|min:3|max:25',
            'userEmail' => 'required|email',
            'userPassword' => 'required|min:4',
        ]);
        $user=new User;
        $user->userName=$req->userName;
        $user->userEmail=$req->userEmail;
        $user->userPassword=hash::make($req->userPassword);
        $user->save();
        $req->session()->put('user',$user);
        return redirect('/');
    }
    protected function login(Request $req)
    {
        $user=User::where(['userEmail'=>$req->userEmail])->first();
        if(!$user || !hash::check($req->userPassword,$user->userPassword))
        {
            return view('/loginError');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    protected function logout(Request $req)
    {
        $req->session('user')->forget('user');
        return redirect('/');
    }
}
