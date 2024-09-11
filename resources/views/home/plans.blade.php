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
                                <img src="{{asset('home/templates/bit_gold/invetoro/assets/images/icon/pricing-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="pricing__title">{{$package->name}}</h3>
                            <h2 class="pricing__rate">{{$package->roi}}% <span>/{{$option->getReturnType($package->returnType)}}</span></h2>

                            <div class="pricing__service">
                                <ul class="list-unstyled pricing__service-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>For   {{$package->Duration}} </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>
                                                Total   {{$package->roi*$package->numberOfReturns}}%

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
                            <a href="{{route('register')}}" data-toggle="modal" data-target="#depoModal" data-resource="{&quot;id&quot;:14,&quot;name&quot;:&quot;Standard Crypto&quot;,&quot;minimum&quot;:&quot;100&quot;,&quot;maximum&quot;:&quot;4999&quot;,&quot;fixed_amount&quot;:&quot;0&quot;,&quot;interest&quot;:&quot;2.5&quot;,&quot;interest_status&quot;:&quot;1&quot;,&quot;times&quot;:&quot;168&quot;,&quot;status&quot;:&quot;1&quot;,&quot;featured&quot;:&quot;1&quot;,&quot;capital_back_status&quot;:&quot;1&quot;,&quot;lifetime_status&quot;:&quot;0&quot;,&quot;repeat_time&quot;:&quot;180&quot;,&quot;created_at&quot;:&quot;2019-12-18T23:08:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-12-23T22:24:31.000000Z&quot;}" class="thm-btn pricing__btn investButton">Invest Now</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--Pricing End-->


@endsection
