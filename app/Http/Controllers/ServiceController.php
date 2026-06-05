<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceProvider;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display a listing of the service providers
    public function index()
    {
        $services = Service::all();


        if (session()->has('admin_email'))
            return view('Admin-layout.viewServices')->with(compact('services'));
        else
            return redirect('/admin');
    }

    // Store a newly created service in storage
    public function storeService(Request $request)
    {        // Create a new service instance
        $service = new Service();

        // Assign values from the request to the service instance
        $service->category_id = $request->category_id;
        $service->service_type = $request->service_type;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->provider_id = $request->provider_id;

        // Save the service instance
        $service->save();

        // Redirect back or to a different route after successful creation
        return redirect('/')->with('success', 'Service has been successfully created!');
    }

    public function storeProviderInfo(Request $request)
    {        // Create a new service instance
        $serviceprvider = new ServiceProvider();

        // Assign values from the request to the service instance
        $serviceprvider->category_id = $request->category_id;
        $serviceprvider->availability = $request->availability;
        $serviceprvider->certi_info = $request->certi;
        $serviceprvider->user_id = $request->user_id;

        // Save the service instance
        $serviceprvider->save();

        // Redirect back or to a different route after successful creation
        return redirect('/')->with('success', 'Service has been successfully created!');
    }

    public function sendCats()
    {
        $Cats = Categories::all();

        if (session()->has('user_type') == "Service Provider") {
            view('User-layout.addService')->with(compact('Cats'));
            return view('User-layout.ServiceProvider')->with(compact('Cats'));
        } else
            return redirect('/');
    }
}
