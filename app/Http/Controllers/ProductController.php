<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function product():View
    {
        return view('product');
    }
}
