@extends('layouts.site')
@section('page_name') الدول @endsection
@section('content')

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">

                    <a href="{{ route('admin.countries.create') }}" class="btn btn-success">اضف دولة</a>
                    <h4 class="card-title" style="margin: 1px">الدول</h4>
                </div>

                <div class="card-content collpase show">
                    <div class="card-body">

                        @if (Session::has('success'))
                            <div class="alert alert-block alert-success">
                                <i class=" fa fa-check cool-green "></i>
                                {{ nl2br(Session::get('success')) }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الدولة</th>
                                        <th>حدث</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countries as $key => $country)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $country->country_name }}</td>
                                            <td>
                                                <form action="{{ route('admin.countries.destroy', $country->id) }}">
                                                    <a href="{{ route('admin.form.add.state', $country->id) }}"
                                                        class="btn btn-primary btn-xs">اضف مدينة</a>
                                                    <a href="{{ route('admin.countries.edit', $country->id) }}"
                                                        class="btn btn-primary btn-xs">تعديل</a>

                                                    <button type="submit" class="btn btn-danger btn-xs"
                                                        onclick="return confirm('هل تريد حذف المدير')">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">المدن</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        @if (Session::has('success_city'))
                            <div class="alert alert-block alert-success">
                                <i class=" fa fa-check cool-green "></i>
                                {{ nl2br(Session::get('success_city')) }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المنطقة</th>
                                        <th>اسم الدولة</th>
                                        <th>حدث</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($states as $key => $state)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $state->state_name }}</td>
                                            <td>{{ $state->countries->country_name }}</td>
                                            <td>
                                                <form action="{{ route('admin.countries.destroy', $state->id) }}">
                                                    <a href="{{ route('admin.form.add.city', $state->id) }}"
                                                        class="btn btn-primary">اضف منطقة</a>
                                                    <a href="{{ route('admin.country.add.state', $state->id) }}"
                                                        class="btn btn-primary">تعديل</a>

                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('هل تريد حذف المدير')">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            @if (Session::has('success_state'))
                <div class="alert alert-block alert-success">
                    <i class=" fa fa-check cool-green "></i>
                    {{ nl2br(Session::get('success_state')) }}
                </div>
            @endif
            <div class="col-md-6">

            </div>
            <div class="table-responsive">
                <div class="card-header">
                    <h4 class="card-title">المناطق</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المدينة</th>
                            <th>اسم المنطقة</th>
                            <th>اسم الدولة</th>
                            <th>حدث</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $key => $city)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $city->city_name }}</td>
                                <td>{{ $city->states->state_name }}</td>
                                <td>{{ $city->countries->country_name }}</td>
                                <td>
                                    <form action="{{ route('admin.countries.destroy', $country->id ) }}">

                                        <a href="{{ route('admin.countries.create', $country->id) }}"
                                            class="btn btn-primary">تعديل</a>

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('هل تريد حذف المدير')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
