@extends('app')

@section('content')

 <!--start package section-->
 <section class="package__section">
        <div class="container package__container">
            <div class="row package__row">
            @if (session('message'))
                                    <div class="alert alert-success">{{ session('message')}}</div>
                    @endif
                <div class="col-12 col-lg-8">
                    <div class="package__wrapper">
                        <div class="packTitle">
                            <img src="{{ asset('images/wrd.png') }}" alt="" class="packImgThumb">
                            <span>@lang('lang.Emerging Restaurant Package')</span>
                        </div>
                        <ol class="packageCont">
                            <li> @lang('lang.Establishing the restaurant according to the target audience.')</li>
                            <li> @lang('lang.Designing the identity of the restaurant, packaging and store.')</li>
                            <li> @lang('lang.Ad design and photography of advertising content.')</li>
                            <li> @lang('lang.Menu engineering and design.')</li>
                            <li> @lang('lang.Create your online store.')</li>
                            <li> @lang('lang.Integration with multiple delivery platforms.')</li>
                            <li> @lang('lang.Ads management for your store and your account on delivery platforms.')</li>
                            <li> @lang('lang.Administrative and operational support.')</li>
                            <li> @lang('lang.operational financial')</li>
                            <li> @lang('lang.your restaurant from and to.')</li>
                        </ol>
                        <div class="flexEndPack">
                            <p>@lang('lang.Launch your restaurant now and start selling now.')</p>
                            <a href="{{ route('payment.create') }}" class="modal__btn next__btn my-0">@lang('lang.next')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__info p__absolute">
            <h3 class="contact__title">@lang('lang.contact info')</h3>
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