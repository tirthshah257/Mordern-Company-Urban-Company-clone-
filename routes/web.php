<?php

use App\Http\Controllers\AcceptanceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;

use App\Models\Categories;

Route::get('/admin',[LoginController::class,'index']);

Route::post('/validate',[LoginController::class,'auth']);

Route::get('/viewUser',[UserController::class,'index']);
Route::post('/viewUser',[UserController::class,'index']);

Route::get('/update_user/{id}', [UserController::class, 'edit'])->name('admin-layout.editUser');

Route::post('/update_user/{id}', [UserController::class, 'update'])->name('admin-layout.updateUser');

Route::post('/register',[UserController::class,'store']);

Route::post('/loginUser',[UserController::class,'loginUser']);

Route::get('/dashboard',[DashboardController::class,'getdashboard']);

Route::get('/viewServices',[ServiceController::class,'index']);

Route::get('/viewBookings',[BookingController::class,'index']);


Route::post('/postServices',[ServiceController::class,'storeService']);

Route::post('/postProviderInfo',[ServiceController::class,'storeProviderInfo']);

Route::get('/ServiceProvider',[ServiceController::class,'sendCats']);

Route::get('/',function(){
    return view('User-layout.index');
});

Route::get('/addServices',function(){
    
    $Cats = Categories::all();
    return view('User-layout.addService')->with(compact('Cats'));
});

// Route::get('/index',function(){
//     return view('User-layout.Content');
//});



Route::get('/services',[CategoriesController::class,'index']);

Route::get('/viewCategory',[CategoriesController::class,'viewCats']);

Route::post('/addCategory',[CategoriesController::class,'addCats']);

Route::post('/submit_booking',[BookingController::class,'BookNow']);

Route::get('/myBookings',[BookingController::class,'userBookings']);

Route::get('/AcceptServices',[AcceptanceController::class,'index']);


Route::get('/about',function(){
    return view('User-layout.about');
});

Route::get('/contact',function(){
    return view('User-layout.contact');
});

Route::get('/loginButton',function(){
    return view('User-layout.loginUser');
});

Route::get('/RegisterUser',function(){
    return view('User-layout.RegisterUser');
});


Route::get('/logout',function(){
    session()->forget('first_name');
    session()->forget('last_name');
    session()->forget('admin_id');
    session()->forget('email');
    return redirect('/');
});

Route::get('/logoutButton',function(){
    session()->forget('user_id');
    session()->forget('first_name');
    session()->forget('last_name');
    session()->forget('email');
    session()->forget('user_type');
    return redirect('/');
});






// routes/web.php






Route::get('/Accept_service/{id}', [AcceptanceController::class, 'Accept'])->name('User-layout.AcceptUser');
Route::post('/Done/{id}', [AcceptanceController::class, 'update'])->name('User-layout.AcceptCos');

Route::get('/edit_Booking/{id}', [BookingController::class, 'edit'])->name('User-layout.editBooking');

Route::post('/update_Booking/{id}', [BookingController::class, 'update'])->name('User-layout.updateBooking');

