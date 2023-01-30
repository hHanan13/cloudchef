@extends('app')

@section('content')

    <!--start intro section-->
    <section class="intro__section">
        <div class="brand__cloud wow fadeInLeft" data-wow-offet="100" data-wow-duration="2s">
            <h2>@lang('lang.Now You Can')</h2>
            <h3>@lang('lang.And If You Have A Kitchen')</h3>
        </div>
        <div class="main__banner wow fadeInRight" data-wow-offet="100" data-wow-duration="2s">
            <img src="{{ asset('/images/header.png') }}" alt="" class="banner__img">
            <a class="get__started show__started__modal" href="#">
                <span>@lang('lang.get started')</span>
                <img src="{{ asset('/images/arrow.png') }}" alt="" class="arr__img">
            </a>
        </div>
    </section>

    <!--------    started modal ---------->
    <div class="my__modal startedModal" id="startedModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <h3 class="modal__title">@lang('lang.Register and launch your restaurant')</h3>
                            <p>@lang('lang.Content about the service')</p>
                            <a href="#" class="modal__btn show__rest__modal">@lang('lang.New Restaurant')</a>
                            <h3 class="modal__title">@lang('lang.Register your restaurant and receive orders')</h3>
                            <p>@lang('lang.Dedicated content')</p>
                            <a href="#" class="modal__btn show__pro__modal">@lang('lang.Professional Restaurant')</a>
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
    </div>

    <!--------    new restaurant modal ---------->
    <div class="my__modal restModal" id="restModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <h3 class="modal__title">@lang('lang.Register and launch your restaurant')</h3>
                            
                            <form class="register__form" action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <label for="" class="abs__label">@lang('lang.name')</label>
                                        <input type="text"  placeholder="@lang('lang.name')" class="form-control  @error('name') is-invalid @enderror" name="name">
                                        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="form-group col-12 col-lg-6">
                                        <div class="relative__group">
                                            <label for="" class="abs__label">@lang('lang.trade name')</label>
                                            <input type="text" name="store_name" placeholder="@lang('lang.trade name')" class="form-control @error('store_name') is-invalid @enderror">
                                        @error('store_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                        <div class="relative__group">
                                            <label for="" class="abs__label">@lang('lang.city')</label>
                                            <input type="text" name="city" placeholder="@lang('lang.city')" class="form-control @error('city') is-invalid @enderror">
                                        @error('city')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6">
                                        <label for="" class="abs__label">@lang('lang.email')</label>
                                        <input type="email" name="email" placeholder="@lang('lang.email')" class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                    </div>

                                    <div class="form-group col-12 col-lg-6">
                                        <div class="relative__group">
                                            <label for="" class="abs__label">@lang('lang.capital')</label>
                                            <input type="text" name="capital" placeholder="@lang('lang.capital')" class="form-control @error('capital') is-invalid @enderror">
                                        @error('capital')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6">
                                        <div class="relative__group">
                                            <label for="" class="abs__label">@lang('lang.number')</label>
                                            <input type="phone" name="phone" placeholder="@lang('lang.number')" class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                        <div class="relative__group">
                                            <label for="" class="abs__label">@lang('lang.experience')</label>
                                            <input type="number" name="experience" placeholder="@lang('lang.experience')" class="form-control @error('experience') is-invalid @enderror">
                                            <span class="text-danger"> @error('experience') {{$message}} @enderror</span>
                                        </div>
                                    </div>

                                </div> 
                                <h3 class="mid__title">@lang('lang.What kind of food can you prepare from your kitchen?')</h3>
                                <div class="check__wrapper">
                                    
                                    <div class="check__relative">
                                        <input type="checkbox" name="kind[]" class="check__input" value="party">
                                        <div class="food__wrap">
                                            <span class="icon-torta ico__icon"></span>
                                            <span>@lang('lang.party')</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" name="kind[]" class="check__input" value="pastry">
                                        <div class="food__wrap">
                                            <span class="icon-pastry ico__icon"></span>
                                            <span>@lang('lang.pastry')</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" name="kind[]" class="check__input" value="cake">
                                        <div class="food__wrap">
                                            <span class="icon-cake ico__icon"></span>
                                            <span>@lang('lang.cake')</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" name="kind[]" class="check__input" value="burger">
                                        <div class="food__wrap">
                                            <span class="icon-burger ico__icon"></span>
                                            <span>@lang('lang.burger')</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" name="kind[]" class="check__input" value="healthy">
                                        <div class="food__wrap">
                                            <span class="icon-healthy ico__icon"></span>
                                            <span>@lang('lang.healthy')</span>
                                        </div>
                                    </div>
                                </div>
                                <label class="terms__label">
                                    <input type="checkbox" class="terms__check">
                                    <span class="agree__des">
                                        @lang('lang.agree to the') <a href="#" class="terms__link openTerms__modal">@lang('lang.terms and conditions')</a>
                                    </span>
                                </label>
                                 <button type="submit" class=" modal__btn next__btn">@lang('lang.next')</button>
                                </div>
                                 
                            </form>

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
    </div>
    @if(session()->has('status')))

    <div class="my__modal confirmModal" id="confirmModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <div class="confirm__card">
                                <img src="{{ asset('/images/check.png') }}" alt="">
                                <p>You will be contacted as soon as possible.</p>
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
    </div>

        <div class="text-success">{{ session('status') }}</div>

        @endif
   
    <!--------    professional restaurant modal ---------->
    <div class="my__modal proModal" id="proModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <h3 class="modal__title">@lang('lang.Register and launch your restaurant')</h3>
                            <form class="register__form" action="{{ route('user.storepro') }}" method="POST">
                                @csrf
                               
                                        <div class="row">
                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.name')</label>
                                                <input type="text"  placeholder="@lang('lang.name')" class="form-control @error('name') is-invalid @enderror" name="name">
                                                <!-- @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror -->
                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.number')</label>
                                                <input type="tel" name="phone" placeholder="@lang('lang.number')" class="form-control @error('phone') is-invalid @enderror">
                                                <!-- <span class="text-danger"> @error('phone') {{$message}} @enderror</span> -->

                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.brand name')</label>
                                                <input type="text" name="store_name" placeholder="@lang('lang.brand name')" class="form-control @error('store_name') is-invalid @enderror">
                                                <!-- <span class="text-danger">

                                                            @error('store_name') {{$message}} @enderror
                                                        </span> -->
                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.city')</label>
                                                <input type="text" name="city" placeholder="@lang('lang.city')" class="form-control @error('city') is-invalid @enderror">
                                                <!-- <span class="text-danger"> @error('city') {{$message}} @enderror</span> -->
                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.website')</label>
                                                <input type="text" name="website" placeholder="@lang('lang.website')" class="form-control @error('website') is-invalid @enderror">
                                                <!-- <span class="text-danger"> @error('website') {{$message}} @enderror</span> -->

                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.number of employees')</label>
                                                <input type="number" name="num_emp" placeholder="@lang('lang.number of employees')" class="form-control @error('num_emp') is-invalid @enderror">
                                                <!-- <span class="text-danger"> @error('num_emp') {{$message}} @enderror</span> -->

                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                                <label for="" class="abs__label">@lang('lang.email')</label>
                                                <input type="email" name="email" placeholder="@lang('lang.email')" class="form-control @error('email') is-invalid @enderror">
                                                <!-- @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror -->
                                            </div>

                                            <div class="form-group col-12 col-lg-6">
                                            <label for="" class="abs__label">@lang('lang.number of branches')</label>
                                                <input type="number" name="num_branches" placeholder="@lang('lang.number of branches')" class="form-control @error('num_branches') is-invalid @enderror">
                                                <!-- <span class="text-danger"> @error('num_branches') {{$message}} @enderror</span> -->

                                            </div>


                                        </div> 
                                       <h5 class="mid__title">@lang('lang.work time')</h5>
                                       <div>
                                            <div class="time__wrapper">
                                                <div class="time__col">
                                                    <label>@lang('lang.from:') </label>
                                                    <select class="time__select" name="start">
                                                        <option value="8:00 AM" selected>8:00 AM</option>
                                                        <option value="9:00 AM">9:00 AM</option>
                                                        <option value="10:00 AM" >10:00 AM</option>
                                                    </select>
                                                </div>
                                                <div class="time__col">
                                                    <label>@lang('lang.To:') </label>
                                                    <select class="time__select" name="end">
                                                        <option value="9:00 PM" selected>9:00 PM</option>
                                                        <option value="10:00 PM">10:00 PM</option>
                                                        <option value="11:00 PM" >11:00 PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h3 class="mid__title">@lang('lang.What kind of food can you prepare from your kitchen?')</h3>
                                            <div class="check__wrapper">
                                                <div class="check__relative">
                                                    <input type="checkbox" name="kind[]" class="check__input" value="party">
                                                    <div class="food__wrap">
                                                        <span class="icon-torta ico__icon"></span>
                                                        <span>@lang('lang.party')</span>
                                                    </div>
                                                </div>
                                                <div class="check__relative">
                                                    <input type="checkbox" name="kind[]" class="check__input" value="pastry">
                                                    <div class="food__wrap">
                                                        <span class="icon-pastry ico__icon"></span>
                                                        <span>@lang('lang.pastry')</span>
                                                    </div>
                                                </div>
                                                <div class="check__relative">
                                                    <input type="checkbox" name="kind[]" class="check__input" value="cake">
                                                    <div class="food__wrap">
                                                        <span class="icon-cake ico__icon"></span>
                                                        <span>@lang('lang.cake')</span>
                                                    </div>
                                                </div>
                                                <div class="check__relative">
                                                    <input type="checkbox" name="kind[]" class="check__input" value="burger">
                                                    <div class="food__wrap">
                                                        <span class="icon-burger ico__icon"></span>
                                                        <span>@lang('lang.burger')</span>
                                                    </div>
                                                </div>
                                                <div class="check__relative">
                                                    <input type="checkbox" name="kind[]" class="check__input" value="healthy">
                                                    <div class="food__wrap">
                                                        <span class="icon-healthy ico__icon"></span>
                                                        <span>@lang('lang.healthy')</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="terms__label">
                                                <input type="checkbox" class="terms__check" name="cond">
                                                <span class="agree__des">
                                                 @lang('lang.agree to the') <a href="#" class="terms__link openTerms__modal">@lang('lang.terms and conditions')</a>
                                                </span>
                                            </label>
                                            <span class="text-danger"> @error('cond') {{$message}} @enderror</span>
                                            <button type="submit" class=" modal__btn next__btn">@lang('lang.next')</button>
                                       </div>
                                 
                            </form>

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
    </div>

    <!--------   second pro restaurant modal ---------->
    <div class="my__modal sec__proModal" id="sec__proModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <h5 class="work__time">work time</h5>
                            <div class="time__wrapper">
                                <div class="time__col">
                                    <label>from: </label>
                                    <select class="time__select">
                                        <option value="8:00 AM" selected>8:00 AM</option>
                                        <option value="8:00 AM">9:00 AM</option>
                                        <option value="8:00 AM" >10:00 AM</option>
                                    </select>
                                </div>
                                <div class="time__col">
                                    <label>To: </label>
                                    <select class="time__select">
                                        <option value="8:00 AM" selected>9:00 PM</option>
                                        <option value="8:00 AM">10:00 PM</option>
                                        <option value="8:00 AM" >11:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            <form action="" class="register__form">
                                <h5 class="work__time">work time</h5>
                                <div class="check__wrapper">
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input" checked>
                                        <div class="food__wrap">
                                            <span class="icon-torta ico__icon"></span>
                                            <span>party</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-pastry ico__icon"></span>
                                            <span>pastry</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-cake ico__icon"></span>
                                            <span>cake</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-burger ico__icon"></span>
                                            <span>burger</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-healthy ico__icon"></span>
                                            <span>healthy</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="modal__btn next__btn show__confirm__modal">next</a>
                            </form>
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
    </div>

    <!--------    confirm modal ---------->
    <div class="my__modal confirmModal" id="confirmModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <div class="confirm__card">
                                <img src="{{ asset('/images/check.png') }}" alt="">
                                <p>You will be contacted as soon as possible.</p>
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
    </div>


    <!--start kitchens section-->
    <section class="kitchens__section">
        <div class="container">
            <div class="row kitchen__row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kt__wrap">
                        <img src="{{ asset('/images/kt.png') }}" alt="" class="kt__img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card_wrap pt__80">
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s">
                                <img src="{{ asset('/images/k-1.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.1s">@lang('lang.Shared kitchens')</span>
                        </div>
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('/images/k-2.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.3s">@lang('lang.More income')</span>
                        </div>
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.4s">
                                <img src="{{ asset('/images/k-3.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.5s">@lang('lang.Aboard new brands')</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 pt__80">
                    <div class="ght__wrap">
                        <img src="{{ asset('/images/ght.png') }}" alt="" class="ght__img wow fadeInLeft" data-wow-offset="100" data-wow-duration="2s">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start started section-->
    <section class="started__section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="gets__wrap">
                        <a href="#" class="get__link show__started__modal hvr-sweep-to-right">
                            <span>@lang('lang.get started')</span>
                            <img src="{{ asset('/images/arr2.png') }}" alt="" class="get__arr">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="started__des">
                        <p>@lang('lang.restaurant at the lowest costs')</p>
                        <p>@lang('lang.raising the operating rate')</p>
                        <p>@lang('lang.operate multiple brands')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start mission section-->
    <section class="mission__section">
            <div class="mission__row">
                <div class="col-12 col-lg-5 pt__118">
                    <div class="mission__card wow zoomInUp" data-wow-offet="100" data-wow-duration="1s">
                        <img src="{{ asset('/images/m-1.png') }}" alt="" class="miss__img">
                        <h3 class="mission__title">@lang('lang.our mission')</h3>
                    </div>
                    <div class="mission__des">
                        <p>@lang('lang.injecting new virtual brands')</p>
                    </div>
                </div>
                <div class="col-12 col-lg-7 pt__118 bk__white px-0">
                    <div class="mission__card ps__95 wow zoomInUp" data-wow-offet="100" data-wow-duration="1s">
                        <img src="{{ asset('/images/m-2.png') }}" alt="" class="miss__img">
                        <h3 class="mission__title">@lang('lang.our values')</h3>
                    </div>
                    <div class="mission__des ps__95">
                        <p>@lang('lang.vital role in employee performance')</p>
                    </div>
                </div>
            </div>
    </section>

     <!--start why section-->
     <section class="why__section">
        <div class="container why__container">
            <h3 class="why__title">@lang('lang.Why Cloud Chef')</h3>
            <p>@lang('lang.average utilization rates')</p>
            <img src="{{ asset('/images/ask.png') }}" alt="" class="ask__img wow tada" data-wow-iteration="2" data-wow-duration="1.5s" data-wow-offet="100" data-wow-delay="0.3s">
        </div>
     </section>

     <!--start features section-->
    <section class="features__section">
        <div class="container">
            <div class="row feature__row">
                <div class="col-12 col-md-6">
                    <div class="feature__card">
                        <img src="{{ asset('/images/f-1.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">@lang('lang.Zero upfront cost')</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card">
                        <img src="{{ asset('/images/f-2.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">@lang('lang.Increase your kitchen usage')</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card mb-lg-0">
                        <img src="{{ asset('/images/f-3.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">@lang('lang.Serving new customers')</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card mb-lg-0 mb-0">
                        <img src="{{ asset('/images/f-4.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">@lang('lang.monthly profit')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start about section-->
    <section class="about__section">
        <div class="row mx-0">
            <div class="col-12 col-lg-5 px-0">
                <div class="about__images">
                    <div class="about__one">
                        <img src="{{ asset('/images/a-1.png') }}" alt="" class="about__one_img">
                        <div class="about_overlay"></div>
                    </div>
                    <div class="about__two">
                        <img src="{{ asset('/images/a-2.png') }}" alt="" class="about__two_img">
                        <div class="about_overlay"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 px-0">
                <div class="about__content">
                    <h3 class="about__title">@lang('lang.About Cloud Chef')</h3>
                    <div class="about__des">
                        <p>@lang('lang.business-to-business (B2B) platform')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start icons section-->
    <section class="icons__section">
        <div class="container icons__container">
            <div class="row icons__row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s">
                        <img src="{{ asset('/images/s-1.png') }}" alt="">
                        <h3>@lang('lang.speed')</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.2s">
                        <img src="{{ asset('/images/s-2.png') }}" alt="">
                        <h3>@lang('lang.innovation')</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.4s">
                        <img src="{{ asset('/images/s-3.png') }}" alt="">
                        <h3>@lang('lang.trust')</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.6s">
                        <img src="{{ asset('/images/s-4.png') }}" alt="">
                        <h3>@lang('lang.respect')</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<!-- @push('scripts')
<script>
    //    var limit = 2;
    //     $('input.check__input').on('change', function(e) {
    //     if($(this).siblings(':checked').length >= limit) {
    //         this.checked = false;
    //     }
    //     });
    $('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 3) {
        $(this).prop('checked', false);
        alert("allowed only 2 choice for your kitchen");
    }
});
    </script>
@endpush -->