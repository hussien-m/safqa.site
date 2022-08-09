<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class Cities extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'المدن';

        $data['createRoute']  = route('admin.cities.create');

        $data['cities']   = City::with('country')->latest()->get();

        $data['requestIs']   = url()->current();

        return view('admin.cities.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة مدينة جديدة';

        $data['createRoute']  = route('admin.cities.create');

        $data['requestIs']   = url()->current();

        $data['old_page']    = "الدول";

        $data['countries'] = Country::get();

        return view('admin.cities.create',$data);
    }


    public function store(Request $request)
    {

        City::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.cities.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['createRoute']    = route('admin.cities.create');

        $data['city']           = City::findOrFail($id);

        $data['countries']      = Country::get();

        $data['page_name']      = 'تعديل المدينة';

        $data['old_page']       = " المدن";

        return view('admin.cities.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $city         = City::findOrFail($id);

        $city->name   = $request->name;
        $city->country_id   = $request->country_id;

        $city->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.cities.index');


    }

    public function destroy($id)
    {
        $city= City::findOrFail($id);
        $city->delete();
    }
}
