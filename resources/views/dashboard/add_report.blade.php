@extends('dashboard.app')

@section('content')

<div class="tab-content"  id="myTabContentwrapper">
    <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
        <div class="dashboard__center row px-0">
            <div class="col-12 col-xl-9">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
                @endif
                <div class="table__wrapper">
                    <div class="dashboard__table">
                         <!--row one-->
                         <div class="twrapper table__row">
                            <div class="row collapse__table">
                                <div class="col">{{$reports->name}}</div>
                                <div class="col">{{ $reports->store_name }}</div>
                                <div class="col">{{$reports->email}}</div>
                                <div class="col">{{$reports->phone}}</div>
                                <div class="col">
                                    @if($reports->contact == true)         
                                    <span class="contacted_span active__color">contacted</span>         
                                @else
                                <a href="{{ url('admin/report/'.$reports->id.'/contact')}}"><span class="contacted_span">waiting...</span> </a>     
                                @endif  
                                </div>
                                <div class="col-1">
                                    <div class="dropdown dashboard__dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="collapsed__div">
                                <div class="row">
                                    <div class="col">city</div>
                                    <div class="col">date</div>
                                    <div class="col">package</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">{{$reports->city}}</div>
                                    <div class="col">{{$reports->date}}</div>
                                    <div class="col">{{$reports->packages}}</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">capital</div>
                                    <div class="col">experience</div>
                                    <div class="col">kitchen</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">{{$reports->capital}} sr</div>
                                    <div class="col">{{$reports->experience}} years</div>
                                    <div class="col">
                                        <span class="mr__26 flex__icons"><img src="{{ asset('images/p1.png')}}" alt="" class="part__icon"> {{$reports->kind}}</span>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctreatInvoice__wrpper">
                    <div class="report__title">
                        <img src="{{ asset('images/inv.svg')}}" alt="" class="report__thumb">
                        <span class="add__repolink">Add a report</span>
                    </div>
                    <div class="dashInvoice__table">
                        <!--row one-->
                        <div class="twrapper table__row">
                            <div class="row collapse__table">
                                <div class="col-3">024681</div>
                                <div class="col-3">{{$reports->created_at}}</div>
                                <div class="col-4">{{$reports->packages}}</div>
                                <div class="col-2">
                                    <div class="printDwnFlx">
                                        <a href="{{ url('admin/export-reports/' .$reports->id) }}" class="crt-nav__link prntBk__link"><img src="{{ asset('images/prnt.svg')}}" alt=""></a>
                                        <a href="{{ url('/admin/report',$reports->merchant_id) }}" class="crt-nav__link" download><img src="{{ asset('images/dwn.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($reports->reportData as $projectitem)
                        <!--report card-->
                        <div class="report__card">
                            <div class="repo_cardheader">
                                <form action="{{ url('admin/edit/' .$projectitem->id) }}" method="Post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                          {{ method_field('put') }}

                                    <div class="cardrepo__start">
                                        <input class="repo__name" value="{{$projectitem->subject}}" name="subject">
                                        <span class="repo_date"> {{$projectitem->created_at}} </span>
                                    </div>
                                    <div class="cardrepo__end">
                                        <img src="{{ asset('images/edit.svg')}}" alt="" class="edit__icon" width="19px" height="19px">
                                        <a href="{{ url('admin/report/'.$projectitem->id.'/delete')}}"><img src="{{ asset('images/trash.svg')}}" alt="" class="trash__icon" width="18px" height="27px"></a>
                                    </div>
                            </div>
                            <input class="report__des" value="{{$projectitem->content}}" name="content">
                            <button type="submit" class="report__btn save__btn">save</button>
                        </form>
                        </div>
                        @endforeach
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


   <!--------    professional restaurant modal ---------->
   <div class="reportModal" id="reportModal">
    <div class="modal__overlay"></div>
    <button type="button" class="close__modal">
        <img src="{{ asset('images/close.png')}}" alt="">
    </button>
    <div class="container report__container">
        <form action="{{ url('admin/report/' .$reports->id) }}" class="report__form" method="POST" enctype="multipart/form-data">
        @csrf
            <select class="nice-select report__select" name="subject">
                <option value="follow up" selected> follow up</option>
                <option value="meeting">meeting</option>
            </select>
            <div class="relative__textarea full__textarea">
                <textarea class="jobs__textarea" maxlength="100" name="content"></textarea>
                <div class="abs__value">
                    <span class="number__increase">0</span> / <span>100</span>
                </div>
            </div>
            <button type="submit" class="report__btn">add report</button>
        </form>
    </div>
</div>

@endsection