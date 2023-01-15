<!-- begin index.tpl -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SpryStore E-commerce Category Bootstrap Responsive Website Template | Home </title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/front/css/style-starter.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">

  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  @if(app()->getLocale()=='ar')
  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link href="{{asset('assets/front/css/style_rtl.css')}}" rel="stylesheet">
    @endif
</head>
<body>

<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
	@include('layouts.header')
    
    </div>

    
</section>
<!-- //w3l-banner-slider-main -->

<section class="bank-accounts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Bank Accounts</h3>
            </div>
        </div>
        <div class="bank-account-section">
            <div class="bank-account">
                <div class="bank-account-info">
                    <div class="bank-logo">
                        <img src="{{asset('assets/front/images/brand/blue.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="bank-details">
                        <ul>
                            <li>Account Name: TEstt test </li>
                            <li>Account Number: 0215315345645</li>
                            <li>IBAN: ASq2r1421021322525151</li>
                        </ul>
                    </div>
                </div>
                <div class="bank-form">
                    <h3>upload receipt</h3>
                    <form method="POST" action="">
                                
                                    
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">Email</label>
                            <div class="col-12">
                                <input type="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">First Name</label>
                            <div class="col-12">
                                <input type="name" name="name" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-12 col-form-label">please upload receit </label>
                            <div class="col-12">
                                <input type="file" name="name" placeholder="">
                            </div>
                        </div>
                        
                    
                        <div class="form-group row">
                        <div class="col-12 text-center">
                            <input type="submit" value="Register" name="Register">
                        </div>
                        
                        </div>
                            
                            
                    </form>
                </div>
            </div>


            <div class="bank-account">
                <div class="bank-account-info">
                    <div class="bank-logo">
                        <img src="{{asset('assets/front/images/brand/blue.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="bank-details">
                        <ul>
                            <li>Account Name: TEstt test </li>
                            <li>Account Number: 0215315345645</li>
                            <li>IBAN: ASq2r1421021322525151</li>
                        </ul>
                    </div>
                </div>
                <div class="bank-form">

                <h3>upload receipt</h3>
                    <form method="POST" action="">
                                
                                    
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">Email</label>
                            <div class="col-12">
                                <input type="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">First Name</label>
                            <div class="col-12">
                                <input type="name" name="name" placeholder="">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-12 col-form-label">please upload receipt </label>
                            <div class="col-12">
                                <input type="file" name="name" placeholder="">
                            </div>
                        </div>
                        
                    
                        <div class="form-group row">
                        <div class="col-12 text-center">
                            <input type="submit" value="Register" name="Register">
                        </div>
                        </div>
                    
                            
                            
                    </form>
                </div>
            </div>
        </div>
            
            </div>
        </div>
    </div>
</section>
   
      @include('front.includes.reviews')
      @include('front.includes.newsletter')
      @include('front.includes.footer')

<script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>

<!--pop-up-box-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>

<script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/front/js/main.js')}}"></script>
@if(app()->getLocale()=='ar')
    <script
        src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
        crossorigin="anonymous">
    </script>
@endif
</body>
</html>

