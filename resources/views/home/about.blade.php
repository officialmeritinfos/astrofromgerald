@extends('home.base')
@section('content')
<!--Page Header Start-->
<section class="page-header mb-3">
    <div class="page-header-bg"
        style="background-image: url({{asset('home/templates/bit_gold/invetoro/assets/images/banner.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">{{$pageName}}</li>
            </ul>
            <h2>{{$pageName}}</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Delivering IT Start-->
<section class="delivering-it delivering-it-two">
    <div class="container">
        <div class="delivering-it__bottom">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Delivering IT Single-->
                    <div class="delivering-it__single">
                        <div class="delivering-it__img">
                            <img src="{{ asset('home/serv/'.$service->photo) }}" alt="">
                        </div>
                        <div class="delivering-it__content">
                            <h5 class="delivering-it__content-title">{{ $service->title }}
                            </h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--Delivering IT End-->


<!--Trusted Company Start-->
<section class="trusted-company">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="trusted-company__left">
                    <div class="trusted-company__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/resources/trusted-company-img-1.jpg')}}"
                            alt="">
                        <div class="trusted-company__solution">
                            <p class="trusted-company__solution-content">{{$siteName}} is giving the best benefit
                                by our experts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="trusted-company__right">
                    <div class="section-title text-left" style="margin-bottom:0">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Company Introduction</span>
                            <div class="section-title-shape">
                                <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                                    alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">About Us</h2>
                    </div>
                    <p class="trusted-company__text-2">We are an international financial company engaged in investment
                        activities, which are related to trading on financial markets and cryptocurrency exchanges
                        performed by qualified professional traders.<br />
                        <br />
                        Our goal is to provide our investors with a reliable source of high income, while minimizing any
                        possible risks and offering a high-quality service, allowing us to automate and simplify the
                        relations between the investors and the trustees. We work towards increasing your profit margin
                        by profitable investment. We look forward to you being part of our community. <a href="about"
                            class="text-primary">...more</a>
                    </p>
                    <div class="trusted-company__points-box">
                        <ul class="list-unstyled trusted-company__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>High value strategies</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Professional Consulation</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled trusted-company__points trusted-company__points-two">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Expert trading.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Artificial Intelligence</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="trusted-company__person">
                        <div class="trusted-company__person-img">
                            <img src="{{asset('home/images/ceo.PNG')}}" style="width: 50px;" alt="">
                        </div>
                        <div class="trusted-company__person-content">
                            <h2 class="trusted-company__person-name">David PervoL</h2>
                            <p class="trusted-company__person-text">Co founder of {{$siteName}} company</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Trusted Company End-->


<!--Business From Start-->
<section class="business-from">
    <div class="business-from-bg-box">
        <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/business-from-bg);"></div>
    </div>
    <div class="container">
        <div class="business-from__inner text-center">
            <p class="business-from__sub-title">Business from great idea to</p>
            <h2 class="business-from__title">launching</h2>
            <div class="business-from__btn-box">
                <a href="{{route('register')}}" class="business-from__btn thm-btn">Get Started now</a>
            </div>
        </div>
    </div>
</section>
<!--Business From End-->

<!-- {{$siteName}} More Start-->
<section class="notech-more">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="notech-more__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">{{$siteName}} Index</span>
                            <div class="section-title-shape">
                                <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                                    alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title"> We are duely
                            Registered</h2>
                    </div>
                    <p class="notech-more__text">{{$siteName}} is duely registered with the UK authority and licensed to
                        conduct businesses in the US and almost all parts of Europe, Asia and Africa.</p>
                    <ul class="list-unstyled notech-more__points">
                        <li>
                            <div class="icon">
                                <span class="icon-design-thinking"></span>
                            </div>
                            <h3 class="notech-more__title">Certified</h3>
                            <p class="notech-more__text-2">We are certified in digital currency and trading.
                            </p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-stock-market"></span>
                            </div>
                            <h3 class="notech-more__title">Experienced</h3>
                            <p class="notech-more__text-2">We have a team of highly skilled professionals.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="notech-more__right">
                    <div class="notech-more__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{asset('home/images/certificate.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{$siteName}} More End-->

<!--Counter Two Start-->
<section class="counter-two">
    <div class="container">
        <ul class="list-unstyled counter-two__list clearfix">
            <li class="counter-two__single">
                <div class="counter-two__content-box">
                    <div class="counter-two__icon-box">
                        <span class="icon-work"></span>
                    </div>
                    <div class="counter-two__count-box">
                        <div class="counter-two__count-box-inner">
                            <h3 class="odometer" data-count="5">00</h3>
                            <span class="counter-two__plus">+</span>
                        </div>
                        <p class="counter-two__text">Years of experience</p>
                    </div>
                </div>
            </li>
            <li class="counter-two__single">
                <div class="counter-two__content-box">
                    <div class="counter-two__icon-box">
                        <span class="icon-technical-support"></span>
                    </div>
                    <div class="counter-two__count-box">
                        <div class="counter-two__count-box-inner">
                            <h3 class="odometer" data-count="12240230">00</h3>
                            <span class="counter-two__plus">+</span>
                        </div>
                        <p class="counter-two__text">Transactions</p>
                    </div>
                </div>
            </li>
            <li class="counter-two__single">
                <div class="counter-two__content-box">
                    <div class="counter-two__icon-box">
                        <span class="icon-like"></span>
                    </div>
                    <div class="counter-two__count-box">
                        <div class="counter-two__count-box-inner">
                            <h3 class="odometer" data-count="1216960">00</h3>
                        </div>
                        <p class="counter-two__text">Satisfied clients</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Counter Two End-->

<!--Team One Start-->
<section class="team-one about-page-team">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Meet the team</span>
                <div class="section-title-shape">
                    <img src="assets/images/shapes/section-title-shape" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Team members</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/ceo.png')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Alex Powell</a></h4>
                            <p class="team-one__title">Founder, Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/5fce3b35de92d1607351093.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Danial K.</a></h4>
                            <p class="team-one__title">CTO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/61b87b31360051639480113.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">David Pervol</a></h4>
                            <p class="team-one__title">Co founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/61b87a2a8c8b21639479850.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Kathy Joel</a></h4>
                            <p class="team-one__title">Chairman Business Development</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/5fce3b5f679ad1607351135.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Sam Joe</a></h4>
                            <p class="team-one__title">Accountant General and Chief Compliant Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/61b87a8cce4801639479948.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Megan Moore</a></h4>
                            <p class="team-one__title">Super Agent Director &amp;amp; Transaction Co-Ordinator</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/5fce3b7c48fb41607351164.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Juna Sun</a></h4>
                            <p class="team-one__title">SEO Expert</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('home/images/frontend/team/61b87af6a3d061639480054.jpg')}}" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="#">Kim Li-yeon</a></h4>
                            <p class="team-one__title">Chief Information Officer &amp;amp; Internal Business Relation
                                Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->


<!--Testimonial Start-->
<section class="testimonial-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our client feedbacks</span>
                <div class="section-title-shape">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                        alt="">
                </div>
            </div>
            <h2 class="section-title__title">What they’re saying about us</h2>
        </div>
        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>

            <div class="testimonial-two__single">
                <div class="testimonial-two__single-inner">
                    <div class="testimonial-two__icon">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/testimonial-two-icon.png')}}"
                            alt="">
                    </div>
                    <p class="testimonial-two__text">
                        I have invested with this platform and gotten my money in my account. This is legit and safe.
                        Great doing business with them.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="assets/images/frontend/testimonial/5fce3c57867c71607351383.jpg')}}" alt="">
                        </div>
                        <h5 class="testimonial-two__client-name">Monalisa Thakur</h5>
                        <p class="testimonial-two__client-title">User From India</p>
                    </div>
                    <div class="testimonial-two-shape">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/testimonial-two-shape.png')}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-two__single">
                <div class="testimonial-two__single-inner">
                    <div class="testimonial-two__icon">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/testimonial-two-icon.png')}}"
                            alt="">
                    </div>
                    <p class="testimonial-two__text">
                        Legit....and legit. Although the payment was processed manually, I have received my first
                        payment within a very short time., I think nice for invest at this site.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="assets/images/frontend/testimonial/61e9fbb840f5c1642724280.jpg')}}" alt="">
                        </div>
                        <h5 class="testimonial-two__client-name">Sundax Ezma</h5>
                        <p class="testimonial-two__client-title">User From USA</p>
                    </div>
                    <div class="testimonial-two-shape">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/testimonial-two-shape.png')}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-two__single">
                <div class="testimonial-two__single-inner">
                    <div class="testimonial-two__icon">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/testimonial-two-icon.png')}}"
                            alt="">
                    </div>
                    <p class="testimonial-two__text">
                        I have invested with this platform and gotten my money in my account. This is legit and safe.
                        Great doing business with them.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="assets/images/frontend/testimonial/5fce3c918a04b1607351441.jpg')}}" alt="">
                        </div>
                        <h5 class="testimonial-two__client-name">Donald I.</h5>
                        <p class="testimonial-two__client-title">User From UK</p>
                    </div>
                    <div class="testimonial-two-shape">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/testimonial-two-shape.png')}}"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Testimonial End-->



@endsection