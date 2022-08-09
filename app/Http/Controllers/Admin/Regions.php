<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\DealTarget;
use App\Models\DealType;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Regions extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['page_name']    = 'المنطقة';

        $data['createRoute']  = route('admin.regions.create');

        $data['regions']   =  DB::table('regions')
                                ->join('cities', 'regions.city_id', '=', 'cities.id')
                                ->join('countries', 'regions.country_id', '=', 'countries.id')
                                ->select('regions.*', 'countries.name AS country_name','cities.name AS city_name')
                                ->latest()
                                ->get();


        $data['requestIs']   = url()->current();

        return view('admin.regions.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة مدينة جديدة';

        $data['createRoute']  = route('admin.regions.create');

        $data['requestIs']   = url()->current();

        $data['old_page']    = "الدول";

        $data['countries'] = Country::whereHas('cities')->get();

        return view('admin.regions.create',$data);
    }


    public function store(Request $request)
    {

        Region::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.regions.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['createRoute']    = route('admin.cities.create');

        $data['region']           = Region::findOrFail($id);

        $data['countries']           = Country::whereHas('cities')->get();

        $data['page_name']      = 'تعديل المدينة';

        $data['old_page']       = " المدن";

        return view('admin.regions.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $region               = Region::findOrFail($id);

        $region->name         = $request->name;

        $region->country_id   = $request->country_id;

        $region->city_id   = $request->city_id;

        $region->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.regions.index');


    }

    public function destroy($id)
    {
        $region= Region::findOrFail($id);
        $region->delete();
    }
}
