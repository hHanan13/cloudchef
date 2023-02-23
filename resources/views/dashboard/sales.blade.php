@extends('dashboard.app')

@section('content')

<div class="tab-content"  id="myTabContentwrapper">
    <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
        <div class="dashboard__center row px-0">
            <div class="col-12 col-xl-9">
                <ul class="nav nav-pills dash__inner__pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#current_wrapper" data-toggle="tab">
                            New Restaurant (40)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#collaborative_orders" data-toggle="tab">
                            Professional Restaurant (08)
                        </a>
                    </li>
                </ul>
                <div class="tab-content"  id="myTabinner">
                    <div class="current_wrapper tab-pane fade in active show" role="tabpanel" id="current_wrapper">
                        <div class="table__wrapper">
                            <div class="dashboard__table">
                                <div class="thead">
                                    <div class="row">
                                        <div class="col">name</div>
                                        <div class="col">trade name</div>
                                        <div class="col">email</div>
                                        <div class="col">number</div>
                                        <div class="col"></div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                                <div class="twrapper table__row">
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                            </div>
                        </div>
                    </div>
                    <div class="collaborative_orders tab-pane fade" role="tabpanel" id="collaborative_orders">
                        <div class="table__wrapper">
                            <div class="dashboard__table">
                                <div class="thead">
                                    <div class="row">
                                        <div class="col">name</div>
                                        <div class="col">trade name</div>
                                        <div class="col">email</div>
                                        <div class="col">number</div>
                                        <div class="col"></div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                                <div class="twrapper table__row">
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span active__color"> contacted </span></div>
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
                                    <a href="{{ url('/admin/add_report') }}">
                                        <div class="row collapse__table">
                                            <div class="col">ahmed hassan</div>
                                            <div class="col">ahmed</div>
                                            <div class="col">example@gmail.com</div>
                                            <div class="col">0000 000 000 000</div>
                                            <div class="col"><span class="contacted_span">waiting...</span></div>
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
                        <h5 class="red__title">new</h5>
                        <div class="flex__end">
                            <span class="grey__num">120</span>
                            <span>client</span>
                        </div>
                        <h5 class="red__title">Professional</h5>
                        <div class="flex__end">
                            <span class="grey__num">79</span>
                            <span>client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection