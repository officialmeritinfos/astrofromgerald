@extends('home.base')
@section('content')

<section style="height: 100vh_; min-height: 630px; object-fit: cover;"
    class="section-video text-light d-flex-center my-section" data-bg-video="images/vid.mp4')}}')}}">
    <div class="html5vid video-loaded" id="video-rpptn"><video playsinline="" style="object-fit: cover;" autoplay loop
            muted="true"
            poster="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/main-slider-three-shape-1.png')}}"
            preload="auto">
            <source src="{{asset('home/templates/bit_gold/invetoro/assets/videos/bg-chc.mp4')}}" type="video/mp4">
        </video></div>
    <div class="bg-overlay yuwjw7jjjk" style="opacity: .5 !important; background-color: #112b77 !important;">
    </div>
    <div class="container container-fullscreen">
        <div class="text-middle text-center text-light">

            <div class="lineInfoTop" style="position: absolute;margin-top: -10px">
                <div class="timeBl">
                    <span class="iconBl icon-clock-22"></span>
                    <span id="date"></span>
                    <span id="time"></span>
                </div>
                <div class="supportBl">
                    <span class="iconBl icon-email-32"></span>
                    <span class="tit">support</span>
                    <a href="mailto:{{$web->email}}" class="link">{{$web->email}}</a>
                </div>
            </div>
            <div class="grettingsMain wow slideInLeft">
                <h1 class="cap">Invest in<br>Cryptocurrency Today!</h1>
                <span class="desr">
                    We offer our investors access to high-growth investment opportunities in the Crypto
                    markets. <br> </span>
            </div>
            <br>
        </div>
    </div>
</section>
<section class="t-center my-section" style="padding: 0; overflow: hidden;">
    <div class="tradingview-widget-container" style="width: 100%; height: 72px;">
        <iframe scrolling="no" allowtransparency="true" frameborder="0"
            src="https://s.tradingview.com/embed-widget/tickers/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A72%2C%22utm_source%22%3A%22ulscapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D"
            style="box-sizing: border-box; height: 72px; width: 100%;"></iframe>


        <style>
            .tradingview-widget-copyright {
                font-size: 13px !important;
                line-height: 32px !important;
                text-align: center !important;
                vertical-align: middle !important;
                font-family: 'Trebuchet MS', Arial, sans-serif !important;
                color: #9db2bd !important;
            }

            .tradingview-widget-copyright .blue-text {
                color: #2196f3 !important;
            }

            .tradingview-widget-copyright a {
                text-decoration: none !important;
                color: #9db2bd !important;
            }

            .tradingview-widget-copyright a:visited {
                color: #9db2bd !important;
            }

            .tradingview-widget-copyright a:hover .blue-text {
                color: #38acdb !important;
            }

            .tradingview-widget-copyright a:active .blue-text {
                color: #299dcd !important;
            }

            .tradingview-widget-copyright a:visited .blue-text {
                color: #2196f3 !important;
            }
        </style>
    </div>
</section>


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
                            <img src="{{asset('home/images/ceo.png')}}" style="width: 50px;" alt="">
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

<!--Main Slider Start-->
<section class="main-slider main-slider-three">
    <div class="swiper-container thm-swiper__slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider-three-bg"
                    style="background-image: url({{asset('home/images/backgrounds/main-slider-three-bg')}});"></div>
                <!-- /.image-layer -->
                <div class="main-slider-three__shape-1">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/main-slider-three-shape-1.png')}}"
                        alt="">
                </div>
                <div class="main-slider-three__shadow zoominout-2">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/main-slider-three-shadow.png')}}"
                        alt="">
                </div>
                <div class="main-slider-three__img">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/resources/main-slider-three-img-3.jpg')}}"
                        alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="main-slider__content">
                                <h2>Improving your crypto <span>trading</span> benefit</h2>
                                <p class="text-white">We help investors scale their dividends through our innovative and
                                    lucrative strategies.</p>
                                <div class="main-slider-three__btn-box">
                                    <a href="{{url('about')}}" class="thm-btn main-slider-three__btn">Discover
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->

    </div>
</section>
<!--Main Slider End-->

<!--Pricing Start-->
<section class="pricing">
    <div class="container">
        <div class="we-stand__top">
            <div class="we-stand__top-title-box">
                <div class="we-stand__top-title-box-bg">
                </div>
                <h2 style="background-image: url({{asset('home/templates/bit_gold/invetoro/assets/images/backgrounds/tech-bg-1-1.jpg')}});"
                    class="we-stand__top-title">Investment Plans</h2>
            </div>
            <div class="we-stand-shape">
                <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/we-stand-shape.png')}}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($packages as $package)
            @inject('option','App\Defaults\Custom')
            <div class="col-xl-4 col-lg-4">
                <!--Pricing Single-->
                <div class="pricing__single">
                    <div class="pricing__icon">
                        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/pricing-icon-1.png')}}"
                            alt="">
                    </div>
                    <h3 class="pricing__title">{{$package->name}}</h3>
                    <h2 class="pricing__rate">{{$package->roi}}%
                        <span>/{{$option->getReturnType($package->returnType)}}</span>
                    </h2>

                    <div class="pricing__service">
                        <ul class="list-unstyled pricing__service-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>For {{$package->Duration}} </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Total {{$package->roi*$package->numberOfReturns}}%

                                        + <span class="badge bg-success">Capital</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                        ${{number_format($package->maxAmount,2)}}
                                        @else
                                        Unlimited
                                        @endif
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('register')}}" data-toggle="modal" data-target="#depoModal"
                        data-resource="{&quot;id&quot;:14,&quot;name&quot;:&quot;Standard Crypto&quot;,&quot;minimum&quot;:&quot;100&quot;,&quot;maximum&quot;:&quot;4999&quot;,&quot;fixed_amount&quot;:&quot;0&quot;,&quot;interest&quot;:&quot;2.5&quot;,&quot;interest_status&quot;:&quot;1&quot;,&quot;times&quot;:&quot;168&quot;,&quot;status&quot;:&quot;1&quot;,&quot;featured&quot;:&quot;1&quot;,&quot;capital_back_status&quot;:&quot;1&quot;,&quot;lifetime_status&quot;:&quot;0&quot;,&quot;repeat_time&quot;:&quot;180&quot;,&quot;created_at&quot;:&quot;2019-12-18T23:08:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-12-23T22:24:31.000000Z&quot;}"
                        class="thm-btn pricing__btn investButton">Invest Now</a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--Pricing End-->


<section data-animate="fadeIn"
    style="padding-top: 45px; padding-bottom: 30px !important;background-image: url('{{asset('home/img/feature-bg')}});background-size: all;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-text heading-section text-center m-b-40">
                    <h2 class="remove-p nsjk8msksii" style="font-size: 26px; margin-bottom: 7px !important;">
                        LIVE CRYPTOCURRENCIES MARKET DATA</h2>
                    <span class="lead center-pos" style="font-size: 16px; display:inline-block">{{$siteName}}
                        Investments utilizes innovative proprietary technologies to provide
                        managed cryptocurrency trading services <br>to yield higher returns for investors. </span>
                </div>


                <div style="height:649px; padding:0px; margin:0px; width: 100%;" class="pt-3"><iframe
                        src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes"
                        width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0"
                        border="0" style="border:0;margin:0;padding:0;"></iframe></div>

            </div>
        </div>
    </div>
</section>


<!--Services Three Start-->
<section class="services-three service-three--no-pb">
    <div class="container">
        <div class="services-three__top">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="services-three__top-left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Why choose us</span>
                                <div class="section-title-shape">
                                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">This is why our clients stick with us.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="services-three__top-right">
                        <p class="services-three__top-text">We are dedicated to helping investors around the world reach
                            their desired investment goals and broaden their financial horizons.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-three__bottom">
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-1.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-copy"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">Legal Company</a></h3>
                            <p class="services-three__text">Our company conducts absolutely legal activities in the
                                legal field. We are certified to operate investment business, we are legal and safe..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-2.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">High reliability</a></h3>
                            <p class="services-three__text">We are trusted by a huge number of people. We are working
                                hard constantly to improve the level of our security system and minimize possible
                                risks..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-3.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-user-lock"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">Anonymity</a></h3>
                            <p class="services-three__text">Anonymity and using cryptocurrency as a payment instrument.
                                In the era of electronic money – this is one of the most convenient ways of
                                cooperation..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-4.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-shipping-fast"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">Quick Withdrawal</a></h3>
                            <p class="services-three__text">Our all retreats are treated spontaneously once requested.
                                There are high maximum limits. The minimum withdrawal amount is only $10 ..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-5.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">Referral Program</a></h3>
                            <p class="services-three__text">We are offering a certain level of referral income through
                                our referral program. you can increase your income by simply refer a few people..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-6.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-headset"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">24/7 Support</a></h3>
                            <p class="services-three__text">We provide 24/7 customer support through e-mail and
                                telegram. Our support representatives are periodically available to elucidate any
                                difficulty..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-7.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-server"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">Dedicated Server</a></h3>
                            <p class="services-three__text">We are using a dedicated server for the website which allows
                                us exclusive use of the resources of the entire server..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-8.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-user-shield"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">SSL Secured</a></h3>
                            <p class="services-three__text">Comodo Essential-SSL Security encryption confirms that the
                                presented content is genuine and legitimate..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/services/services-3-9.jpg')}}"
                                alt="">

                        </div>
                        <div class="services-three__content">
                            <div class="services-three__icon">
                                <i class="fa fa-shield-alt"></i>
                            </div>
                            <h3 class="services-three__title"><a href="#">DDOS Protection</a></h3>
                            <p class="services-three__text">We are using one of the most experienced, professional, and
                                trusted DDoS Protection and mitigation provider..</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<!--Services Three End-->


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

<!--Business From Start-->
<section class="business-from">
    <div class="business-from-bg-box">
        <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{asset('home/images/backgrounds/business-from-bg')}});"></div>
    </div>
    <div class="container">
        <div class="business-from__inner text-center">
            <p class="business-from__sub-title">Become special to us</p>
            <h2 class="business-from__title">An affiliate</h2>
            <div class="business-from__btn-box">
                <a href="{{route('login')}}" class="business-from__btn thm-btn">Join us now</a>
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

<!--Brand Two Start-->
<section class="brand-one brand-two">
    <div class="container">
        <div class="brand-two__inner">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 5
                        }
                    }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1bd8678601601117144.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d2a742211601117482.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d4bc69e71601117515.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d41257181601117505.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d1d3ec731601117469.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1bc61518b1601117126.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f7096563dfb71601214038.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d5951a111601117529.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b9e4bb961601117086.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1d3672dd61601117494.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f7096a31ed9a1601214115.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1babbdbb31601117099.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b2b20c6f1601116971.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f19432bedf1601116483.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b6c02ecd1601117036.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b94e9b2b1601117076.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b5fe18ee1601117023.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1b4c774af1601117004.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1bec255c61601117164.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f709684736321601214084.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f6f1bb765ab11601117111.jpg')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/5f9a8b62bb4dd1603963746.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/60f6772d4cf9e1626765101.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/60f67752c8f801626765138.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/60f677437e68a1626765123.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/60f677646d1c41626765156.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/61c99e4e6a3cd1640603214.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('home/images/gateway/61c99e1e5a0f61640603166.png')}}" alt="image">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand Two End-->

<!--Brand One End-->
<section class="business-from-two">
    <div class="business-from-two-img">
        <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/resources/business-from-two-img.jpg')}}"
            alt="">
    </div>
    <div class="business-from-two-bg-box">
        <div class="business-from-two-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{asset('home/images/backgrounds/business-from-two-bg')}});"></div>
    </div>
    <div class="container">
        <div class="section-title text-left">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">How {{$siteName}} works</span>
                <div class="section-title-shape">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                        alt="">
                </div>
            </div>
            <h4 class="business-from-two__title">{{$siteName}} is behind a family of products that provides investors
                with access<br> to the digital currency asset class. </h4>
        </div>
        <div class="business-from-two__content-box">
            <ul class="list-unstyled business-from-two__list">
                <li class="business-from-two__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="business-from-two__content">
                        <div class="business-from-two__icon">
                            <span class="icon-stock-market"></span>
                        </div>
                        <h4 class="business-from-two__title">Create Account</h4>
                    </div>
                </li>
                <li class="business-from-two__single wow fadeInUp" data-wow-delay="300ms">
                    <div class="business-from-two__content">
                        <div class="business-from-two__icon">
                            <span class="icon-education"></span>
                        </div>
                        <h4 class="business-from-two__title">Invest to Plan</h4>
                    </div>
                </li>
                <li class="business-from-two__single wow fadeInUp" data-wow-delay="200ms">
                    <div class="business-from-two__content">
                        <div class="business-from-two__icon">
                            <span class="icon-mental-health"></span>
                        </div>
                        <h4 class="business-from-two__title">Benefit</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Brand One End-->

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
                        Fantastic, awesome and legit. Their customer support will make your day every time, everyday.
                    </p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="{{asset('home/images/test1.png')}}" alt="" style="width: 100px;">
                        </div>
                        <h5 class="testimonial-two__client-name">Ludwig Mark</h5>
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
                            <img src="{{asset('home/images/frontend/testimonial/5fce3c57867c71607351383.jpg')}}" alt="">
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
                            <img src="{{asset('home/images/frontend/testimonial/61e9fbb840f5c1642724280.jpg')}}" alt="">
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
                            <img src="{{asset('home/images/frontend/testimonial/5fce3c918a04b1607351441.jpg')}}" alt="">
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
<!--Testimonial Two End-->

<!--News Two Start-->
<section class="blog-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">What’s happening</span>
                <div class="section-title-shape">
                    <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/shapes/section-title-shape.png')}}"
                        alt="">
                </div>
            </div>
            <h2 class="section-title__title">News & articles</h2>
        </div>
        <div class="blog-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": true,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1
                        },
                        "992": {
                            "items": 2
                        },
                        "1200": {
                            "items": 2
                        }
                    }
                }'>

            <!--News Two Single-->
            <div class="blog-two__single">
                <div class="blog-two__content">
                    <rssapp-wall id="tUnw8WjWtYT1oJ3Z"></rssapp-wall>
                    <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                </div>
            </div>

        </div>
    </div>
</section>
<!--News Two End-->





@endsection