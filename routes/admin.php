<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Admins;
use App\Http\Controllers\Admin\Categories;
use App\Http\Controllers\Admin\DealTargets;
use App\Http\Controllers\Admin\DealTypes;
use App\Http\Controllers\Admin\Settings;
use App\Http\Controllers\Admin\Countries;
use App\Http\Controllers\Admin\Cities;
use App\Http\Controllers\Admin\Regions;
use App\Http\Controllers\Admin\Deals;
use App\Models\Deal;
use Illuminate\Http\Request;

Route::name('admin.')->middleware('activeAdmin')->namespace('Admin')->prefix('admin')->group(function(){

    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login route
        Route::get('/login',[LoginController::class,'login'])->name('login');
        Route::post('/login',[LoginController::class,'processLogin']);


    });

    Route::namespace('Auth')->middleware('auth:admin')->group(function(){

        Route::post('/logout',[LoginController::class,'destroy'])->name('logout');

        //Route::get('/', [Admins::class,'dashboard'])->name('dashboard');
        Route::get('home', [Admins::class,'dashboard'])->name('dashboard');

        Route::get('home2', [Admins::class,'dashboard2'])->name('dashboard2');

        Route::get('settings',[Settings::class,'index'])->name('settings');
        Route::post('settings',[Settings::class,'store'])->name('settings.save');

        Route::get('clear-cache',[Settings::class,'clearCache'])->name('clear.cache');


        Route::post('admin.change-deal-active/{id}',function(Request $request,$id){
           // dd($request->active);
            $deal= Deal::findOrFail($id);
            $deal->active = $request->active ?? 0;
            $deal->save();

            toast('تم تعديل حالة الصفقة','success');
            return back();

        })->name('change-deal-active');

    });

    Route::resource('deal-types',DealTypes::class);

    Route::resource('deal-targets',DealTargets::class);

    Route::resource('categories',Categories::class);

    Route::resource('countries',Countries::class);

    Route::resource('cities',Cities::class);

    Route::resource('regions',Regions::class);

    Route::resource('deals',Deals::class);

});


Route::get('/get-country-city',function (Request $request){
    $country_id = $request->country_id;
    $category = \App\Models\City::where('country_id','=',$country_id)->get();
    return response()->json($category);
});


