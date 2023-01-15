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
                     <h4 class="card-title">@lang('lang.coupons')
                        <span> ({{$data['total']}}) </span>
                     </h4>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="row ">
                        <div class="col-xl-5 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                        @can('create_coupons')
                                    <a wire:click="toggleAddModal"
                                       data-backdrop="static" data-keyboard="false"
                                       class="pull-right btn">@lang('lang.create new')<i
                                            class="fa fa-arrow-circle-right"></i></a>
                                    @endcan
                        </div>
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
               @if($data['coupons'] !== 'null' && count($data['coupons'] )>0)
                        <tr>
                            <th>@lang('lang.id')</th>
                            <th>@lang('lang.name')</th>
                            <th>@lang('lang.code')</th>

                            <th>@lang('lang.created_at')</th>
                            <th> @lang('lang.item_status')</th>

                            <th class="disabled-sorting">@lang('lang.action')</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($data['coupons']  as $coupon)
                        <tr>
                            <td><input type="checkbox"
                                       aria-label="Checkbox for following text input"></td>
                            <th>{{$coupon->name}}</th>
                            <th>{{$coupon->code}}</th>
                            <th>{{isset($coupon->created_at) ?$coupon->created_at->diffForHumans() :''}}

                            </th>
                            <td><a><label class="switch tog">
                                    <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                    wire:click="activateCoupon({{$coupon->id}})" {{$coupon->status == true ? 'checked' : ' '}}>
                                    <span class="slider round"></span>
                                    </label></a></td>


                            <td class="text-right">
                                @can('update_coupons')
                                <a data-toggle="modal" onclick="RenderActions1('')"
                                   data-backdrop="static" data-keyboard="false" wire:click="toggleEditModal({{$coupon->id}})"
                                   title="Click to edit"
                                   class="btn" style="padding: 5px;"> <i
                                        class="material-icons"><img
                                            src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                            class="img-fluid" width="25px"></i></a>

                                @endcan

                                    @can('delete_coupons')
                                <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                   wire:click="destroy({{$coupon->id}})" class="btn" style="padding: 5px;"><i
                                        class="material-icons"><img
                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                            class="img-fluid" width="25px"></i>
                                </a>
                                @endcan
                            <!--  <a class="btn remove" rel="tooltip" href="javascript:void(0);"
                                                   wire:click="destroy({{$coupon->id}})">

                                                    <i class="material-icons"><img
                                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                            class="img-fluid" width="25px"></i>

                                                </a> -->
                                    @can('read_coupons')
                                <a data-toggle="modal" wire:click="toggleShowModal({{$coupon->id}})"
                                   data-backdrop="static" data-keyboard="false"    onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')"
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
                  @if($EditModelOpened==true)
                        @include('livewire.coupons.edit')

                        {{--// showpopModal--}}
                    @elseif($ShowModelOpened==true)

                        @include('livewire.coupons.show')


                        <!-- createpopModal -->
                    @elseif($AddModelOpened==true)

                        @include('livewire.coupons.create')
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
@if(count($data['coupons'] )>0)
    <div class="align-center">
        {!! $data['coupons']->links()  !!}
    </div>
    @endif

    </section>

    </div>



