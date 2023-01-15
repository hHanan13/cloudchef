
<section class="pages">

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="row">

                        <div class="col-xl-12 col-md-12 col-12">

                            <div class="row fold_size">
                                <div class="col-xl-4 col-md-8 col-12 responsive_padding">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                             class="img-fluid" width="35px">
                                    </div>
                                    <h4 class="card-title">@lang('lang.perfumerequest') ({{$data['total']}})
                                        <span> </span>
                                    </h4>
                                </div>

                                <div class="col-xl-4 col-md-2 col-8">
                                    
                                            @include('livewire.perfumerequest.createrequest')
                                </div>
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
                              data-target="#demo">@lang('lang.filter')
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
                        <option value="1">{{ trans('admin.users.active')}})</option>
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
                                    @if($data['perfumerequest'] !== 'null' && count($data['perfumerequest'] )>0)
                                        <tr>

                                            <td>NO</td>
                                            <td>@lang('lang.name')</td>
                                            <td>@lang('lang.quantity')</td>
                                            <td>@lang('lang.image')</td>
                                            <td>@lang('lang.cost')</td>
                                            <td>@lang('lang.stock')</td>
                                            <td>@lang('lang.date')</td>


                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($data['perfumerequest'] as $row)

                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->req_name}}</td>
                                                <td>{{$row->quantity}}</td>
                                                <td>{{$row->quantity}}</td>
                                                <td>{{$row->cost}}</td>
                                                <td>{{$row->stock}}</td>
                                                <td>{{$row->date}}</td>

                                                <td>
                                               
                                                                @include('livewire.perfumerequest.updaterequest')

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

    <!-- end content-->

    <!--  end card  -->


</section>


<!-- end row -->

<!-- /.box -->

@if(count($data['perfumerequest'] )>0)
    <div class="align-center">
        {!! $data['perfumerequest']->links()  !!}
    </div>
    @endif

    </section>

    </div>







