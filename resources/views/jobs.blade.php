@extends('app')

@section('content')

<section class="jobs__section">
        <div class="container job__container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <ul class="nav nav-pills dash__inner__pills mb__66">
                        <li class="nav-item">
                            <a class="nav-link active" href="#curr__wrapper" data-toggle="tab">
                                @lang('lang.current functions')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#coll__orders" data-toggle="tab">
                                @lang('lang.Collaborative Training')
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"  id="myjob__tabs">
                        <div class="curr__wrapper tab-pane fade in active show" role="tabpanel" id="curr__wrapper">
                            <form action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data" class="register__form jobs__from pt__70">
                            @csrf
                                <div class="d__flex">
                                    <div class="col-12 col-md-6">
                                        <select class="nice-select dashboard__select" name="job_name">
                                            <option value="all" selected>@lang('lang.managing director')</option>
                                            <option value="Executive Chef">@lang('lang.Executive Chef')</option>
                                            <option value="Assistant Chef">@lang('lang.Sales Specialist')</option>
                                        </select>
                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.name')</label>
                                                <input type="text" placeholder="@lang('lang.name')" class="form-control @error('name') is-invalid @enderror" name="name">
                                                <span class="text-danger"> @error('name') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.email')</label>
                                                <input type="email" placeholder="@lang('lang.email')" class="form-control @error('email') is-invalid @enderror" name="email">
                                                <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.number')</label>
                                                <input type="phone" placeholder="@lang('lang.number')" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.city')</label>
                                                <input type="text" placeholder="@lang('lang.city')" class="form-control @error('city') is-invalid @enderror" name="city">
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.age')</label>
                                                <input type="text" placeholder="@lang('lang.age')" class="form-control @error('age') is-invalid @enderror" name="age">
                                            </div> 
                                        </div>
                                        <div class="relative__group">
                                            <label for="" class="before__label">@lang('lang.type')</label>
                                            <label class="type__label">
                                                <input type="radio" name="type" value="male">
                                                <span>@lang('lang.male')</span>
                                            </label>
                                            <label class="type__label">
                                                <input type="radio" name="type" value="female">
                                                <span>@lang('lang.female')</span>
                                            </label>
                                        </div>
                                        <button type="submit" href="#" class="modal__btn next__btn">@lang('lang.next')</button>
                                    </div>
                                    <div class="col-12 col-md-6 align__items">
                                        <div class="file__group mb__44">
                                            <input type="file" class="lg__control @error('image') is-invalid @enderror" name="image">
                                            <span>@lang('lang.Please add your photo')</span>
                                            <img src="{{ asset('images/user2.png') }}" class="icon__user">
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="cv__group">
                                            <span>@lang('lang.attach cv')</span>
                                            <input type="file" class="sm__control @error('file_job') is-invalid @enderror" name="file_job">
                                            <img src="{{ asset('images/upload.png') }}" alt="" class="upload__img">
                                            @error('file_job')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="relative__textarea">
                                            <textarea class="jobs__textarea" placeholder="@lang('lang.Your Features')" maxlength="100" name="notes"></textarea>
                                            <div class="abs__value">
                                                <span class="number__increase">0</span> / <span>100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="coll__orders tab-pane fade" role="tabpanel" id="coll__orders">
                        <form action="{{ route('jobs.storetraining') }}" method="post" enctype="multipart/form-data" class="register__form jobs__from pt__70">
                            @csrf
                                <div class="d__flex">
                                    <div class="col-12 col-md-6">
                                        <select class="nice-select dashboard__select" id="dashboard__select" name="job_name">
                                            <option value="sales">@lang('lang.sales')</option>
                                            <option value="cook">@lang('lang.cook')</option>
                                            <option value="accountant" selected>@lang('lang.accountant')</option>
                                            <option value="marketing">@lang('lang.marketing')</option>
                                        </select>
                                        <div class="relative__group option__none">
                                            <label class="type__label">
                                                <input type="radio" name="work_from" value="work office" class="@error('work_from') is-invalid @enderror">
                                                <span>@lang('lang.work office')</span>
                                            </label>
                                            <label class="type__label">
                                                <input type="radio" name="work_from" value="work from home" class="@error('work_from') is-invalid @enderror">
                                                <span>@lang('lang.work from home')</span>
                                            </label>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.name')</label>
                                                <input type="text" placeholder="@lang('lang.name')" class="form-control @error('name') is-invalid @enderror" name="name">
                                                <span class="text-danger"> @error('name') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.email')</label>
                                                <input type="email" placeholder="@lang('lang.email')" class="form-control @error('email') is-invalid @enderror" name="email">
                                                <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.number')</label>
                                                <input type="phone" placeholder="@lang('lang.number')" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                            <span class="text-danger"> @error('phone') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.city')</label>
                                                <input type="text" placeholder="@lang('lang.city')" class="form-control @error('city') is-invalid @enderror" name="city">
                                            <span class="text-danger"> @error('city') {{$message}} @enderror</span>
                                            </div> 
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="relative__group">
                                                <label for="" class="abs__label">@lang('lang.age')</label>
                                                <input type="text" placeholder="@lang('lang.age')" class="form-control @error('age') is-invalid @enderror" name="age">
                                            <span class="text-danger"> @error('age') {{$message}} @enderror</span>
                                            </div> 
                                        </div>
                                        <div class="relative__group">
                                            <label for="" class="before__label">@lang('lang.type')</label>
                                            <label class="type__label">
                                                <input type="radio" name="type" value="male">
                                                <span>@lang('lang.male')</span>
                                            </label>
                                            <label class="type__label">
                                                <input type="radio" name="type" value="female">
                                                <span>@lang('lang.female')</span>
                                            </label>
                                        </div>
                                        <button type="submit" href="#" class="modal__btn next__btn">@lang('lang.next')</button>
                                    </div>
                                    <div class="col-12 col-md-6 align__items">
                                        <div class="file__group mb__44">
                                            <input type="file" class="lg__control @error('image') is-invalid @enderror" name="image">
                                            <span>@lang('lang.Please add your photo')</span>
                                            <img src="{{ asset('images/user2.png') }}" class="icon__user">
                                            <span class="text-danger"> @error('image') {{$message}} @enderror</span>
                                        </div>
                                        <div class="cv__group">
                                            <span>@lang('lang.attach cv')</span>
                                            <input type="file" class="sm__control @error('file_job') is-invalid @enderror" name="file_job">
                                            <img src="{{ asset('images/upload.png') }}" alt="" class="upload__img">
                                            <span class="text-danger"> @error('file_job') {{$message}} @enderror</span>
                                        </div>
                                        <div class="relative__textarea">
                                            <textarea class="jobs__textarea" placeholder="@lang('lang.Your Features')" maxlength="100" name="notes"></textarea>
                                            <div class="abs__value">
                                                <span class="number__increase">0</span> / <span>100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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