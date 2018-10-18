<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function despreNoi()
    {
        return view('client.pages.despre_noi');
    }

    public function tarife()
    {
        return view('client.pages.tarife');
    }

    public function contact()
    {
        return view('client.pages.contact');
    }
}
