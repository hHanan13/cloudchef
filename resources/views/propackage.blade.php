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
                            <span>@lang('lang.Professional restaurant package')</span>
                        </div>
                        <ol class="packageCont">
                            <li>@lang('lang.Create your account on the platform.')</li>
                            <li>@lang('lang.Integration with target restaurants.')</li>
                            <li>@lang('lang.Integration with multiple delivery platforms.')</li>
                            <li>@lang('lang.Account management training.')</li>
                            <li>@lang('lang.Supportive administrative support.')</li>
                            <li>@lang('lang.Operational financing')</li>
                        </ol>
                        <div class="flexEndPack">
                            <p>@lang('lang.Join and increase your restaurant sales now')</p>
                            <a href="{{ route('payment.create') }}" class="modal__btn next__btn my-0 mt__sm20">@lang('lang.next')</a>
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