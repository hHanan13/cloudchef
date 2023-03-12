<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Chef</title>
    <link href="{{asset('/images/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{asset('/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/nice-select.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/jquery.timepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/hover.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/css/media.css')}}" rel="stylesheet">
        @if(app()->getLocale()=='en')
        <link href="{{asset('/css/style-en.css')}}" rel="stylesheet">
        @endif
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @if(app()->getLocale()=='ar')
    
        <link href="{{asset('/css/style-ar.css')}}" rel="stylesheet">
        @endif
 
</head>
<body class="home-page">
     <!--loader-->
     <div class="loader-container" id="loader-container">
        <div class="loader">
            <div class="bounce-one"></div>
            <div class="bounce-two"></div>
        </div>
     </div>
     <div class="dash__wrapper">
        <div class="container dashboard__main__container">
            <div class="row dashborad__row">
                <div class="col-12 col-md-2 col-lg-1">
                    <div class="dashsidebar">
                        <div class="sidebar__head">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="sidebar__content">
                            <ul class="nav nav-pills dash__pills">
                                    <li class="nav-item">
                                        <a class="nav-link active sidebar__link" href="{{ url('/admin/home') }}">
                                            <i class="dash__icon"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sidebar__link" href="{{ url('admin/home') }}" >
                                            <i class="users__icon"></i>
                                        </a>
                                    </li>
                            </ul>
                            @if(App::getLocale() == 'ar')
                            <a class="nav-link sidebar__link" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                            @else
                            <a class="nav-link sidebar__link" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                                <i class="fa-solid fa-globe"></i>
                                            </a>
                            @endif
                            
                        </div>
                    </div>
                </div>
               
                <div class="col-12 col-md-10 col-lg-11">
                    <form method="get" class="search__form">
                                <div class="dashtop__flex">
                                    <div class="col-12 col-lg-6 col-xl-3">
                                        <div class="form__group">
                                            <input type="text" placeholder="@lang('lang.search')..." name="search" value="{{ request()->get('search') }}" class="form-control">
                                            <button type="submit" class="submit__btn">
                                                <i class="fa-solid fa-magnifying-glass search__icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-3">
                                        <div class="form__group">
                                            <label for="">@lang('lang.category')</label>
                                            <select class="nice-select dashboard__select">
                                                <option value="all" selected>all</option>
                                                <option value="one">one</option>
                                                <option value="two">two</option>
                                                <option value="three">three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-3">
                                        <div class="form__group">
                                            <label for="">@lang('lang.date')</label>
                                            <div class="input__group" data-provide="datepicker">
                                                <input type="text" name="start" placeholder="20/2/2022" id="datepicker1" class="datepicker" data-date-format="mm/dd/yyyy">
                                                <i class="calender__icon" id="calender__icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-3">
                                        <div class="dropdown login__dropdown">
                                            <button class="login__dropbtn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <img src="{{ asset('images/user.png')}}" alt="" class="drop__img">
                                                <span>{{auth()->user()->name }}</span>
                                                <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">@lang('lang.log out')</a>
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </form>
                   
                    <div class="tab-content"  id="myTabContentwrapper">
                        <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
                            <div class="dashboard__center row px-0">
                                <div class="col-12 col-xl-9">
                                    <ul class="nav nav-pills dash__inner__pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#current_wrapper" data-toggle="tab">
                                                @lang('lang.offers') (40)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#collaborative_orders" data-toggle="tab">
                                                @lang('lang.news') (08)
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content"  id="myTabinner">
                                        <div class="current_wrapper tab-pane fade in active show" role="tabpanel" id="current_wrapper">
                                            <div class="table__wrapper">
                                                <div class="dashboard__table">
                                                    <div class="thead">
                                                        <div class="row">
                                                            <div class="col"> @lang('lang.title') </div>
                                                            <div class="col"> @lang('lang.content')</div>
                                                            <div class="col"> @lang('lang.date') </div>
                                                            <div class="col"> @lang('lang.category') </div>
                                                            <div class="col"> @lang('lang.type') </div>
                                                            <div class="col-1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem ipsum dolor sit amet')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col"> @lang('lang.Professional Restaurant') </div>
                                                                <div class="col"> @lang('lang.new customer') </div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem ipsum dolor sit amet')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col"> @lang('lang.New Restaurant') </div>
                                                                <div class="col"> @lang('lang.partner client') </div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem ipsum dolor sit amet')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col"> @lang('lang.Professional Restaurant') </div>
                                                                <div class="col"> @lang('lang.Discontinued client') </div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <a href="{{ url('admin/offer') }}" class="invoice__link">
                                                        <img src="{{ asset('images/offer.svg')}}" alt="">
                                                        @lang('lang.create offer')
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collaborative_orders tab-pane fade" role="tabpanel" id="collaborative_orders">
                                            <div class="table__wrapper">
                                                <div class="dashboard__table">
                                                    <div class="thead">
                                                        <div class="row">
                                                            <div class="col"> @lang('lang.title') </div>
                                                            <div class="col"> @lang('lang.content') </div>
                                                            <div class="col"> @lang('lang.date') </div>
                                                            <div class="col-1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem Ipsum is simply dummy')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem Ipsum is simply dummy')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <div class="twrapper table__row">
                                                        <a href="add_offer.html">
                                                            <div class="row collapse__table">
                                                                <div class="col"> @lang('lang.special offer') </div>
                                                                <div class="col">@lang('lang.Lorem Ipsum is simply dummy')</div>
                                                                <div class="col">2/2/2022</div>
                                                                <div class="col-1">
                                                                    <div class="dropdown dashboard__dropdown">
                                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                    <a href="{{ url('admin/new') }}" class="invoice__link">
                                                        <img src="{{ asset('images/offer2.svg')}}" alt="">
                                                        @lang('lang.create news')
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-md-6 col-xl-3">
                                    <div class="pt__30"> 
                                        <div class="yellow__card bk__site">
                                            <h3 class="side__title">@lang('lang.visit website')</h3>
                                            <div class="flex__end">
                                                <span class="red__num">300</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                        </div>
                                        <div class="yellow__card rg__site">
                                            <h3 class="side__title">@lang('lang.Registered')</h3>
                                            <div class="flex__end">
                                                <span class="red__num">199</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                            <h5 class="red__title">@lang('lang.new')</h5>
                                            <div class="flex__end">
                                                <span class="grey__num">120</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                            <h5 class="red__title">@lang('lang.Professional')</h5>
                                            <div class="flex__end">
                                                <span class="grey__num">79</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                            
                        </div>
                    </div>
               </div>
                    
            
                    <!--start footer-->
                    <footer class="footer">
                        <span>Cloud Chef © 2023</span>
                    </footer>
                
                    <!-- to top button-->
                    <a href="#" class="go-top" data-toggle="tooltip" title="" data-placement="left" data-original-title="go to top" >
                        <i class="fa fa-chevron-up"></i>
                    </a>
                
                    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
                    <script src="{{asset('/js/jquery.nice-select.js')}}"></script>
                    <script src="{{asset('/js/jquery.timepicker.js')}}"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('/js/main.js')}}"></script>
                    <script src="{{asset('/js/wow.min.js')}}"></script>
                    <script src="{{asset('/js/datepicker.js')}}"></script>
                    <script>
                      new WOW().init(); 
                    </script>
                
                        @if(app()->getLocale()=='ar')
                        <script
                                src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.css"
                                integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
                            crossorigin="anonymous">
                            </script>
                        @endif
                        
                </body>
                
</html>            