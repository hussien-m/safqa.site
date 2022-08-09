<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categories extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_name']    = 'التصنيفات';

        $data['createRoute']  = route('admin.categories.create');

        $data['categories']   = DB::table('categories')
                                    ->select('categories.*')
                                    ->get();


        $data['requestIs']   = url()->current();

        return view('admin.categories.index',$data);
    }


    public function create()
    {
        $data['page_name']    = 'اضافة تصنيف جديد';

        $data['createRoute']  = route('admin.categories.create');

        $data['requestIs']   = url()->current();

        $data['old_page']    = "التصنيفات";

        $data['categories']   = DB::table('categories')
                                    ->select('categories.*')
                                    ->get();

        return view('admin.categories.create',$data);
    }


    public function store(Request $request)
    {

        Category::create([
            'name' => $request->name,
            'parent_id'    => $request->parent_id,
        ]);

        toast('تمت الاضافة بنجاح','success');
        return redirect()->route('admin.categories.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['category']        = Category::findOrFail($id);

        $data['categories']      = Category::get();

        $data['createRoute']     = route('admin.categories.create');

        $data['page_name']       = 'تعديل التصنيف';

        $data['old_page']        = "التصنيفات";

        return view('admin.categories.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $category= Category::findOrFail($id);

        $category->name           = $request->name;
        $category->parent_id      = $request->parent_id;

        $category->save();

        toast('تمت التعديل بنجاح','success');
        return redirect()->route('admin.categories.index');


    }

    public function destroy($id)
    {
       $category= Category::findOrFail($id);

       $category->delete();
    }
}
