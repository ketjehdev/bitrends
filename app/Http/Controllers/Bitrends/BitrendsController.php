<?php

namespace App\Http\Controllers\Bitrends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BitrendsController extends Controller
{
    // bitrends function
    public function bitrends()
    {
        $data = [
            'title' => 'Cari Trend Bisnis Anda Disini',
            'page' => 'bitrends',
        ];

        return view('bitrends.index', $data);
    }
}
