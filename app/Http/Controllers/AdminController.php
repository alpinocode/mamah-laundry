<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showAdmin(): View
    {
        return view('admin.adminHome');
    }

    public function schedule(): View
    {
        $services = Services::with('user')->get();

        return view('admin.adminService', compact('services'));
    }
}
