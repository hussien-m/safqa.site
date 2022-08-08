<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Admins;
use App\Http\Controllers\Admin\Categories;
use App\Http\Controllers\Admin\DealTargets;
use App\Http\Controllers\Admin\DealTypes;
use App\Http\Controllers\Admin\Settings;
use Illuminate\Http\Request;

Route::name('admin.')->middleware('activeAdmin')->namespace('Admin')->prefix('admin')->group(function(){

    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login route
        Route::get('/login',[LoginController::class,'login'])->name('login');
        Route::post('/login',[LoginController::class,'processLogin']);


    });

    Route::namespace('Auth')->middleware('auth:admin')->group(function(){

        Route::post('/logout',[LoginController::class,'destroy'])->name('logout');

        Route::get('home', [Admins::class,'dashboard'])->name('dashboard');

        Route::get('home2', [Admins::class,'dashboard2'])->name('dashboard2');

        Route::get('settings',[Settings::class,'index'])->name('settings');
        Route::post('settings',[Settings::class,'store'])->name('settings.save');

        Route::get('clear-cache',[Settings::class,'clearCache'])->name('clear.cache');




    });

    Route::resource('deal-types',DealTypes::class);
    Route::resource('deal-targets',DealTargets::class);
    Route::resource('categories',Categories::class);

});


Route::get('/get-company-category',function (Request $request){
    $company_id = $request->company_id;
    $category = \App\Models\State::where('country_id','=',$company_id)->get();
    return response()->json($category);
});
