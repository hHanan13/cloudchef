

<section class="notes">

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="row">

                        <div class="col-xl-12 col-md-12 col-12">

                            <div class="row">
                                <div class="col-xl-4 col-md-8 col-12 responsive_padding">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                             class="img-fluid" width="35px">
                                    </div>
                                    <h4 class="card-title">@lang('lang.reports')
                                            <span> </span>
                                        </h4>
                                </div>

                                <!-- <div class="col-xl-2 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Export
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <button wire:click="export"
                                                    class="dropdown-item"> @lang('lang.export')</button>
                                                <button wire:click="exportPdf"
                                                    class="dropdown-item"> @lang('lang.pdf')</button>
                                                <button wire:click="exportCsv"
                                                    class="dropdown-item"> @lang('lang.csv')</button>
                                            </ul>
                                        </div>
                                </div> -->
                                <!-- <div class="col-xl-2 col-md-2 col-6">
                                    <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                                            data-target="#demo" style="margin:14px 0px;">Filter
                                    </button>

                                </div> -->
                            </div>
                        </div>

                        <!-- <div id="demo" class="collapse row" style="width:100%;margin:1%">

                            <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                <label class="">@lang('lang.name') </label>
                                <input wire:model="name"
                                       type="text" class="form-control"/>
                            </div>
                            <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                <label class="">Status

                                </label>
                                <select

                                    class="form-control date date1" id="GenderId"
                                    name="GenderId" placeholder="All" wire:model="active">
                                    <option selected disabled> Select</option>
                                    <option value="1">@lang('lang.active')</option>
                                    <option value="0">@lang('lang.nonactive')</option>
                                </select>

                            </div>

                        </div> -->

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
                        @if($data !== 'null' && count($data)>0)
                        <tr>
                                <th>@lang('lang.id')</th>
                                <th>@lang('lang.name')</th>

                                <th>@lang('lang.count')</th>

                            <!-- <th class="disabled-sorting text-right"></th> -->
                        </tr>

                    </thead>

                    <tbody>


                            @foreach($data as $row)
                                <tr>
                                    <td><input type="checkbox"
                                            aria-label="Checkbox for following text input"></td>
                                            <th>{{$row->name_en}}</th>

                                        <td>mount({{$row->name_en}})</td>
                                        <!-- <td class="text-right">
                                          
                                                <a><label class="switch">
                                                    <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click="activateRequest({{$row->id}})" {{$row->status == true ? 'checked' : ' '}}>
                                                    <span class="slider round"></span>
                                                    </label></a>

                                        </td> -->
                                </tr>
                            @endforeach

                            @else
                                <div class="col-12 d-flex justify-content-center align-items-center"
                                    style="height: 300px;">
                                    <div class="col-12 d-inline-block text-center">
                                        <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                                        <br><br>
                                        <p> @lang('lang.no_data') <p>
                                    </div>
                                </div>
                            @endif

                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <!-- end content-->

    <!--  end card  -->


</section>

