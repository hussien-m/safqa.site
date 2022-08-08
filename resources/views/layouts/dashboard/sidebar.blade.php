<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{--
            <li class="nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">eCommerce</a>
                    </li>
                    <li><a class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.crypto">Crypto</a>
                    </li>
                    <li class="active"><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">Sales</a>
                    </li>
                </ul>
            </li>

            --}}


            <li class="{{ Request::is('admin/home') ? 'open' : '' }} nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">الرئيسية</span></a>
            </li>
            <li class="navigation-header">
                <span style="color:#0D7091" data-i18n="nav.category.layouts">منطقة الصفقات</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
            </li>

            <li class=" {{ Request::is('admin/deal-types/create') ? 'open':''}} {{ Request::is('admin/deal-types/*/edit') ? 'open':''}} {{ Request::is('admin/deal-types') ? 'open':''}} nav-item"><a href="index.html"><i class="la la-mail-reply-all"></i><span class="menu-title" data-i18n="nav.dash.main">الصفقات</span><span class="badge badge badge-info badge-pill float-right mr-2">4</span></a>
                <ul class="menu-content">
                    <li class="nav-item {{ Request::is('admin/deal-types') ? 'active' : '' }}"><a href="{{route('admin.deal-types.index')}}"><i class="la la-life-bouy"></i><span class="menu-title" data-i18n="nav.dash.main">انواع الصفقات</span></a>

                    <li class="nav-item {{ Request::is('admin/deal-targets') ? 'active' : '' }}"><a href="{{route('admin.deal-targets.index')}}"><i class="la la-lightbulb-o"></i><span class="menu-title" data-i18n="nav.dash.main">الهدف من الصفقة</span></a>

                    <li class="nav-item {{ Request::is('admin/categories') ? 'active' : '' }}"><a href="{{route('admin.categories.index')}}"><i class="la la-list"></i><span class="menu-title" data-i18n="nav.dash.main">التصنيفات</span></a>

                    <li class="nav-item {{ Request::is('admin/deals') ? 'active' : '' }}"><a href="{{route('admin.deals.index')}}"><i class="ft ft-package"></i><span class="menu-title" data-i18n="nav.dash.main">الصفقات</span></a>
                    </li>
                </ul>
            </li>

            <li class="navigation-header">
                <span style="color:#0D7091" data-i18n="nav.category.layouts">منطقة الدول والمدن والمناطق</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
            </li>

            <li class=" {{ Request::is('admin/countries/create') ? 'open':''}} {{ Request::is('admin/countries/*/edit') ? 'open':''}} {{ Request::is('admin/countries') ? 'open':''}} nav-item"><a href="index.html"><i class="la la-flag-o"></i><span class="menu-title" data-i18n="nav.dash.main">الدول و المدن</span><span class="badge badge badge-info badge-pill float-right mr-2">4</span></a>
                <ul class="menu-content">
                    <li class="nav-item {{ Request::is('admin/countries') ? 'active' : '' }}"><a href="{{route('admin.countries.index')}}"><i class="la la-flag-checkered"></i><span class="menu-title" data-i18n="nav.dash.main">الدول</span></a>

                    <li class="nav-item {{ Request::is('admin/cities') ? 'active' : '' }}"><a href="{{route('admin.cities.index')}}"><i class="la la-building"></i><span class="menu-title" data-i18n="nav.dash.main">المدن</span></a>

                    <li class="nav-item {{ Request::is('admin/regions') ? 'active' : '' }}"><a href="{{route('admin.regions.index')}}"><i class="la la-bus"></i><span class="menu-title" data-i18n="nav.dash.main">المناطق</span></a>
                </ul>
            </li>

            <li class="{{ Request::is('admin/settings') ? 'active':''}} nav-item"><a href="{{route('admin.settings')}}"><i class="la la-gear"></i><span class="menu-title" data-i18n="nav.dash.main">الاعدادات</span></a>
            </li>

            <li class="nav-item"><a href="#" class="clearCache"><i class="la la-remove"></i><span class="menu-title" data-i18n="nav.dash.main">مسح الكاش</span></a>
            </li>

        </ul>
    </div>
</div>

