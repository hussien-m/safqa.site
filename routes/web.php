<?php
use App\Http\Controllers\HomeController;
use App\Models\Deal;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['siteStatus','verifiProfile'])->group(function(){


    Route::get('/', function () {
        return view('welcome');
    });



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('test', [HomeController::class , 'usd']);
    Route::get('var',  [HomeController::class , 'var']);
});

Route::get('complete-profile', function (){

    if(!Auth::user()->profile->verifi){

        return "Plese Complete Profile";
    }
    return redirect()->route('home');

})->name('verifi.profile');

Auth::routes(['verify' => true]);
