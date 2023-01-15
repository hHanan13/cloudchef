
<section class="pages responsive_padding">
    <div class="container responsive_padding">
        <div class="row responsive_padding">
            <div class="col-xl-12 responsive_padding">
                @include('dashboard.layouts.headers.perfumecards')
                <div class="container-fluid mt-0 perfumes">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">@lang('lang.Perfumes')</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">@lang('lang.best seller')</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="toprated-tab" data-toggle="tab" href="#toprated" role="tab"
                               aria-controls="toprated" aria-selected="false">@lang('lang.top rated')</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header card-header-primary card-header-icon">
                                            <div class="row">

                                                <div class="col-xl-12 col-md-12 col-12">

                                                    <div class="row fold_size">
                                                        <div class="col-xl-4 col-md-8 col-12">
                                                            <div class="card-icon">
                                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                                                    class="img-fluid" width="35px">
                                                            </div>
                                                            <h4 class="card-title">@lang('lang.Perfumes')
                                                                <span> </span>
                                                            </h4>
                                                        </div>

                                                        <div class="col-xl-4 col-md-2 col-8">
                                                            
                                                                    @include('livewire.perfumes.create')
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                @lang('lang.export')
                                                                <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <button wire:click="export"
                                                                        class="dropdown-item"> @lang('lang.excel')</button>
                                                                    <button wire:click="exportPdf"
                                                                        class="dropdown-item"> @lang('lang.pdf')</button>
                                                                    <button wire:click="exportCsv"
                                                                        class="dropdown-item"> @lang('lang.csv')</button>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-md-2 col-4">
                                                            <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                                                                    data-target="#demo" style="margin:14px 0px;">@lang('lang.filter')
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="demo" class="collapse row" style="width:100%;margin:1%">

                                                    <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                                        <label class="">@lang('lang.name') </label>
                                                        <input wire:model="name"
                                                            type="text" class="form-control"/>
                                                    </div>
                                                    <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                                        <label class="">{{ trans('admin.users.status')}}

                                                        </label>
                                                        <select

                                                            class="form-control date date1" id="GenderId"
                                                            name="GenderId" placeholder="All" wire:model="active">
                                                            <option selected disabled> {{ trans('admin.users.select')}}</option>
                                                            <option value="1">{{ trans('admin.users.active')}}</option>
                                                            <option value="0">{{ trans('admin.users.non_active')}}</option>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                                <div class="card-body responsive_padding">
                                                    <div class="toolbar">
                                                        @if (flash()->message)
                                                            <div class=" btn btn-success form-control  alert alert-box">
                                                                {{ flash()->message }}
                                                            </div>
                                                    @endif

                                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                                    </div>
                                                    <div class="material-datatables table-responsive table">
                                                        <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                                            cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                            @if($data !== 'null' && count($data )>0)
                                                                <tr>

                                                                <td></td>

                                                                <td>@lang('lang.PERFUME NAME EN')</td>
                                                                <td>@lang('lang.date')</td>
                                                                <td>@lang('lang.STOCK')</td>
                                                                <td>@lang('lang.DESC')</td>
                                                                <td>@lang('lang.IMAGE')</td>
                                                                <td>@lang('lang.PRICE')</td>
                                                                <th> @lang('lang.item_status')</th>

                                                                <th class="disabled-sorting text-right"></th>
                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                            @foreach($data as $row)

                                                                    <tr>
                                                                    <td><input type="checkbox"
                                                                                            aria-label="Checkbox for following text input">
                                                                                    </td>
                                                                                    <td>{{$row->perfume_name_en}}</td>
                                                                                   
                                                                                    <td>{{$row->created_at}}</td>
                                                                                    <td>{{$row->stock}}</td>
                                                                                    <td>{{$row->desc_en}}</td>
                                                                                    <td><span><img src="{{ $row->image_path }}" class="img-fluid" width="100px"></span></td>

                                                                                    <td>{{$row->price}}</td>
                                                                                    <td>
                                                                                    <a><label class="switch">
                                                                                <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                                                                wire:click="activatePerfume({{$row->id}})" {{$row->status == true ? 'checked' : ' '}}>
                                                                                <span class="slider round"></span>
                                                                                </label></a>
                                                                                </td>

                                                                        <td>
                                                                            @include('livewire.perfumes.edit')
                                                                            <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                                            wire:click="destroy({{$row->id}})" class="btn" style="padding: 5px;"><i
                                                                                    class="material-icons"><img
                                                                                        src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                                                        class="img-fluid" width="25px"></i>
                                                                            </a>
                                                                            
                                                                        </td>
                                                                    </tr>

                                                            @endforeach

                                                            @else
                                                                <div class="col-12 d-flex justify-content-center align-items-center"
                                                                    style="height: 300px;">
                                                                    <div class="col-12 d-inline-block text-center">
                                                                    <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                                                                            <br><br>
                                                                        @lang('lang.no_data')
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @include('dashboard.bestseller')
                            <!-- /.box -->

                        </div>
                        <div class="tab-pane fade" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                            @include('dashboard.toprated')
                            <!-- /.box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<!-- end row -->

<!-- /.box -->

    </section>

    </div>