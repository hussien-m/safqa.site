    <!-- Section Footer -->
    <footer id="footer">
        <div class="zt-container">
            <div class="row">
                <div class="home-info col-md-3 mb-3">
                    <h2><i class="fa fa-heart"></i> موقع صفقة</h2>
                    <ul class="footer-menu">
                        <li class="mr-4"><a href="#">حول الموقع</a></li>
                        <li class="mr-4"><a href="#">كيف يعمل الموقع</a></li>
                        <li class="mr-4"><a href="#">الأسئلة الشائعة</a></li>
                        <li class="mr-4"><a href="#">اعرف كيف نضمن حقوقك</a></li>
                    </ul>
                </div>
                <div class="home-info col-md-6 mb-3">
                     <h2><i class="fa fa-rss"></i> مدونة صفقة</h2>
                    <ul class="footer-menu">
                        <li class="mr-4"><a href="#">5 طرق لتسويق مشروعك باستخدام التعليق الصوتي</a></li>
                        <li class="mr-4"><a href="#">10 مهارات ضرورية لإدارة حسابات شبكات التواصل الاجتماعي</a></li>
                        <li class="mr-4"><a href="#">كيف تُحسِّن محتوى قناة اليوتيوب لمحركات البحث؟</a></li>
                        <li class="mr-4"><a href="#">كيف تنشئ بودكاست ناجح يسوّق لمشروعك بفعالية؟</a></li>
                    </ul>
                </div>
                <div class="home-info col-md-3 mb-3">
                    <h2> <i class="fa fa-users"></i> مجتمع صفقة</h2>
                    <ul class="footer-menu">
                        <li class="mr-4"><a href="#">نماذج أعمال قمت بتنفيذها</a></li>
                        <li class="mr-4"><a href="#">طلبات الخدمات غير الموجودة</a></li>
                        <li class="mr-4"><a href="#">تجارب وقصص المستخدمين</a></li>
                        <li class="mr-4"><a href="#">أمور عامة حول صفقة</a></li>
                    </ul>
                </div>

                <div class="home-info col-md-3 mb-3">
                    <h2><i class="fa fa-info"></i> احصل على المساعدة</h2>
                    <ul class="footer-menu" >
                        <li class="mr-4" style="list-style: none"><a href="#">قاعدة المعرفة</a></li>
                        <li class="mr-4" style="list-style: none"><a href="#">مركز المساعدة</a></li>
                    </ul>
                </div>
                <div class="home-info col-md-6 mb-3">
                    <h2><i class="fa fa-credit-card-alt" aria-hidden="true"></i> وسائل الدفع</h2>
                    <ul class="footer-menu">
                        <li class="mr-4" style="list-style: none"><img src="{{asset('frontend/assets/')}}/images/payments.png" width="270" alt=""></li>
                    </ul>
                </div>
                <div class="home-info col-md-3 mb-3">
                    <h2><i class="fa fa-share-square-o" aria-hidden="true"></i> تابع صفقة</h2>
                    <ul class="footer-menu d-flex">
                        <li class="mr-2" style="list-style: none"><a class="linkSocial facebook" href="http://www.facebook.com/saphqa" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li  style="list-style: none"><a href="http://www.twitter.com/saphqa" class=" linkSocial twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="mr-4" style="list-style: none"><a href="http://www.instagram.com/saphqa" class=" linkSocial twitter" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="mr-4" style="list-style: none"><a href="https://maroof.sa/175054" class=" linkSocial twitter" target="_blank"><img height="40" width="90" src="{{ asset('frontend/m3rof.png') }}" alt=""></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="subfooter">
            <div class="zt-container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="d-flex justify-content-between align-items-center sm-hidden">
                        <li><a href="#">اتفاقية الاستخدام</a></li>
                        <li><a href="#">شروط الخصوصية</a></li>
                    </ul>
                    <span>saphqa.com, All rights reserved. &copy; 2020</span>
                </div>
            </div>
        </div>
        <div class=""></div>

    </footer>
    <!-- End Section Footer -->

    <!-- Scripts -->
    <script src="{{asset('frontend/assets/')}}/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('frontend/assets/')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/assets/')}}/js/main.js"></script>
    <script type="text/javascript" src="{{ URL::asset ('js/custom-scripts.js') }}"></script>

    @yield('scripts')


    <!-- End Scripts -->
</body>

</html>
