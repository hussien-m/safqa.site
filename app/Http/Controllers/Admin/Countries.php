<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\DealTarget;
use App\Models\DealType;
use Illuminate\Http\Request;

class Countries extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'الدول';

        $data['createRoute']  = route('admin.countries.create');

        $data['countries']   = Country::latest()->get();

        $data['requestIs']   = url()->current();

        return view('admin.countries.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة دولة جديدة';

        $data['createRoute']  = route('admin.countries.create');

        $data['requestIs']   = url()->current();

        $data['old_page']    = "الدول";

        return view('admin.countries.create',$data);
    }


    public function store(Request $request)
    {

        Country::create([
            'name' => $request->name,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.countries.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['createRoute']    = route('admin.countries.create');

        $data['country']         = Country::findOrFail($id);


        $data['page_name']      = 'تعديل الدولة';

        $data['old_page']       = " الدول";

        return view('admin.countries.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $country= Country::findOrFail($id);

        $country->name   = $request->name;

        $country->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.countries.index');


    }

    public function destroy($id)
    {
        $country= Country::findOrFail($id);
        $country->delete();
    }
}
