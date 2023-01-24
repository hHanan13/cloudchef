@extends('dashboard.app')

@section('content')

                    <div class="tab-content"  id="myTabContentwrapper">
                        <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
                            <div class="dashboard__center row px-0">
                                <div class="col-12 col-xl-9">
                                    <div class="table__wrapper">
                                        <div class="dashboard__table">
                                            <div class="thead">
                                                <div class="row">
                                                    <div class="col">@lang('lang.name')</div>
                                                    <div class="col">@lang('lang.trade name')</div>
                                                    <div class="col">@lang('lang.email')</div>
                                                    <div class="col">@lang('lang.number')</div>
                                                    <div class="col"></div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                                @if(count($users) > 0)

                                                    @foreach($users as $row)
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
                                                                    <a href="{{ url('admin/report/'.$row->id.'/contact')}}" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" ><span class="contacted_span">waiting...</span></a>      
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
                                                                            <a class="dropdown-item" href="index.html">
                                                                                <img src="{{ asset('images/envelope.svg')}}" alt="" class="dropdown__icon" width="20px" height="18px">
                                                                                <span>email</span>
                                                                            </a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item delete__dashrow has__function" href="#">
                                                                                <img src="{{ asset('images/trash.svg')}}" alt="" class="dropdown__icon" width="18px" height="27px">
                                                                                <span>delete</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapsed__div">
                                                                <div class="row">
                                                                    <div class="col">@lang('lang.city')</div>
                                                                    <div class="col">@lang('lang.date')</div>
                                                                    <div class="col">@lang('lang.package')</div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">{{$row->city}}</div>
                                                                    <div class="col">{{$row->created_at->diffForHumans()}}</div>
                                                                    <div class="col">package name</div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">@lang('lang.capital')</div>
                                                                    <div class="col">@lang('lang.experience')</div>
                                                                    <div class="col">@lang('lang.kitchen')</div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">{{$row->capital}} sr</div>
                                                                    <div class="col">{{$row->experience}} years</div>
                                                                    <div class="col">
                                                                        <span class="mr__26 flex__icons"><img src="{{ asset('images/p1.png')}}" alt="" class="part__icon"> {{$row->kind}}</span>
                                                                    </div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
                                                                    <div class="col"></div>
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
                                                <span class="red__num">{{\App\Models\merchant::count()}}</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                            <h5 class="red__title">@lang('lang.new')</h5>
                                            <div class="flex__end">
                                                <span class="grey__num">{{\App\Models\merchant::where('status', '0')->count()}}</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                            <h5 class="red__title">@lang('lang.Professional')</h5>
                                            <div class="flex__end">
                                                <span class="grey__num">{{\App\Models\merchant::where('status', '1')->count()}}</span>
                                                <span>@lang('lang.client')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="training__dahboard tab-pane fade" role="tabpanel" id="training__dahboard">
                            @include('dashboard.training')
                            
                        </div>
                    </div>


@endsection