<?php
use App\Http\Controllers\HomeController;
use App\Models\Deal;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::middleware('siteStatus')->group(function(){


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

})->middleware('verified')->name('verifi.profile');




Route::get('new-dash',  [HomeController::class , 'dash']);
