<?php


namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;

class Admins extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dashboard(Request $request)
    {
        $data['requestIs'] = $request->is('admin/home');
        $data['page_name'] = "الرئيسية";
        return view('admin.dashboard',$data);
    }

    public function dashboard2()
    {
        $data['page_name']='عرض المستخدمين';
        $data['old_page_name']='المستخدمين';
        $data['countries'] = Country::all();
        return view('admin.admin.index2',$data);
    }

    public function index()
    {
        return view('admin.admin.index2');
    }
}
