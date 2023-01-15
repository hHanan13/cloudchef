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
                     <h4 class="card-title">@lang('lang.accountdetail')
                        <span>  </span>
                     </h4>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="row ">
                        <div class="col-xl-5 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                        @include('livewire.AccountDetail.createaccountdetail')

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
                     <input wire:model="search"
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
               @if($data !== 'null' && count($data )>0)
                                        <tr>

                                            <td>@lang('lang.NO')</td>
                                            <td>@lang('lang.ACCOUNT EMAIL')</td>

                                            <td>@lang('lang.FIRST NAME')</td>
                                            <td>@lang('lang.LAST NAME')</td>
                                            <td>@lang('lang.ADDRESS')</td>

                                            <th>@lang('lang.created_at')</th>
                            <th> @lang('lang.item_status')</th>

                            <th class="disabled-sorting">@lang('lang.action')</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($data as $row)

                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->account_email}}</td>

                                                <td>{{$row->first_name}}</td>
                                                <td>{{$row->last_name}}</td>
                                                <td>{{$row->address}}</td>
                                                <td>{{$row->created_at}}</td>
                                                <td><a><label class="switch">
                                                                <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                                                wire:click="activateAccountdetail({{$row->id}})" {{$row->status == true ? 'checked' : ' '}}>
                                                                <span class="slider round"></span>
                                                                </label></a></td>
                                                <td>
                                                @include('livewire.AccountDetail.updateaccountdetail')
                                                    <a wire:click="destroy({{$row->id}})" class="btn"><img
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
                        <p> @lang('lang.no_data') 
                        <p>
                     </div>
                  </div>
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

    </section>

    </div>

