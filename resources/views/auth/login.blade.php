
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
    
     <div class="login__wrapper__page">
<!-- 
     @if(App::getLocale() == 'ar')
                   <a href="{{url('/en/'.request()->segment(3))}}" class="lang__link">En</a>
            @else
                  <a href="{{url('/ar/'.request()->segment(3))}}" class="lang__link">ar</a>
            @endif -->

        <div class="login__card">
            <form method="POST" action="{{ route('login') }}" class="register__form">
                @csrf
                <a href="{{ url('/') }}" class="login__logo">
                    <img src="{{ asset('/images/logo.png') }}" alt="">
                </a>
                <h3 class="login__title">@lang('lang.welcome')...</h3>
                <input type="email" placeholder="@lang('lang.email')" name="email" class="form-control" id="username">
                <input type="password" placeholder="@lang('lang.password')" name="password" class="form-control" id="password">
                <button type="submit" class="login__btn">@lang('lang.login')</button>
            </form>
        </div>
     </div>

</body>
<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <script src="{{asset('/js/jquery.nice-select.js')}}"></script>
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