<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the user list page
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.users.index');
    }
}
