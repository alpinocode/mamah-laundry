<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function about():View
    {
        return view('about');
    }
}
