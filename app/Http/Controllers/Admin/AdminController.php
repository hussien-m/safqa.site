<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth:admin');

       $data['setting'] = DB::table('settings')->first();

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
