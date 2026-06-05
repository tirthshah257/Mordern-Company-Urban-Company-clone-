<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $Cats = Categories::all();
        $services = Service::all();
        $user = User::all();

        
        
       return view('User-layout.services')->with(compact('services','Cats','user'));
    }

    public function viewCats()
    {
        $Cats = Categories::all();
        if(session()->has('admin_email'))
        return view('admin-layout.viewCategory')->with(compact('Cats'));
        else
            return redirect('/admin');
               
       
    }
    public function addCats(Request $request)
    {
        $Cats = new Categories;

        $Cats->category_name = $request->category_name;  
        
        $Cats->save();             
       return redirect('/viewCategory');
    }
}
