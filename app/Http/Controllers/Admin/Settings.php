<?php


namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class Settings extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['createRoute']  = route('admin.settings');
        $data['settings'] = Setting::first();
        $data['page_name']='عرض الاعدادات';
        $data['requestIs']   = url()->current();
        return view('admin.setting.index',$data);
    }

    public function store(Request $request)
    {
       $settings =  $request->validate([
            'site_name'             =>'required',
            'site_status'           =>'required',
            'message_site_status'   =>'required',
            'meta_tags'             =>'required',
            'meta_description'      =>'required',
            'facebook'              =>'required',
            'tiwtter'               =>'required',
            'instagram'             =>'required',
        ]);

        DB::table('settings')->update($settings);
        toast('تم حفظ الاعدادت','success');
        return redirect()->route('admin.settings');

    }

    public function clearCache()
    {
        Artisan::call('optimize');
        Artisan::call('optimize:clear');
        return response()->json(['response'=>'success'],200);
    }

}
