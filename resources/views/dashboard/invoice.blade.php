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
                                            <input type="text" placeholder="@lang('lang.search')..." name="" value="" class="form-control">
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
                        <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" href="{{ url('/jobs') }}">
                            <div class="dashboard__center row px-0">
                                
                                <div class="col-12 col-xl-9">

                                    @if (session('message'))
                                    <div class="alert alert-success">{{ session('message')}}</div>
                                    @endif

                                    <div class="invcTopFlex">
                                        <div class="inv__numb">
                                            <small>invoice</small>
                                            <span>024681</span>
                                        </div>
                                        <div class="printDwnFlx">
                                            <a href="#" class="kt-nav__link print__link"><img src="{{ asset('images/print.svg') }}" alt=""></a>
                                            <a href="#" class="kt-nav__link" download><img src="{{ asset('images/down.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="invoiceWrapper">
                                        <div class="myFlex__row">
                                            <div class="col-12 col-lg-5">
                                                <form method="get" class="search__form">
                                                    @csrf

                                                    <div class="form__group mb__14">
                                                        <input type="text" placeholder="E-mail" class="form-control" name="search" value="{{ request()->get('search') }}">
                                                        <button type="submit" class="submit__btn">
                                                            <i class="fa-solid fa-magnifying-glass search__icon"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <form action="{{ url('admin/storeinvo') }}" method="Post" enctype="multipart/form-data" class="register__form">
                                                    
                                                                @csrf
                                                    <a href="#" class="newCBtn">+ Add a new customer</a>
                                                    <label class="mdFtitle">Date created</label>
                                                    <div class="myFlex__row mb__20">
                                                        <div class="timeCol_relative w__70">
                                                            <i class="fa-solid fa-chevron-down down__absBtn"></i>
                                                            <input class="datepicker timeInput_md" name="date" data-date-format="mm/dd/yyyy" placeholder="20/02/2022">
                                                        </div>
                                                        <div class="timeCol_relative w__25">      
                                                            <input class="timeInput_small dashboard__select timeInput_md" name="clock" id="stepExample1" placeholder="9:00 PM">
                                                        </div>
                                                    </div>
                                                    <label class="mdFtitle">add a product</label>
                                                    <select class="nice-select dashboard__select timeInput_md mb__20" name="product">
                                                        <option value="all" selected>Emerging Restaurant Package</option>
                                                        <option value="one">one</option>
                                                        <option value="two">two</option>
                                                        <option value="three">three</option>
                                                    </select>
                                                    <label class="mdFtitle">Quantity</label>
                                                    <input type="text" name="quantity" placeholder="0" class="form-control mb__20">
                                                    <div class="myFlex__row mb__20">
                                                        <div class="w__70">
                                                            <label class="mdFtitle">price</label>
                                                            <div class="timeCol_relative">
                                                                <span class="down__absBtn">SR</span>
                                                                <input type="text" name="price" class="dashboard__select timeInput_md" placeholder="2000">
                                                            </div>
                                                        </div>
                                                        <div class="w__25">
                                                            <label class="mdFtitle">discount</label> 
                                                            <div class="timeCol_relative">
                                                                <span class="down__absBtn">%</span>
                                                                <input type="text" name="discount" class="dashboard__select timeInput_md" placeholder="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="mdFtitle">final price</label>
                                                    <div class="timeCol_relative">
                                                        <span class="down__absBtn">SR</span>
                                                        <input type="text" name="final_price" class="dashboard__select timeInput_md mb__20 input__bold" placeholder="1800">
                                                    </div>
                                                    <div class="relative__textarea areaWidth__100">
                                                        <textarea class="jobs__textarea invoice__textarea" name="notes" placeholder="Notes" maxlength="100"></textarea>
                                                        <div class="abs__value">
                                                            <span class="number__increase">0</span> / <span>100</span>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="invoice__link mt__40">
                                                        <img src="{{ asset('images/invoice.svg') }}" alt="">
                                                        create invoice
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="rltvInvoice__wrapper">
                                                    @if(count($clients) > 0)

                                                        @foreach($clients as $row)
                                                            <!--row one-->
                                                            <div class="invoice__details">
                                                                <div class="myFlex__row">
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">name</label>
                                                                        <span class="invoice__info">{{$row->name}}</span>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">number</label>
                                                                        <span class="invoice__info">{{$row->phone}}</span>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">website</label>
                                                                        <span class="invoice__info">{{$row->website}}</span>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">brand name</label>
                                                                        <span class="invoice__info">{{$row->store_name}}</span>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">city</label>
                                                                        <span class="invoice__info">{{$row->city}}</span>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                        <label class="inovice_label">email</label>
                                                                        <span class="invoice__info">{{$row->email}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    @else

                                                            <tr>
                                                                <td colspan="5" class="text-center">No Data Found</td>
                                                            </tr>

                                                    @endif
                                                    
                                                    <div class="newCustFrm_wrap">
                                                        <form action="{{ url('admin/storeinvoice') }}" method="Post" enctype="multipart/form-data" class="register__form">
                                                            {{csrf_field()}}
                                                                @csrf

                                                            <div class="row">
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">name</label>
                                                                        <input type="text" name="name" placeholder="Raana Elnbawy" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number</label>
                                                                        <input type="text" name="phone" placeholder="number" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">brand name</label>
                                                                        <input type="text" name="store_name" placeholder="brand name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">city</label>
                                                                        <input type="text" name="city" placeholder="city" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">website</label>
                                                                        <input type="url" name="website" placeholder="website" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number of employees</label>
                                                                        <input type="text" name="num_emp" placeholder="number of employees" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">email</label>
                                                                        <input type="email" name="email" placeholder="email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number of branches</label>
                                                                        <input type="text" name="num_branches" placeholder="number of branches" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="alignFlex__end">
                                                                <button type="submit" class="modal__btn next__btn">add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-3">
                                    <div class="pt__30"> 
                                        <div class="yellow__card bk__site">
                                            <h3 class="side__title">visit website</h3>
                                            <div class="flex__end">
                                                <span class="red__num">300</span>
                                                <span>client</span>
                                            </div>
                                        </div>
                                        <div class="yellow__card rg__site">
                                            <h3 class="side__title">Registered</h3>
                                            <div class="flex__end">
                                                <span class="red__num">199</span>
                                                <span>client</span>
                                            </div>
                                            <h5 class="typCusTitle orgColtiTle">new customer</h5>
                                            <div class="flex__end">
                                                <span class="grey__num orgColtiTle">120</span>
                                                <span>client</span>
                                            </div>
                                            <h5 class="typCusTitle greColtiTle">partner client</h5>
                                            <div class="flex__end">
                                                <span class="grey__num greColtiTle">79</span>
                                                <span>client</span>
                                            </div>
                                            <h5 class="typCusTitle oBColtiTle">Client under follow up</h5>
                                            <div class="flex__end">
                                                <span class="grey__num oBColtiTle">120</span>
                                                <span>client</span>
                                            </div>
                                            <h5 class="typCusTitle redColtiTle">Discontinued client</h5>
                                            <div class="flex__end">
                                                <span class="grey__num redColtiTle">79</span>
                                                <span>client</span>
                                            </div>
                                            <h5 class="typCusTitle grColtiTle">Uninterested customer</h5>
                                            <div class="flex__end">
                                                <span class="grey__num grColtiTle">79</span>
                                                <span>client</span>
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
                        <span>Cloud Chef ?? 2022</span>
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