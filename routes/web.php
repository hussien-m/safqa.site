<?php
use App\Http\Controllers\HomeController;
use App\Models\Deal;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::middleware('siteStatus')->group(function(){


 Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
 Route::get('/home', [HomeController::class, 'index'])->name('home');

});



Route::get('complete-profile', function (){

    if(!Auth::user()->profile->verifi){

        return "Plese Complete Profile";
    }
    return redirect()->route('home');

})->middleware('verified')->name('verifi.profile');

Route::get('deal-type/{type}',[HomeController::class,'getDealFromType'])->name('deal.type');
Route::get('deal/{title}',[HomeController::class,'showDeal'])->name('show.deal');

Route::get('test', function(){

    return view('layouts.inc');
});
