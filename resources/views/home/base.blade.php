
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invetoro - Home</title>
    <meta name="description" content="Online platform for cryptocurrency investment">
    <meta name="keywords" content="bitcoin,investment,ethereum,mining,trading,send bitcoin,sell,buy,crypto,cryptocurrency,online platform for cryptocurrency trading,metavat,metavat.ltd">
    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" type="image/x-icon">


    <link rel="apple-touch-icon" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Invetoro - Home">

    <meta itemprop="name" content="Invetoro - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{asset('home/images/'.$web->logo)}}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Invetoro - Cryptocurrency Investment System">
    <meta property="og:description" content="Invetoro - Earn High Profit, Online investment, Online earning">
    <meta property="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="index">

    <meta name="twitter:card" content="summary_large_image">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/images/'.$web->logo)}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/images/'.$web->logo)}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/notech-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/notech-two-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/timepicker/timePicker.css')}}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/css/invetoro.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/css/invetoro-responsive.css')}}" />
    <style type="text/css">
        .top-v5{
            padding: 110px 0 150px 0 !important;}
    </style>
    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="{{asset('home/templates/bit_gold/invetoro/assets/css/notech-light.css')}}">


    <!-- toolbar css -->
    <link rel="stylesheet" href="{{asset('home/templates/bit_gold/invetoro/assets/vendors/toolbar/css/toolbar.css')}}">
    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 25rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 40px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>
    @stack('css')
</head>

<body>

<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('home/images/'.$web->logo)}}" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header main-header-three clearfix">
        <nav class="main-menu main-menu-three clearfix">
            <div class="main-menu__wrapper clearfix">
                <div class="main-menu__left main-menu__left--two">
                    <div class="main-menu__logo">
                        <a href="{{url('/')}}">
                            <img class="logo-dark" src="{{asset('home/images/'.$web->logo)}}" width="143" height="39" alt="Invetoro">
                            <img class="logo-light" src="{{asset('home/images/'.$web->logo)}}" width="143" height="39"  alt="Invetoro">
                        </a>
                    </div>
                    <div class="main-menu__main-menu-box main-menu__main-menu-box--two">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="dropdown">
                                <a href="#">About</a>
                                <ul>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{url('ico')}}">ICO</a></li>
                                </ul>
                            </li>

                            <li><a href="{{url('plans')}}">Investment Plans</a></li>

                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__search-call">
                        <div class="main-menu__call">
                            <a href="{{route('login')}}" class="thm-btn product__all-btn mx-2">Login</a>
                            <a href="{{route('register')}}" class="thm-btn product__all-btn ">Sign up</a>
                        </div>
                        <div class="main-menu__search-box">
                            <a href="{{route('login')}}" class="main-menu__search  icon-magnifying-glass"></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->



    @yield('content')


    <div class="telegram-float-widget">
        <a href="https://wa.me/{{$web->phone}}" target="_blank">
            <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
        </a>
    </div>

    <div id="google_translate_element"></div>
    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer-bg-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
             style="background-image: url({{asset('home/images/shapes/site-footer-shape-1')}});">
        </div>
        <div class="site-footer-bg-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
             style="background-image: url({{asset('home/images/shapes/site-footer-shape-2')}}');">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="site-footer__top-left">
                        <div class="site-footer__top-icon">
                            <span class="icon-artificial-intelligence"></span>
                        </div>
                        <h3 class="site-footer__top-title">Helping you overcome your technology challenges</h3>
                    </div>
                    <div class="site-footer__top-right">
                        <a href="{{url('about')}}" class="thm-btn site-footer__btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" width="143" height="39" alt=""></a>
                            </div>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">Subsrcibe for our upcoming latest articles and
                                    news resources</p>
                            </div>
                            <form class="footer-widget__newsletter-form subscribe-form" method="post">
                                <input type="hidden" name="_token" value="kocVwb7AGyTQ4D7IyYs8Qvku8MVuovNSFrDyEScG">                                    <div class="footer-widget__newsletter-input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                    <button type="submit" class="footer-widget__newsletter-btn"><img
                                            src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/footer-widget-newsletter-send-icon.png')}}"
                                            alt=""></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Links</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li class="list-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="list-item"><a  href="{{url('plans')}}">Investment Plans</a></li>
                                <li class="list-item"><a  href="{{route('register')}}">Open Account</a></li>
                                <li class="list-item"><a  href="{{route('login')}}">Login Account</a></li>
                                <li class="list-item"><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__contact clearfix">
                            <h3 class="footer-widget__title">Contact</h3>
                            <ul class="footer-widget__contact-list list-unstyled clearfix">
                                @if(!empty($web->phone))
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:{{$web->phone}}">{{$web->phone}}</a></p>
                                        </div>
                                    </li>
                                @endif
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>
                                            {!! $web->address !!}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__social-box clearfix">
                            <div class="site-footer__social">
                                <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">Copyright © 2017 - {{date('Y')}} <a href="{{url('/')}}" ><strong>{{$siteName}}</strong></a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image"><img src="{{asset('home/images/'.$web->logo)}}"
                                                              width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->


        <a href="{{route('login')}}" class="thm-btn product__all-btn mt-2">Login</a>
        <a href="{{route('register')}}" class="thm-btn product__all-btn mt-2">Sign up</a>

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$web->email}}">{{$web->email}}</a>
            </li>
            @if(!empty($web->phone))
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
                </li>
            @endif
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/wow/wow.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/timepicker/timePicker.js')}}"></script>

<!-- template js -->
<script src="{{asset('home/templates/bit_gold/invetoro/assets/js/clock.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/js/invetoro.js')}}"></script>

<!-- toolbar js -->
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/toolbar/js/js.cookie.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/toolbar/js/jQuery.style.switcher.min.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/invetoro/assets/vendors/toolbar/js/toolbar.js')}}"></script>
<script src="{{asset('home/templates/bit_gold/js/app.js')}}"></script>
<link rel="stylesheet" href="{{asset('home/templates/bit_gold/css/iziToast.min.css')}}">
<script src="{{asset('home/templates/bit_gold/js/iziToast.min.js')}}"></script>

<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

@stack('js')

</body>
</html>
