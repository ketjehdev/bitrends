<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    // ecommerce function
    public function ecommerce()
    {
        $data = [
            'title' => 'Bangun Toko Online Anda',
            'page' => 'ecommerce',
        ];

        return view('ecommerce.index', $data);
    }
}
