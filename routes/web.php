<?php

use App\Http\Controllers\Farmer\FarmerController;
use App\Http\Controllers\Farmer\FarmerProfileController;
use App\Http\Controllers\SuperAdmin\CompanyRequest;
use App\Http\Controllers\SuperAdmin\ProfileController;
use App\Http\Controllers\SuperAdmin\RegisterController;
use App\Models\CattleRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('log_out', function (){
    Auth::logout();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// -------------------------------------------------------------------- Super Admin --------------------------------------------------------------------


Route::middleware(['auth', 'super.admin'])->prefix('superAdmin')->group(function () {


//    Route::get('admin-profile', [\App\Http\Controllers\SuperAdmin\SuperAdminController::class,'profile']);

//    ----------------------------- Profile -----------------------------

    Route::resource('profile', ProfileController::class);

//    ----------------------------- Profile -----------------------------


//    ----------------------------- Register Company/NGO/Bank -----------------------------

    Route::get("register_company", [RegisterController::class, "index"])->name("sp_register_company");

//    ----------------------------- Register Company/NGO/Bank -----------------------------

//    ----------------------------- Company Request -----------------------------

    Route::get("company_request", [CompanyRequest::class, "index"])->name("sp.company_request");

//    ----------------------------- Company Request -----------------------------


//    ----------------------------- History -----------------------------

    Route::get("history", [CompanyRequest::class, "history"])->name("sp.user_history");

//    ----------------------------- History -----------------------------

});

// -------------------------------------------------------------------- Super Admin --------------------------------------------------------------------

// -------------------------------------------------------------------- Farmer --------------------------------------------------------------------


Route::middleware(['auth','farmer'])->prefix('farmer')->group(function (){
    Route::get('test', function (){
        return "Farmer Test";
    });

//    ----------------------------- Dashboard -----------------------------

    Route::get('dashboard',[FarmerController::class,'index']);

//    ----------------------------- Dashboard -----------------------------

//    -------------------------- Farmer Profile -----------------------------

    Route::resource('farmer_profile', FarmerProfileController::class);

//    -------------------------- Farmer Profile -----------------------------

    //    -------------------------- Cattle Registration -----------------------------

    Route::resource('cattle_register', CattleRegistration::class);

//    -------------------------- Cattle Registration -----------------------------



});

// -------------------------------------------------------------------- Farmer --------------------------------------------------------------------


