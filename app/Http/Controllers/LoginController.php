<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin-layout.login');
    }

    public function auth(Request $request)
    {
        
            $user = Admin::where([
                "email" => $request->email,
                "password" => $request->password
            ])->first();


            if($user)
            {
                    $request->session()->put('admin_id',$user->admin_id);
                    $request->session()->put('admin_first_name',$user->first_name);
                    $request->session()->put('admin_last_name',$user->last_name);
                    $request->session()->put('admin_email',$user->email);
                    return redirect('/dashboard');
            }
            else
                return redirect('/admin');
    }

   
}
