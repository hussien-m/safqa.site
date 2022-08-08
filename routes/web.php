<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('siteStatus')->group(function(){



    Route::get('/', function () {
        return view('welcome');
    });



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('test', [HomeController::class , 'usd']);
    Route::get('var',  [HomeController::class , 'var']);
});

Auth::routes();
