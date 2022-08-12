    <!-- Section Our Services  -->
    <section id="header_saphqa">
        <div class="item shadow">
            <img src="{{asset('frontend/assets/images/banner-1.jpg')}}" class="img-fluid" alt="">
            <div class="caption">
                <b><h1>منصة صفقة دوت كوم </h1></b>
                <p>
                    أنجز صفقاتك بكل سهولة وأمان
                </p>
                <a href="#" class="btn btn-primary">ابدأ الآن</a>
            </div>
        </div>
    </section>
    <div class="zt-container">

        <section class="services py-5">
            <h2 class="title text-center sec_title">أنواع الصفقات
            </h2>
            <div class="row pt-3">
                @foreach ( $types as $type)
                    <div class="col-md-4">
                        <div class="service_item">
                            <a href="{{route('deal.type',$type->type)}}" class="service_item_link shadow">
                                <img src="{{asset('images/deals_type/'.$type->image)}}" class="img-fluid service_item_img" alt="{{$type->type}}">
                                <div class="service_item_title"><p>{{$type->type}}</p></div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </div>
    <!-- End Section Our Services  -->
