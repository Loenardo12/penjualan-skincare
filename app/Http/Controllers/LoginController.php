<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Perbaikan di sini

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
             return $this->redirectBasedOnRole();
        } else {
            return view('admin');
        }
    }

    public function actionlogin(Request $request)
    {
       $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return $this->redirectBasedOnRole();
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    private function redirectBasedOnRole()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/admin');  // Admin dashboard
        } elseif ($user->role == 'user') {
            return redirect('/dashboard');  // User dashboard
        } else {
            Auth::logout();
            return redirect('/')->withErrors(['error' => 'Role tidak valid!']);
        }
    }
}
