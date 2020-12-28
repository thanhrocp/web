<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display the system login page
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle system login
     * 
     * @param Illuminate\Http\Request $request
     * @return response
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials, true)) {
            return redirect('/users');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Exit the login session
     * 
     * @return response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
