
    <!-- Start  Head -->
    @include('layouts.frontend.header')
    <!-- End Head -->
    <!-- Section navbar -->
    @include('layouts.frontend.navbar')
    <!-- End Section navbar -->

    <!-- Start Section sidebar -->
        @include('layouts.frontend.sidebar')
    <!-- End Section sidebar -->

    @if(Request::is('/'))
        <!-- Section Our Services  -->
            @include('layouts.frontend.all_deals_type')
        <!-- End Section Our Services  -->

        <!-- Section Search -->
            @include('layouts.frontend.search')
        <!-- End Section Search -->

        <!-- Section How its work -->
            @include('layouts.frontend.itwork')
        <!-- End its Section -->

        <!-- Section FAQ -->
            @include('layouts.frontend.faq')

        <!-- End Section FAQ-->

        <!-- Start Section Guides -->
        @include('layouts.frontend.guide')


    @else
    <div class="container bootstrap snippets bootdeys mt-2 p-3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active"><a href="#">{{$page_name}}</a></li>
            </ol>
        </nav>

        <div class="main-box clearfix">
            @yield('content')
        </div>
    </div>
    @endif


    <!-- Section Footer -->
    @include('layouts.frontend.footer')
    <!-- end Section Footer -->
