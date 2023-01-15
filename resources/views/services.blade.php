@extends('app')

@section('content')
   @if (session('message'))
                                    <div class="alert alert-success">{{ session('message')}}</div>
   @endif
<!--start jobs section-->
<div class="servicesPage_wrapper">
        <!--start service 1 establish-->
        <div class="myFlex__row establish__section">
            <div class="col-12 col-md-6">
                <div class="servThumb_col paddingSmTop_60">
                    <img src="{{ asset('images/s1.png') }}" alt="" class="servImgFluid">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="servEtablish_col paddingSm_60">
                    <h3 class="servTitleLg">1.Establishment of the restaurant</h3>
                    <p class="servDesmd">We help you establish the restaurant and
                        determine its type according to the target audience and the region</p>
                        <div class="absolute__Div"> </div>
                </div>
            </div>
        </div>

        <!--start service 2 identity-->
        <div class="identity__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order__two">
                        <div class="servEtablish_col paddingSm_60">
                            <h3 class="servTitleLg">2.Identity design</h3>
                            <p class="servDesmd">We help you design the identity of the restaurant, 
                            the package and the media identity</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order__one">
                        <div class="identThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s2.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 3 menu design-->
        <div class="menuDesign__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="designmThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s3.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="servEtablish_col bk__yellow paddingSm_60">
                            <h3 class="servTitleLg">3.Menu design</h3>
                            <p class="servDesmd">We help you design the appropriate menu for the restaurant
                                 and the audience in terms of type of meals, quantities and prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 4 operating-->
        <div class="mOperating__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order__two">
                        <div class="servOperating_col col__yellow paddingSm_60">
                            <h3 class="servTitleLg">4.Operating</h3>
                            <p class="servDesmd">With you in operation before ordering from supply to preparation
                                 to cooking and preparation to processing, packaging and delivery</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order__one">
                        <div class="operatingThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s4.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 5 support-->
        <div class="mSupport__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="supportThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s5.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="servSupport_col col__orange paddingSm_60">
                            <h3 class="servTitleLg">5.Backing support</h3>
                            <p class="servDesmd">From the kitchen and equipment to the chef 
                                and staff to delivery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 6 platforms-->
        <div class="splatform__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order__two">
                        <div class="servPlatform_col paddingSm_60">
                            <h3 class="servTitleLg">6.Selling platforms</h3>
                            <p class="servDesmd w__400">We help you sell through delivery apps and your live page</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order__one">
                        <div class="platformThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s6.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 7 financing-->
        <div class="mfinancial__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="financialThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s7.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="servEtablish_col pb__230 paddingSm_60">
                            <h3 class="servTitleLg">7.Operational financing</h3>
                            <p class="servDesmd">We support you by financing purchases and
                                 providing the necessary facilities until selling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start service 8 fromTo-->
        <div class="fromTo__section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order__two">
                        <div class="servEtablish_col pb__290 paddingSm_60">
                            <h3 class="servTitleLg">8.Your restaurant from and to</h3>
                            <p class="servDesmd w__400">Launch your restaurant now and start selling now</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order__one">
                        <div class="fromToThumb_col paddingSmTop_60">
                            <img src="{{ asset('images/s8.png') }}" alt="" class="servImgFluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection