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

       $data['setting'] = Setting::first();

       view()->composer('*', function ($view) use ($data) {

            view()->share('data',$data);

            $view->with($data);

        });

    }

    public function home()
    {
        return view('admin.home');
    }
}
