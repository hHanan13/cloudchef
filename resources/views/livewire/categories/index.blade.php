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
                     <h4 class="card-title">@lang('lang.categories') 
                        <span> ({{$data['total']}}) </span>
                     </h4>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="row ">
                        <div class="col-xl-5 col-lg-4 col-md-4  col-xs-4  col-sm-6">
                           <a wire:click="toggleAddModal"
                              data-backdrop="static" data-keyboard="false"
                              class="pull-right btn form-control">
                           @lang('lang.create_new')<i
                              class="fa fa-arrow-circle-right"></i></a>
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
                  @if($data['categories'] !== 'null' && count($data['categories'] )>0)
                  <tr>
                                <th>@lang('lang.id')</th>
                                <th>@lang('lang.name')</th>

                                <th>@lang('lang.created_at')</th>
                                <th>@lang('lang.image')</th>
                                <th> @lang('lang.item_status')</th>

                            <th class="disabled-sorting">@lang('lang.action')</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($data['categories']  as $category)
                  <tr>
                  <td><input type="checkbox"
                                            aria-label="Checkbox for following text input"></td>
                                            <th>{{$category->name}}</th>
                                        <th>{{isset($category->created_at) ?$category->created_at->diffForHumans() :''}}

                                        </th>

                                        <td><span><img
                                                    src="{{ $category->image_path }}"
                                                    class="img-fluid" width="100px"></span></td>
                                                    <td>
                                                    <a class="btn"><label class="switch">
                                                    <input type="checkbox" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click="activateCategory({{$category->id}})" {{$category->status == true ? 'checked' : ' '}}>
                                                    <span class="slider round"></span>
                                                    </label></a>
                     </td>
                                        <td class="text-right">
                                        <a data-toggle="modal" onclick="RenderActions1('')"
                                            wire:click="toggleEditModal({{$category->id}})"
                                            data-backdrop="static" data-keyboard="false" title="Click to edit"
                                            class="btn" > <i
                                                    class="material-icons"><img
                                                        src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                        class="img-fluid" width="25px"></i></a>
                                                        @can('delete_categories')
                                            <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                            wire:click="destroy({{$category->id}})" class="btn" ><i
                                                    class="material-icons"><img
                                                        src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                        class="img-fluid" width="25px"></i>
                                            </a>
                                            @endcan
                       
                           @can('read_categories')
                                            <a data-toggle="modal" wire:click="toggleShowModal({{$category->id}})"
                                            data-backdrop="static" data-keyboard="false"
                                            title="Click to edit" data-target="#modalUser1" class="btn"
                                            > <i class="material-icons"><img
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
                            @include('livewire.categories.edit')

                            {{--// showpopModal--}}
                            @elseif($ShowModelOpened==true)

                            @include('livewire.categories.show')


                            <!-- createpopModal -->
                            @elseif($AddModelOpened==true)

                            @include('livewire.categories.create')
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
@if(count($data['categories'] )>0)
    <div class="align-center">
        {!! $data['categories']->links()  !!}
    </div>
    @endif





