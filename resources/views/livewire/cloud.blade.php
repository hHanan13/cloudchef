<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Chef</title>
    <link href="{{asset('/images/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{asset('/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/hover.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/css/media.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style-en.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @if(app()->getLocale()=='ar')
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link href="{{asset('assets/front/css/style_rtl.css')}}" rel="stylesheet">
@endif

@livewireStyles 

</head>

<body class="home-page">
     <!--loader-->
     <div class="loader-container" id="loader-container">
        <div class="loader">
            <div class="bounce-one"></div>
            <div class="bounce-two"></div>
        </div>
     </div>

     @livewire('cloudhome') 

    <!--start footer-->
    <footer class="footer">
        <span>Cloud Chef © 2022</span>
    </footer>

    <!-- to top button-->
    <a href="#" class="go-top" data-toggle="tooltip" title="" data-placement="left" data-original-title="go to top" >
        <i class="fa fa-chevron-up"></i>
    </a>
    @livewireScripts 

    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/wow.min.js')}}"></script>
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
