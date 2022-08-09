<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Deal;
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

        $data['deals']   = Deal::latest()->get();

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
