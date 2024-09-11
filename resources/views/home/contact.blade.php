@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header mb-3">
        <div class="page-header-bg" style="background-image: url({{asset('home/templates/bit_gold/invetoro/assets/images/banner.jpg')}})">
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

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-page__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">contact us</span>
                            </div>
                            <h2 class="section-title__title">Have Questions? Contact
                                <br> with us <span>Anytime</span></h2>
                        </div>
                        <ul class="contact-page__points list-unstyled">
                            @if(!empty($web->phone))
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone-1"></span>
                                    </div>
                                    <div class="text">
                                        <p>Have any question?</p>
                                        <h3>Free <a href="tel:{!! $web->phone !!}">{!! $web->phone !!}</a></h3>
                                    </div>
                                </li>
                            @endif
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <h3><a href="mailto:{!! $web->email !!}">{!! $web->email !!}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Visit anytime</p>
                                    <h3>
                                        {!! $web->address !!}
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->



@endsection
