@extends('app')

@section('content')
   @if (session('message'))
                                    <div class="alert alert-success">{{ session('message')}}</div>
   @endif
<!--start jobs section-->
<section class="jobs__section skip__section">
        <div class="container job__container">
            <div class="row skip__row">
                <div class="col-12 col-lg-7">
                    <div class="skip__wrapper">
                        <div class="one_skip_slider">
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s1.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">1.Establishment of the restaurant</h5>
                                    <p class="skipDes">We help you establish the restaurant and determine its type
                                         according to the target audience and the region</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s2.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">2.Identity design</h5>
                                    <p class="skipDes">We help you design the identity of the restaurant, the package and the media identity</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s3.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">3.Menu design</h5>
                                    <p class="skipDes">We help you design the appropriate menu for the restaurant and the audience in terms of type of meals, quantities and prices</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s4.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">4.Operating</h5>
                                    <p class="skipDes">With you in operation before ordering from supply to preparation to cooking and preparation to processing, packaging and delivery</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s5.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">5.Backing support</h5>
                                    <p class="skipDes">From the kitchen and equipment to the chef and staff to delivery</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s6.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">6.Selling platforms</h5>
                                    <p class="skipDes">We help you sell through delivery apps and your live page</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s7.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">7.Operational financing</h5>
                                    <p class="skipDes">We support you by financing purchases and providing the necessary facilities until selling</p>
                                </div>
                            </div>
                            <div class="one__item">
                                <div class="skip__card">
                                    <img src="{{ asset('images/s8.png') }}" alt="" class="skip__thumb">
                                    <h3 class="skip__ques">With you from establishing your new restaurant to selling</h3>
                                    <h5 class="skipName">8.Your restaurant from and to</h5>
                                    <p class="skipDes">Launch your restaurant now and start selling now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__info p__absolute">
            <h3 class="contact__title">contact info</h3>
            <div class="contact__card">
                <span class="phone_icon info__icon"></span>
                <a href="#" class="info__num">0000 000 000 000</a>
            </div>
            <div class="contact__card">
                <span class="email_icon info__icon"></span>
                <a href="#" class="info__num">example@gmail.com</a>
            </div>
        </div>
    </section>

@endsection