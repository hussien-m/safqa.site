<?php

namespace App\Http\Controllers\Admin;

use App\Models\DealTarget;
use App\Models\DealType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealTargets extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'اهداف الصفقات';

        $data['createRoute']  = route('admin.deal-targets.create');

       // $data['deal_targets']   = DealTarget::with('type')->latest()->get();

        $data['deal_targets']   = DB::table('deal_targets')
                                     ->join('deal_types' ,'deal_targets.deal_type_id', '=' ,'deal_types.id' )
                                     ->select('deal_targets.*','deal_types.deal_type')
                                     ->get();

        $data['requestIs']   = url()->current();

        return view('admin.deal_targets.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة هدف جديد';

        $data['createRoute']  = route('admin.deal-types.create');

        //$data['deal_types']   = DealTarget::latest()->get();
        $data['types']           = DealType::get();
        $data['requestIs']   = url()->current();

        $data['old_page']    = "أهداف الصفقات";


        return view('admin.deal_targets.create',$data);
    }


    public function store(Request $request)
    {

        DealTarget::create([
            'target_deal' => $request->name,
            'user_pay'    => $request->user_pay,
            'deal_type_id'=> $request->deal_type_id,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.deal-targets.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['createRoute']    = route('admin.deal-targets.create');

        $data['target']         = DealTarget::findOrFail($id);
        $data['types']           = DealType::get();

        $data['page_name']      = 'تعديل اهداف الصفقة';

        $data['old_page']       = "اهداف الصفقات";


        return view('admin.deal_targets.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $target= DealTarget::findOrFail($id);

        $target->target_deal   = $request->name;
        $target->user_pay      = $request->user_pay;
        $target->deal_type_id  = $request->deal_type_id;

        $target->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.deal-targets.index');


    }

    public function destroy($id)
    {

       $target= DealTarget::findOrFail($id);
       $target->delete();
    }
}
