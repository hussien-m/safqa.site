@extends('layouts.site')

@section('page_name') اضافة دولة @endsection
@section('content')


    @if($errors->any())
        <div class="alert alert-block alert-danger">
            <i class=" fa fa-check cool-green "></i>
            {{ implode('', $errors->all('<div>:message</div>')) }}
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-block alert-success">
            <i class=" fa fa-check cool-green "></i>
            {{ nl2br(Session::get('success')) }}
        </div>
    @endif
    <div class="col-md-12">
        <div class="card" style="height: 1063.6px;">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <form class="form" action="{{route('admin.countries.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i>اضف دولة  </h4>
                            <div class="row">
                                <div class="form-group col-md-6 mb-2">
                                    <label for="projectinput1">اسم الدولة</label>
                                    <input type="text"class="form-control" placeholder="اسم  المنطقة"
                                           name="country_name" value="{{old('country_name')}}">
                                </div>
                            </div>

                        </div>
                        <div class="form-actions top">
                            <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
