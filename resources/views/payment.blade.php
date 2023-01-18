@extends('app')

@section('content')

<!--start jobs section-->
<section class="jobs__section">
        <div class="container job__container">
           
                <div class="pay__title">
                    <img src="{{ asset('images/visa.png') }}" alt="" class="visa__img">
                    <span>@lang('lang.pay')</span>
                </div>
                    @if (session('message'))
                                    <div class="alert alert-success">{{ session('message')}}</div>
                    @endif
                <ul class="nav nav-pills payMethod__flex">
                    <li class="nav-item">
                        <a class="nav-link checkPay__wrap active" href="#credit__tab" data-toggle="tab">
                            <div class="mycheckRadio">
                                <i class="payemnt__icon icon-credit"> </i>
                                <h3 class="checkPay__title">@lang('lang.credit card')</h3>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link checkPay__wrap" href="#">
                            <div class="mycheckRadio">
                                <i class="payemnt__icon icon-apple"> </i>
                                <h3 class="checkPay__title">@lang('lang.apple pay')</h3>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link checkPay__wrap" href="#bank__tab" data-toggle="tab">
                            <div class="mycheckRadio">
                                <i class="payemnt__icon icon-bank"> </i>
                                <h3 class="checkPay__title">@lang('lang.bank transfer')</h3>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content"  id="tabWrapper">
                    <div class="current_wrapper tab-pane fade in active show" role="tabpanel" id="credit__tab">
                        <form action="{{route('payment.store')}}" class="payment__form" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="payment__column">
                                <div class="credits__cardsWrap">
                                    <div class="creditCard">
                                        <input type="radio" name="visaRadio" class="visaRadio" checked>
                                        <img src="{{ asset('images/tabby.png') }}" alt="" class="credit__img opacityMD">
                                        <img src="{{ asset('images/rr.png') }}" alt="" class="checkIcon opacityMD">
                                    </div>
                                    <div class="creditCard">
                                        <input type="radio" name="visaRadio" class="visaRadio">
                                        <img src="{{ asset('images/visaa.png') }}" alt="" class="credit__img opacityMD">
                                        <img src="{{ asset('images/rr.png') }}" alt="" class="checkIcon opacityMD">
                                    </div>
                                    <div class="creditCard">
                                        <input type="radio" name="visaRadio" class="visaRadio">
                                        <img src="{{ asset('images/mastercard.png') }}" alt="" class="credit__img opacityMD">
                                        <img src="{{ asset('images/rr.png') }}" alt="" class="checkIcon opacityMD">
                                    </div>
                                </div>
                                <h3 class="mdpay_title">@lang('lang.Credit Card Info')</h3>
                                <label for="" class="payment__label">@lang('lang.name on card')</label>
                                <div class="payment_group">
                                    <input type="text" class="payment__input" name="name">
                                </div>
                                <label for="" class="payment__label">@lang('lang.CARD NUMBER')</label>
                                <div class="payment_group">
                                    <input type="text" class="payment__input" name="number">
                                    <i class="icon__visa"></i>
                                </div>
                                <div class="payment__row">
                                    <div class="width__Colthird">
                                        <label for="" class="payment__label">@lang('lang.cvv number')</label>
                                        <div class="payment_group">
                                            <input type="text" class="payment__input" name="cvc">
                                            <i class="icon__askk"></i>
                                        </div>
                                    </div>
                                    <div class="width__Colthird">
                                        <label for="" class="payment__label">@lang('lang.EXPMONTH')</label>
                                        <select class="payment__input nice-select" name="exp_month">
                                            <option value="MONTH" selected>MONTH</option>
                                            <option value="january">january</option>
                                            <option value="fabruary">fabruary</option>
                                        </select>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="width__Colthird">
                                        <label for="" class="payment__label">@lang('lang.EXPYEAR')</label>
                                        <select class="payment__input nice-select" name="exp_year">
                                            <option value="year" selected>year</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <label class="terms__label">
                                    <input type="checkbox" class="terms__check">
                                        <span class="agree__des">
                                        @lang('lang.agree to the') <a href="{{ url('/conditions') }}" class="terms__link">@lang('lang.terms and conditions')</a>
                                        </span>
                                </label>
                                <button type="submit" class=" modal__btn next__btn">@lang('lang.next')</button>
                            </div>
                        </form>
                    </div>
                    <div class="current_wrapper tab-pane fade in" role="tabpanel" id="bank__tab">

                        <form action="{{route('banktransfer.store')}}" class="payment__form" method="post">
                            @csrf
                            <div class="bankAccounts__cloumn">
                                <h3 class="mdpay_title">@lang('lang.Bank accounts')</h3>
                                <div class="row row__bankInfo">
                                    <div class="col-12 col-lg-4">
                                        <div class="bankInfoCard">
                                            <div class="msrfImg">
                                                <img src="{{ asset('images/rgh.png') }}" alt="">
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">@lang('lang.account name')</h5>
                                                <p class="accountDt">ghalialathman</p>
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">@lang('lang.account number')</h5>
                                                <p class="accountDt">597000010006086110149</p>
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">iban</h5>
                                                <p class="accountDt">Sa1480000597608016110149</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="bankInfoCard">
                                            <div class="msrfImg">
                                                <img src="{{ asset('images/enm.png') }}" alt="">
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">@lang('lang.account name')</h5>
                                                <p class="accountDt">ghalialathman</p>
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">@lang('lang.account number')</h5>
                                                <p class="accountDt">597000010006086110149</p>
                                            </div>
                                            <div class="accountWRap">
                                                <h5 class="accountNamee">iban</h5>
                                                <p class="accountDt">Sa1480000597608016110149</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row uploadRow">
                                    <div class="col-12 col-lg-4">
                                        <div class="uploadFormx">
                                            <h3 class="uploadTitle">@lang('lang.Upload the receipt')</h3>
                                            <input type="email" class="form-control" name="email" placeholder="@lang('lang.e-mail')">
                                            <input type="text" class="form-control" name="name_en" placeholder="@lang('lang.first name')">
                                            <label for="" class="uploadLabel">@lang('lang.Please attach the receipt from here')</label>
                                            <div class="uploadInput">
                                                <span>Select Files</span>
                                                <input type="file" class="sm__control" name="image">
                                                <img src="{{ asset('images/upp.png') }}" alt="" class="upload__img">
                                            </div>
                                            <label class="terms__label">
                                                <input type="checkbox" class="terms__check">
                                                <span class="agree__des">
                                                @lang('lang.agree to the') <a href="{{ url('/conditions') }}" class="terms__link">@lang('lang.terms and conditions')</a>
                                                </span>
                                            </label>
                                            <button type="submit" class=" modal__btn next__btn">@lang('lang.next')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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