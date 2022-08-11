"use strict"; // Start of use strict

function searchFrom() {

    $('#topBar .search').click(function () {
        if (!$('.input-search').hasClass('open')) {
            $('.input-search').addClass('open')
            $('.overlay').show()
        }
    });
    $('.overlay').click(function () {
        if ($('.input-search').hasClass('open')) {
            $('.input-search').removeClass('open')
            $('.overlay').hide()
        }
    })
}

function sliderHeader() {
    let owl = $(".owl-carousel");
    owl.owlCarousel({
        rtl: true,
        items: 1,
        loop: true,
        center: true,
        autoplay: true,
        dots: false,
        nav: true,
        smartSpeed: 450
    });
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2; // Position of the current item
        $('h1').removeClass('animated fadeInDown');
        $('p').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInDown');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
    });

}

function loading() {
    setTimeout(function () {
        $('.preloader').fadeOut('slow');
    }, 200)
}
function scrollNav() {
    $(document).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $('#header_logo').addClass('sticky-nav').css({
                'transition': '.4s linear'
            });
        } else {
            $('#header_logo').removeClass('sticky-nav').css({
                'transition': '.4s linear'
            });
        }
    })
}
function scrollToTop() {
    $(document).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $('.scroll_top').fadeIn('slow');
        } else {
            $('.scroll_top').fadeOut('slow');
        }
    })
    $('.scroll_top').click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 1000, 'swing');
    })
}

function megaMenu() {
    $(".dropdown").focus(
        function () {
            $('.dropdown-menu', this).fadeIn("fast");
        },
        function () {
            $('.dropdown-menu', this).fadeOut("fast");
        });
}

function openMenu() {
    $('#menuItem').click(function () {
        $(this).toggleClass('saphqa--active')
    })
}

function openAside() {
    let open = false;
    $("body").children().not('.saphqa-sidebar').click(function () {
        if (open) {
            $('body').removeClass('saphqa-sidebar-active');
            open = false;
        }
    })
    $('#btn-bars').on('click', function () {
        $('body').toggleClass('saphqa-sidebar-active')
        open = true;
        return false;
    })
}
function searchBtn() {
    $('.search-btn').on('click', function (e) {
        e.preventDefault();
        if ($(this).siblings('.search-form').hasClass('active')) {
            $(this).siblings('.search-form').removeClass('active').hide();
            $(this).removeClass('active');

            if ($(this).find("span").hasClass('fa-search')) {
                $(this).find("span").removeClass('fa-search').addClass('fa-times');
            } else {
                $(this).find("span").removeClass('fa-times').addClass('fa-search');
            }

        } else {
            $('.search-btn .search-form').removeClass('active').hide();
            $('.search-btn .search-form').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.search-form').addClass('active').show();

            if ($(this).find("span").hasClass('fa-search')) {
                $(this).find("span").removeClass('fa-search').addClass('fa-times');
            }
        }
    });
}
// function lightGallery() {
//     $('#aniimated-thumbnials').lightGallery({
//         thumbnail: true
//     })
//     $("#gallery_image").lightGallery({
//         thumbnail: true,
//     });
//     $('#html5-videos').lightGallery({
//         videojs: true
//     });
//     $('.video-gallery').lightGallery({
//         videojs: true,
//     });
// }

function sliderProducts() {
    $('.services-slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right "></i></button>',
        rtl: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    })
    $('.adv_slider').slick({
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2000,
        rtl: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: true,
        centerPadding: '80px',
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right "></i></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    })

    $('.policy-slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right "></i></button>',
        rtl: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    })
}

function aos() {
    AOS.init();
}

function pillTab() {
    $('#pills-tab a').on('click', function (e) {
        e.preventDefault()
        $('.services-slider').slick('refresh')
    })
    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
        var $this = $(this),
            offsetTop = $this.offset().top;

        if (scrolled + win_height_padded > offsetTop) {
            if ($this.data('timeout')) {
                window.setTimeout(function () {
                    $this.addClass('animated ' + $this.data('animation'));
                }, parseInt($this.data('timeout'), 10));
            } else {
                $this.addClass('animated ' + $this.data('animation'));
            }
        }
    });
    // Hidden...
    $(".revealOnScroll.animated").each(function (index) {
        var $this = $(this),
            offsetTop = $this.offset().top;
        if (scrolled + win_height_padded < offsetTop) {
            $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
        }
    });
}

function toggleList() {
    $('.c-list__link.filter').click(function (e) {
       // e.preventDefault();
        
        $(this).parent().find('.c-list--sub').toggleClass('u-hidden')
    })
}

jQuery(document).on('ready', function () {
    (function ($) {

        toggleList();
        megaMenu();
        searchFrom();
        // sliderProducts();
        scrollNav();
        // lightGallery();
        // loading();
        // aos();
        scrollToTop();
        // sliderHeader();
        // pillTab();
        openAside();
        openMenu();
        searchBtn();
    })(jQuery);

});
