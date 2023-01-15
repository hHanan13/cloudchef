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
                     <h4 class="card-title">@lang('lang.users') 
                        <span> ({{$data['total']}}) </span>
                     </h4>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="row ">
                        <div class="col-xl-4 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                           <a wire:click="toggleAddModal"
                              data-backdrop="static" data-keyboard="false"
                              class="pull-right btn form-control">
                           @lang('lang.create_new_user')<i
                              class="fa fa-plus"></i></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                           <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              @lang('lang.export_files')
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
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4  col-xs-4  col-sm-6">
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
                        <option value="1">{{ trans('admin.users.active')}}</option>
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
                  @if($data['users'] !== 'null' && count($data['users'] )>0)
                  <tr>
                     <th>@lang('lang.id')</th>
                     <th>@lang('lang.name')</th>
                     <th>@lang('lang.phone')</th>
                     
                     <th>@lang('lang.created_at')</th>
                     <th>@lang('lang.image')</th>
                     <th> @lang('lang.item_status')</th>
                     <th class="disabled-sorting "> @lang('lang.action')</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($data['users']  as $user)
                  <tr>
                     <td><input type="checkbox"
                        aria-label="Checkbox for following text input"></td>
                     <th>{{$user->first_name,$user->last_name}}</th>
                     <th>{{$user->phone}}</th>
                     
                     <th>{{isset($user->created_at) ?$user->created_at->diffForHumans() :''}}
                     </th>
                     <td><span><img data-enlargable
                        src="{{ $user->image_path }}"
                        class=" img-fluid" width="50px"></span></td>
                        <td>
                               <a class="btn"><label class="switch tog">
                                    <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                    wire:click="activateUser({{$user->id}})" {{$user->status == true ? 'checked' : ' '}}>
                                    <span class="slider round"></span>
                                    </label></a>
                     </td>
                     <td class="">
                        @can('update_users')
                        <a data-toggle="modal" onclick="RenderActions1('')"  data-backdrop="static" data-keyboard="false"
                           wire:click="toggleEditModal({{$user->id}})"
                           title="Click to edit"
                           class="btn" > <i
                           class="material-icons"><img
                           src="{{ asset('assets/front/images/icons/edit1.png') }}"
                           class="img-fluid" width="20px"></i></a>
                        @endcan
                        @can('delete_users')
                        <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                           wire:click="destroy({{$user->id}})" class="btn" ><i
                           class="material-icons"><img
                           src="{{ asset('assets/front/images/icons/trash1.png') }}"
                           class="img-fluid" width="20px"></i>
                        </a>
                        @endcan
                        
                        @can('read_users')
                        <a data-toggle="modal" wire:click="toggleShowModal({{$user->id}})"
                           data-backdrop="static" data-keyboard="false"      onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')"
                           title="Click to show" data-target="#modalUser1" class="btn"
                           > <i class="material-icons"><img
                           src="{{ asset('assets/front/images/icons/show.png') }}"
                           class="img-fluid" width="20px"></i></a>
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
                  @include('livewire.users.edit')
                  {{--// showpopModal--}}
                  @elseif($ShowModelOpened==true)
                  @include('livewire.users.show')
                  <!-- createpopModal -->
                  @elseif($AddModelOpened==true)
                  @include('livewire.users.create')
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
@if(count($data['users'] )>0)
<div class="align-center">
   {!! $data['users']->links()  !!}
</div>
@endif