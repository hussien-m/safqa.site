<?php

namespace App\Http\Controllers\Admin;

use App\Models\DealType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DealTypes extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'انواع الصفقات';

        $data['createRoute']  = route('admin.deal-types.create');

        $data['deal_types']   = DealType::latest()->get();

        $data['requestIs']   = url()->current();

        return view('admin.deal_types.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة نوع جديد';

        $data['createRoute']  = route('admin.deal-types.create');

        $data['deal_types']   = DealType::latest()->get();

        $data['requestIs']   = url()->current();

        $data['old_page']    = "أنواع الصفقات";

        return view('admin.deal_types.create',$data);
    }


    public function store(Request $request)
    {
        $request->except('_token','_method');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->user_name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images".DIRECTORY_SEPARATOR."deals_type"), $imageName);
            $request->image = $imageName;
        }

        DealType::create([
            'deal_type' => $request->name,
            'image' => $request->image,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.deal-types.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['createRoute']  = route('admin.deal-types.create');

        $data['type']         = DealType::findOrFail($id);

        $data['page_name']    = 'تعديل نوع الصفقة';

        $data['old_page']     = "أنواع الصفقات";

        return view('admin.deal_types.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $type= DealType::findOrFail($id);
        $image = public_path('images'.DIRECTORY_SEPARATOR.'deals_type'.DIRECTORY_SEPARATOR.$type->image);

        if ($request->hasFile('image')) {

            if(File::exists($image)){
                File::delete($image);
             }

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->user_name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/deals_type"), $imageName);
            $request->image = $imageName;
            $type->image=$imageName;

        }


        $type->deal_type=$request->name;

        $type->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.deal-types.index');


    }

    public function destroy(Request $request,$id)
    {

       $type= DealType::findOrFail($id);
       $image = public_path('images'.DIRECTORY_SEPARATOR.'deals_type'.DIRECTORY_SEPARATOR.$type->image);

       if(File::exists($image)) {
        File::delete($image);

        }

        $type->delete();
    }
}
