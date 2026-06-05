<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMaster;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Hash; // Import Hash facade for password hashing

class UserController extends Controller
{
    public function index()
    {
        $users = UserMaster::all();
        $serviceProvider = ServiceProvider::all();

        return view('admin-layout.viewUser')->with(compact('users', 'serviceProvider'));
    }

    public function loginUser(Request $request)
    {
        $users = UserMaster::where('email', $request->email)->first();

        if ($users && $request->password == $users->password) {
            $request->session()->put('user_id', $users->user_id);
            $request->session()->put('first_name', $users->first_name);
            $request->session()->put('last_name', $users->last_name);
            $request->session()->put('email', $users->email);
            $request->session()->put('user_type', $users->user_type);
            //dd($users->toArray());

            //$serviceProvider = ServiceProvider::where('user_id', $users->user_id)->first();

            if ($users->user_type == "Service Provider") {
                $serviceProvider = ServiceProvider::where('user_id', $users->user_id)->first();
                //dd($serviceProvider->toArray());
                if ($serviceProvider) {
                    $request->session()->put('provider_id', $serviceProvider->provider_id);
                } else {
                    echo ("No ServiceProvider found for this user");
                }
            }
            //dd($serviceProvider->toArray());

            return redirect('/');
        } else {
            return redirect('/RegisterUser');
        }
    }

    public function store(Request $request)
    {
        // Check if the email already exists
        $existingUser = UserMaster::where('email', $request->email)->first();

        if ($existingUser) {
            // Email already exists, return with a message or handle accordingly
            return redirect()->back()->with('error', 'Email Already Exists');
        }

        // Create a new UserMaster instance
        $newUser = new UserMaster;

        // Set user attributes
        $newUser->first_name = $request->first_name;
        $newUser->last_name = $request->last_name;
        $newUser->email = $request->email;
        $newUser->password = $request->password; // Hash the password
        $newUser->phone_number = $request->phone_number;
        $newUser->user_type = $request->user_type;

        // Save the new user
        $newUser->save();

        // Set session data based on user type
        if ($request->user_type == "Service Provider") {
            $request->session()->put('user_id', $newUser->user_id); // Assuming user_id is the primary key
            $request->session()->put('user_type', $newUser->user_type);
            return redirect('/ServiceProvider');
        } else {
            return redirect('/');
        }
    }


    // public function edit($id)
    // {
    //     $user = UserMaster::findOrFail($id);
    //     return view('admin-layout.editUser', compact('user'));
    // }
    public function edit($id)
    {
        $users = UserMaster::find($id);
        if (is_null($users)) {
            return redirect()->route('viewUser');
        }
        return view('admin-layout.editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $users = UserMaster::find($id);

        // Update user data based on the form input
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;
        $users->phone_number = $request->phone_number;
        $users->user_type = $request->user_type;
        $users->isActive = $request->isActive;

        $users->save();

        return redirect('/viewUser')->with('success', 'User updated successfully');
    }
}
