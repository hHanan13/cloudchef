@extends('dashboard.app')

@section('content')

<div class="tab-content"  id="myTabContentwrapper">
    <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
        <div class="dashboard__center row px-0">
            <div class="col-12 col-xl-9">
                <ul class="nav nav-pills dash__inner__pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#current_wrapper" data-toggle="tab">
                            New Restaurant ({{\App\Models\merchant::where('status', '0')->count()}})
                        </a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#collaborative_orders" data-toggle="tab">
                            Professional Restaurant ({{\App\Models\merchant::where('status', '1')->count()}})
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
                                                    @if(count($newrest) > 0)

                                                        @foreach($newrest as $row)
                                                            <!--row one-->
                                                            <div class="twrapper table__row">
                                                                    <div class="row collapse__table">
                                                                        <div class="col">{{$row->name}}</div>
                                                                        <div class="col">{{$row->store_name}}</div> 
                                                                        <div class="col">{{$row->email}}</div> 
                                                                        <div class="col">{{$row->phone}}</div>
                                                                        <div class="col">
                                                                            @if($row->contact == true)         
                                                                                <span class="contacted_span active__color">contacted</span>         
                                                                            @else
                                                                            <a href="{{ url('admin/restaurant/'.$row->id.'/contact')}}" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" ><span class="contacted_span">waiting...</span>  </a>  
                                                                            @endif   
                                                                        </div>
                                                                        <div class="col-1">
                                                                            <div class="dropdown dashboard__dropdown">
                                                                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa-solid fa-ellipsis dots__icon"></i>
                                                                                </button>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item open__report__wrapper" href="{{ url('/admin/report',$row->id) }}">
                                                                                        <img src="{{ asset('images/report.svg')}}" alt="" class="dropdown__icon" width="20px" height="27px">
                                                                                        <span>report</span>
                                                                                    </a>
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        @endforeach

                                                    @else

                                                            <tr>
                                                                <td colspan="5" class="text-center">No Data Found</td>
                                                            </tr>

                                                    @endif
                                                    
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
                                @if(count($prorest) > 0)

                                    @foreach($prorest as $row)
                                        <!--row one-->
                                        <div class="twrapper table__row">
                                                <div class="row collapse__table">
                                                    <div class="col">{{$row->name}}</div>
                                                    <div class="col">{{$row->store_name}}</div>
                                                    <div class="col">{{$row->email}}</div>
                                                    <div class="col">{{$row->phone}}</div>
                                                    <div class="col">
                                                        @if($row->contact == true)         
                                                            <span class="contacted_span active__color">contacted</span>         
                                                        @else
                                                        <a href="{{ url('admin/restaurant/'.$row->id.'/contact')}}" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" ><span class="contacted_span">waiting...</span> </a>      
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
                                        </div>
                                    @endforeach

                                @else

                                        <tr>
                                            <td colspan="5" class="text-center">No Data Found</td>
                                        </tr>

                                @endif
                                
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