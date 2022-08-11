<body class="saphqa-header-visible saphqa">
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- End Overlay -->
    <!-- Start Loading -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loading -->
    <!-- Scroll To Top  -->
    <div class="scroll_top">
        <i class="fa fa-chevron-up"></i>
    </div>
    <!-- Scroll To Top  End -->
    <!-- Section Header -->
    <section id="header_logo" class="unSticky">
        <div class="zt-container">
            <nav class="navbar navbar-expand-lg">
                <a href="#" class="nav-link" id="btn-bars">
                    <span class="fa fa-bars"></span>
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('frontend/assets/')}}/images/logo.png" width="120" alt="">
                </a>
                <div class="d-flex justify-content-between align-items-center w-100">
                    <ul class="navbar-nav">

                        <li class="dropdown nav-item dropdown-mega">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                                <span class="fa fa-th"></span> التصنيفات
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item sm-hidden">
                            <a href="#" class="nav-link search-btn">
                                <span class="fa fa-search"></span>
                            </a>
                            <div class="search-form">
                                <form action="/u/search?query=" method="get">
                                    <input type="search" name="q" placeholder="ابحث عن">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item btn-nav">
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="fa fa-sign-in"></span> دخول
                            </a>
                        </li>
                        <li class="nav-item btn-nav sm-hidden">
                            <a href="{{ route("register") }}" class="nav-link">
                                <span class="fa fa-user-plus"></span>تسجيل
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- End Section Header -->
