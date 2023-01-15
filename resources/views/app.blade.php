<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Keywords" content="cloudchef, Restaurant , Orders">
    
    <title>Cloud Chef</title>
    <link href="{{asset('/images/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{asset('/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/nice-select.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/hover.css')}}" rel="stylesheet">
    <link href="{{asset('/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('/css/slick-theme.css')}}" rel="stylesheet">
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

    <!--sidebar-->
   <div class="mob-overlay"></div>
   <div class="sidebar-wrapper">
        <div class="container">
            <div class="m-head">
                <h3>main menu</h3>
            </div>
            <div id="burgerBtn"></div>
            <ul class="my__navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">@lang('lang.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show__started__modal" href="#"> @lang('lang.Restaurant Registration')</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/jobs') }}"> @lang('lang.jobs')</a>
                </li>
                
            </ul>
            @if(App::getLocale() == 'ar')
                   <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="lang__link">En</a>
            @else
                  <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="lang__link">ar</a>
            @endif
        </div>
   </div>
    <!--start header section-->
    <header>
        <div class="logo__wrapper">
           <div class="container logo__container">
                <div class="navbar___flex">
                    <a href="{{ url('/') }}" class="my__logo">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                    <ul class="my__navbar d__mob__none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">@lang('lang.home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link show__started__modal" href="#"> @lang('lang.Restaurant Registration')</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/jobs') }}"> @lang('lang.jobs')</a>
                        </li>
                    </ul>
                </div>
                @if(App::getLocale() == 'ar')
                   <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="lang__link d__mob__none">En</a>
            @else
                  <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="lang__link d__mob__none">ar</a>
            @endif
                <button class="navbar-toggler" type="button" id="sidebar_toggler">
                    <i class="fa-solid fa-bars"></i>
                </button>
           </div>  
        </div>
    </header>
    <!--end header-->

        <div>
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
       </div>
            @yield('content')
        
    <!--start footer-->
    <footer class="footer">
        <span>Cloud Chef © 2022</span>
    </footer>

    <!-- to top button-->
    <a href="#" class="go-top" data-toggle="tooltip" title="" data-placement="left" data-original-title="go to top" >
        <i class="fa fa-chevron-up"></i>
    </a>

    <script src="//code.tidio.co/86nsqykho96qzs4qymjicyjate6wtxzh.js" async></script>

    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
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
        
</html>
