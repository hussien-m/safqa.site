@extends('welcome')

@section('styles')

@endsection

@section('content')

    <div class="row">
        @foreach ( $deals as $deal )
        <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
            <div class="guide_item p-0">
                <div class="p-3 border-bottom">
                    <div class="guide_item_img">
                        <a href="{{route('show.deal',$deal->title)}}">
                            <img src="{{asset('images/deal_images/'.$deal->image)}}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <a href="{{route('show.deal',str_replace(' ','-',$deal->title))}}" class="guide_item_content pt-2 d-block">{{$deal->title}}</a>
                    <ul>
                        <li><i class="fa fa-user"></i> {{$deal->user_name}}</li>
                        <li><i class="fa fa-money"></i> {{ Currency::format($deal->price)}}</li>
                        <li><i class="fa fa-info"></i> {{ $deal->price_condition}}</li>
                    </ul>

                </div>
                <div class="d-flex justify-content-between align-items-center p-2 text-primary">
                    <div class="category">
                        <span class="fa fa-bookmark"></span>
                        <small><a href="search?cat_id=2">{{$deal->target_deal}}</a></small>
                    </div>
                    <div class="city">
                        <span class="fa fa-map-marker"></span>
                        <small> <a href="search?country_id=1">{{$deal->country_name}}</a> , <a href="#">{{$deal->city_name}} </a> , <a
                                href="search?city_id=2"> {{$deal->region_name}}</a></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
            <div class="guide_item p-0">
                <div class="p-3 border-bottom">
                    <div class="guide_item_img">
                        <a href="#">
                            <img src="{{asset('images/deal_images/'.$deal->image)}}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <a href="#" class="guide_item_content pt-2 d-block">{{$deal->title}}</a>
                    <ul>
                        <li><i class="fa fa-user"></i> {{$deal->user_name}}</li>
                        <li><i class="fa fa-money"></i> {{ Currency::format($deal->price)}}</li>
                        <li><i class="fa fa-info"></i> {{ $deal->price_condition}}</li>
                    </ul>

                </div>
                <div class="d-flex justify-content-between align-items-center p-2 text-primary">
                    <div class="category">
                        <span class="fa fa-bookmark"></span>
                        <small><a href="search?cat_id=2">{{$deal->target_deal}}</a></small>
                    </div>
                    <div class="city">
                        <span class="fa fa-map-marker"></span>
                        <small> <a href="search?country_id=1">{{$deal->country_name}}</a> , <a href="#">{{$deal->city_name}} </a> , <a
                                href="search?city_id=2"> {{$deal->region_name}}</a></small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>

@stop

@section('scripts')

@endsection
