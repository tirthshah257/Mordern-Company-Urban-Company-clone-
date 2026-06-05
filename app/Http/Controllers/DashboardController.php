<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getdashboard()
    {
        if(session()->has('admin_email'))
            return view('admin-layout.header');
        else
            return redirect('/admin');
    }
}
