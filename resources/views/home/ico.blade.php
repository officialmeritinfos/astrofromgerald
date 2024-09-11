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

    <!-- Blog-section Start -->
    <div class="blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="post-details">
                        <div class="post-inner wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="post-header">
                                <h3 class="subtitle">
                                    Initial Coin Offering
                                </h3>
                            </div>
                            <h4>So What Exactly Is an ICO, Anyway?</h4><br>

                            <p>Imagine this: You're a Silicon Valley startup with a great idea for a new cryptocurrency system. Perhaps you want to streamline the Parent/Babysitter payment system so that it can be digital and encrypted. What a great idea! Let's call it BabyCoin. The only problem is you need people to give you money so you can actually make the currency. Now, you could go to a bank or try getting venture capitalist investors, but what if you could raise money without having to give up any of your ownership of the company? Enter ICO.</p><br>

                            <p>Here's how it works. You create a document essentially detailing exactly how the system would work (usually called a white paper), make a pretty website, and explain why it's a great idea that could be very useful. Then, you ask for people to send you money (usually Bitcoin or Ether, but you can also take fiat) and in return, you send them back some BabyCoin. They hope that BabyCoin will get used a lot and be in high circulation, which would raise the value of the currency.</p><br>

                            <p>It's important to note that, unlike an initial public offering (IPO), investing in an ICO won't result in you having an ownership stake of the company you're giving money to. You're gambling that the currently worthless currency you pay for now will increase in worth later and make you money.</p><br>

                            <h4>So Who Can Launch an ICO?</h4><br>

                            <p>Literally anyone! Currently, there's very little regulation on ICOs in America, meaning as long as you can get the tech set up you're free to try and get your currency funded. Right now cryptocurrency as a whole is kind of like the wild west; there's gold in the hills and relatively little law to speak of. This can work in your favor or it can lead to getting swindled.</p><br>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="post-details">
                        <div class="post-inner wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="post-header">
                                <h3 class="subtitle">
                                    Coming Soon....
                                </h3>
                            </div>
                            <h4>Good news!</h4><br>

                            <p>



                                We are to launch VetoroCoin by the end of the year 2023, we anticipate you to become one of the company Maecoin owner and secure your future. We are the next raising Crypto in the global Market. Buy and own a coin with us.

                            </p><br>

                            <p>In an ICO, a quantity of cryptocurrency is sold in the form of "tokens" ("coins") to speculators or investors, in exchange for legal tender or other (generally established and more stable) cryptocurrencies such as Bitcoin or Ethereum. ... An ICO can be a source of capital for startup companies. Our developers are working on this currently and soon we will be notifying you to take advantage of this great deal dropping soon.</p><br>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
