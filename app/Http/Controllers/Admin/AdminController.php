<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth:admin');

       view()->composer('*', function ($view) {

        $setting = Setting::first();
        view()->share('setting',$setting);

        $view->with([
            'setting'     => $setting,
        ]);
    });

    }

    public function home()
    {
        return view('admin.home');
    }
}
