<ul class="nav nav-pills dash__inner__pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#current_wrapper" data-toggle="tab">
                                    @lang('lang.current functions')
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#collaborative_orders" data-toggle="tab">
                                    @lang('lang.collaborative training')
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content"  id="myTabinner">
                                <div class="current_wrapper tab-pane fade in active show" role="tabpanel" id="current_wrapper">
                                    <div class="dashboard__center row px-0">
                                        <div class="col-12 col-xl-9">
                                            <div class="table__wrapper">
                                                <div class="dashboard__table wide__dahboard">
                                                    <div class="thead">
                                                        <div class="row">
                                                            <div class="col p-0"></div>
                                                            <div class="col">@lang('lang.name')</div>
                                                            <div class="col">@lang('lang.job')</div>
                                                            <div class="col">@lang('lang.city')</div>
                                                            <div class="col">@lang('lang.age')</div>
                                                            <div class="col">@lang('lang.type')</div>
                                                            <div class="col">@lang('lang.email')</div>
                                                            <div class="col">@lang('lang.cv')</div>
                                                            <div class="col">@lang('lang.number')</div>
                                                            <div class="col">@lang('lang.work from')</div>
                                                        </div>
                                                    </div>
                                                    @if(count($currentjobs) > 0)

                                                        @foreach($currentjobs as $row)
                                                            <!--row one-->
                                                            <div class="twrapper table__row">
                                                                <div class="row collapse__table">
                                                                    <div class="col p-0">
                                                                        <img src="{{ asset($row->image) }}" alt="" style="width: inherit;">
                                                                    </div>
                                                                    <div class="col">{{$row->name}}</div>
                                                                    <div class="col">{{$row->job_name}}</div>
                                                                    <div class="col">{{$row->city}}</div>
                                                                    <div class="col">{{$row->age}}</div>
                                                                    <div class="col">{{$row->type}}</div>
                                                                    <div class="col">{{$row->email}}</div>
                                                                    <div class="col">
                                                                        <a href="{{ asset($row->file_job) }}" class="file__span" download>
                                                                            <span>file name</span>
                                                                            <span class="upload__icon"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col">{{$row->phone}}</div>
                                                                    <div class="col">{{$row->work_from}}</div>
                                                                </div>
                                                                <div class="collapsed__div">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <p class="coll__des">{{$row->notes}}</p>
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
                                                    <h3 class="side__title">@lang('lang.employees')</h3>
                                                    <div class="flex__end">
                                                        <span class="red__num">{{\App\Models\job::count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                    <h5 class="red__title">@lang('lang.current functions')</h5>
                                                    <div class="flex__end">
                                                        <span class="grey__num">{{\App\Models\job::where('status', '1')->count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                    <h5 class="red__title">@lang('lang.collaborative training')</h5>
                                                    <div class="flex__end">
                                                        <span class="grey__num">{{\App\Models\job::where('status', '0')->count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collaborative_orders tab-pane fade" role="tabpanel" id="collaborative_orders">
                                    <div class="dashboard__center row px-0">
                                        <div class="col-12 col-xl-9">
                                            <div class="table__wrapper">
                                                <div class="dashboard__table wide__dahboard">
                                                    <div class="thead">
                                                        <div class="row">
                                                            <div class="col p-0"></div>
                                                            <div class="col">@lang('lang.name')</div>
                                                            <div class="col">@lang('lang.job')</div>
                                                            <div class="col">@lang('lang.city')</div>
                                                            <div class="col">@lang('lang.age')</div>
                                                            <div class="col">@lang('lang.type')</div>
                                                            <div class="col">@lang('lang.email')</div>
                                                            <div class="col">@lang('lang.cv')</div>
                                                            <div class="col">@lang('lang.number')</div>
                                                            <div class="col">@lang('lang.work from')</div>
                                                        </div>
                                                    </div>
                                                    @if(count($trainingjobs) > 0)

                                                        @foreach($trainingjobs as $row)
                                                            <!--row one-->
                                                            <div class="twrapper table__row">
                                                                <div class="row collapse__table">
                                                                    <div class="col p-0">
                                                                        <img src="{{ asset($row->image) }}" alt="" style="width: inherit;">
                                                                    </div>
                                                                    <div class="col">{{$row->name}}</div>
                                                                    <div class="col">{{$row->job_name}}</div>
                                                                    <div class="col">{{$row->city}}</div>
                                                                    <div class="col">{{$row->age}}</div>
                                                                    <div class="col">{{$row->type}}</div>
                                                                    <div class="col">{{$row->email}}</div>
                                                                    <div class="col">
                                                                        <a href="{{ asset($row->file_job) }}" class="file__span" download>
                                                                            <span>file name</span>
                                                                            <span class="upload__icon"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col">{{$row->phone}}</div>
                                                                    <div class="col">{{$row->work_from}}</div>
                                                                </div>
                                                                <div class="collapsed__div">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <p class="coll__des">{{$row->notes}}</p>
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
                                                    <h3 class="side__title">@lang('lang.employees')</h3>
                                                    <div class="flex__end">
                                                        <span class="red__num">{{\App\Models\job::count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                    <h5 class="red__title">@lang('lang.current functions')</h5>
                                                    <div class="flex__end">
                                                        <span class="grey__num">{{\App\Models\job::where('status', '1')->count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                    <h5 class="red__title">@lang('lang.collaborative training')</h5>
                                                    <div class="flex__end">
                                                        <span class="grey__num">{{\App\Models\job::where('status', '0')->count()}}</span>
                                                        <span>@lang('lang.employees')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>