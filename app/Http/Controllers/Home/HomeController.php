<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index function

    public function index()
    {
        $data = [
            'title' => 'Bangun Bisnis Anda Dengan BiTrends',
            'page' => 'home',
        ];

        return view('home.index', $data);
    }
}
