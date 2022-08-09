<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Deal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Deals extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'الصفقات';

        $data['createRoute']  = route('admin.deals.create');

        //$data['deals']   = Deal::with(['type','target'])->latest()->get();
        //$data['deals']   = Deal::latest()->get();


        $data['deals']  = DB::table('deals')
            ->join('deal_types', 'deals.deal_type_id', '=', 'deal_types.id')
            ->join('deal_targets', 'deals.deal_target_id', '=', 'deal_targets.id')
            ->select('deals.*', 'deal_types.deal_type','deal_targets.target_deal')
            ->latest()
            ->get();

        $data['requestIs']   = url()->current();

        return view('admin.deals.index',$data);
    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }

}
