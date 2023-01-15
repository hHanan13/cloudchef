<a data-toggle="modal" data-target="#updateModal" wire:click="edit({{$row->id}})" title="Click to edit" class="btn" style="padding:5;"> <i
                                                            class="material-icons"><img
                                                                src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                                class="img-fluid" width="25px"></i></a>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">

                <div id="OpenDialog" class="modal-body" style="background-color: #1B222C;">

                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">


                            <div class="card-icon">
                                <img src="{{ asset('assets/front/images/icons/Group 109.png') }}"
                                    class="img-fluid"
                                    width="35px">
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-9">
                                    <h4 class="card-title"> {{$this->req_name}}</h4>
                                    
                                    
                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill"
                                            wire:click="toggleEditCloseModal()"
                                            data-dismiss="modal"
                                            style="font-size: 25px;"><i
                                            class="fa fa-times-circle"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body ">


                        <div class="row">

                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter Request Name')</label>
       <input type="text" wire:model="req_name" class="form-control input-sm"  placeholder="req_name">
                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label>@lang('lang.Enter quantity')</label>
       <input type="number" class="form-control input-sm" placeholder="quantity" wire:model="quantity">
                                   </div>
                               </div>

                           </div>

                           <div class="row">
                           <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter category')</label>
                                    <select

                                        class="form-control date date1" id="GenderId"
                                        name="GenderId" placeholder="All" wire:model.defer="category">
                                        <option selected disabled> all</option>
                                        @foreach($cats as $row)
                                            <option value="{{$row->id}}">{{$row->name_en}}</option>
                                            <!-- <option value="french">french</option> -->
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> @error('category') {{$message}} @enderror </span>

                                </div>
                            </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter cost')</label>
       <input type="text" wire:model="cost" class="form-control input-sm"  placeholder="cost">
                                   </div>
                               </div>

                           </div>

                           <div class="row">

                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">
                                   <label for="exampleInputPassword1">@lang('lang.Enter stock')</label>
       <input type="text" wire:model="stock" class="form-control input-sm"  placeholder="stock">
                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">
                                   <label for="exampleInputPassword1">@lang('lang.Enter date')</label>
       <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
                                   </div>
                               </div>

                           </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="update()">@lang('lang.edit') </button>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>
</div>



