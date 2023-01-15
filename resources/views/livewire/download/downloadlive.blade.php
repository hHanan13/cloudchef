<div>
    <section class="roles">

        <div class="container-fluid">
            <div class="row responsive_padding">
                <div class="col-md-12 responsive_padding">

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
                                            <h4 class="card-title">@lang('lang.Downloads') ({{$data['total']}})
                                                <span> </span>
                                            </h4>
                                        </div>

                                        <div class="col-xl-3 col-md-2 col-8">

                                            @include('livewire.download.create')

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
                                        <div class="col-xl-2 col-md-2 col-6">
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
                                @if($data['downloads'] !== 'null' && count($data['downloads'] )>0)
                                    <tr>

                                        <td>@lang('lang.NO')</td>
                                        <td>@lang('lang.STATUS')</td>
                                        <td>@lang('lang.TOTAL')</td>

                                        <th>@lang('lang.created_at')</th>
                                        <th> @lang('lang.item_status')</th>

                                        <th class="disabled-sorting text-right"></th>
                                    </tr>

                                </thead>

                                <tbody>

                                @foreach($data['downloads'] as $row)

                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->total}}</td>
                                        <th>{{isset($row->created_at) ?$row->created_at->diffForHumans() :''}}</th>
                                        <td><a><label class="switch">
                                                        <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                                        wire:click="activateDownload({{$row->id}})" {{$row->status == true ? 'checked' : ' '}}>
                                                        <span class="slider round"></span>
                                                        </label></a></td>

                                        <td>
                                                        @include('livewire.download.update')

                                            <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                               wire:click="destroy({{$row->id}})" class="btn" style="padding: 5px;"><img
                                                    src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                    class="img-fluid" width="25px"></a>
                                                    
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
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
</div>
<!-- /.box -->


@if($updateMode==true)
    @include('livewire.download.update')
@endif

@if(count($data['downloads']  )>0)
    <div class="align-center">
        {!! $data['downloads'] ->links()  !!}
    </div>
    @endif
    </section>

    </div>
