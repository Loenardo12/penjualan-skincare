<?php

namespace App\Http\Controllers;



use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilregistrasi(){
        return view('registeruser');
    }
    function submitregistrasi(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'password' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect('loginuser');
    }
    function tampillogin(){
        return view('login.tampil');
    }
    function submitlogin(Request $request){
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
}
