<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainAdminController extends Controller
{
    public function home()
    {
        die('cacat');
    }

    public function login(Request $request)
    {
        if($request->isMethod('get')){
            return view('admin.login',['show_navigation' => false]);
        }
    }
}
