<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home function
    public function home()
    {
        $data = [
            'title' => 'Bangun Bisnis Anda Dengan BiTrends',
            'page' => 'home',
        ];

        return view('home.index', $data);
    }
}
