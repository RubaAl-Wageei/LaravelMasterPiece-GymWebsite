<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\GymServiceController;
use App\Http\Controllers\PersonalTrainerController;
use App\Http\Controllers\PersonalTrainerServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Website.Home');
});

Route::get('/Gyms', function () {
    return view('Website.Gyms');
});

Route::get('/PersonalTrainers', function () {
    return view('Website.PersonalTrainers');
});

// Route::get('/Products', function () {
//     return view('Website.Product');
// });

Route::get('/About', function () {
    return view('Website.About');
});

// Route::get('/Contact', function () {
//     return view('Website.Contact');
// });

Route::get('/Login', function () {
    return view('Website.Login');
});

Route::get('/Register', function () {
    return view('Website.Register');
});

// Route::get('/ProfileUser', function () {
//     return view('Website.ProfileUser');
// });





//----------------------------------------------------------------------------------------------//

Route::get('/Admin', function () {
    return view('index');
});


Route::get('/Account', function () {
    return view('account');
});


Route::get('/Table', function () {
    return view('Table');
});


Route::get('/CUser', function () {
    return view('CreateUser');
});



Route::resource('/user' , UserController::class);

Route::resource('/category' , CategoryController::class);

Route::resource('/Gym' , GymController::class);

Route::resource('/Trainers' , PersonalTrainerController::class);

Route::resource('/GymServices', GymServiceController::class);

Route::resource('/TrainerServices' , PersonalTrainerServiceController::class);

Route::resource('/Contact' , ContactController::class);
