@extends('app')

@section('content')

        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <div class="confirm__card">
                                <img src="{{ asset('/images/ch.png') }}" alt="">
                                <p>@lang('lang.You will be contacted as soon as possible.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="contact__info">
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
                    </div>
                </div>
            </div>
        </div>

@endsection