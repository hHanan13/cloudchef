<div class="container">
   <section class="users">
         <div class="card">
            <div class="card-header card-header-primary card-header-icon">
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="card-icon">
                        <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                           class="img-fluid" width="35px">
                     </div>
                     <h4 class="card-title">@lang('lang.partnerrequests')
                        <span> ({{$data['total']}}) </span>
                     </h4>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="row ">
                        
                        <div class="col-xl-4 col-lg-4 col-md-4  col-xs-4  col-sm-6">
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
                        <div class="col-xl-3 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                           <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                              data-target="#demo">@lang('lang.filter')
                           </button>
                        </div>
                       
                     </div>
                  </div>
               </div>
               <div id="demo" class="collapse row" style="width:100%;margin:1%">
                  <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">
                     <label class="">@lang('lang.name') </label>
                     <input wire:model="name"
                        type="text" class="form-control"/>
                  </div>
                
               </div>
            </div>
         </div>
      <div class="card-body responsive_padding">
         @if (flash()->message)
         <div class=" btn btn-success form-control  alert alert-box">
            {{ flash()->message }}
         </div>
         @endif
         <div class="material-datatables table-responsive table">
            <table id="datatables" class="table table-striped table-no-bordered table-hover"
               cellspacing="0" width="100%" style="width:100%">
               <thead>
               @if($data['partnerrequests'] !== 'null' && count($data['partnerrequests'] )>0)
                        <tr>
                            <th>@lang('lang.id')</th>
                            <th>@lang('lang.name')</th>
                            <th>@lang('lang.age')</th>

                            <th>@lang('lang.created_at')</th>
                            <th> @lang('lang.item_status')</th>

                            <th class="disabled-sorting">@lang('lang.action')</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($data['partnerrequests']  as $partnerrequest)
                        <tr>
                            <td><input type="checkbox"
                                       aria-label="Checkbox for following text input"></td>
                            <th>{{$partnerrequest->full_name ?? ''	}}</th>
                            <th>{{$partnerrequest->age ?? ''	}}</th>
                            <th>{{isset($partnerrequest->created_at) ?$partnerrequest->created_at->diffForHumans() :''}}

                            </th>
                            <td><a><label class="switch tog">
                                    <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                    wire:click="activatePartnerRequest({{$partnerrequest->id}})" {{$partnerrequest->status == true ? 'checked' : ' '}}>
                                    <span class="slider round"></span>
                                    </label></a></td>


                            <td class="text-right">

                                @can('delete_partnerrequests')
                                    <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                       wire:click="destroy({{$partnerrequest->id}})"><i
                                            class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                class="img-fluid" width="25px"></i>
                                    </a>
                                @endcan
                                @can('read_partnerrequests')
                                    <a data-toggle="modal" wire:click="toggleShowModal({{$partnerrequest->id}})"
                                       data-backdrop="static" data-keyboard="false"
                                       onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')"
                                       title="Click to edit" data-target="#modalUser1" class="btn"
                                       style="padding:0;"> <i class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/show.png') }}"
                                                class="img-fluid" width="25px"></i></a>
                                @endcan
                                
                                
                     </td>
                  </tr>
                  @endforeach
                  @else
                  <div class="col-12 d-flex justify-content-center align-items-center"
                     style="height: 300px;">
                     <div class="col-12 d-inline-block text-center">
                        <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                        <br><br>
                        <p> @lang('lang.no_data') 
                        <p>
                     </div>
                  </div>
                  @endif
                  {{--//editpopModal--}}
                  @if($ShowModelOpened==true)

                        @include('livewire.partnerrequests.show')

                    @endif

               </tbody>
            </table>
         </div>
      </div>
      <!-- end content-->
      <!--  end card  -->
   </section>
</div>
<!-- end row -->
<!-- /.box -->
@if(count($data['partnerrequests'] )>0)
    <div class="align-center">
        {!! $data['partnerrequests']->links()  !!}
    </div>
    @endif

    </section>

    </div>

