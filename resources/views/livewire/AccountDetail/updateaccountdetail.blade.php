<a data-toggle="modal" data-target="#updateModal" wire:click="edit({{$row->id}})" title="Click to edit" class="btn" style="padding:0;"> <i
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
                                    <h4 class="card-title">@lang('lang.add')</h4>


                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill close" data-dismiss="modal" aria-label="Close"
                                            style="font-size: 25px;"><i class="fa fa-times-circle"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body ">


                        <div class="row">
                               
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                           <label for="exampleInputPassword1" class="bmd-label-floating">@lang('lang.Enter email')</label>
                                           <input type="wmail" wire:model="account_email" class="form-control input-sm"  placeholder="Name">
                                           <span class="text-danger">

                                                      @error('account_email') {{$message}} @enderror
                                                  </span>
                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                           <label for="exampleInputPassword1" class="bmd-label-floating">@lang('lang.Enter password')</label>
                                           <div class="input-group" id="show_hide_password" style="box-shadow: none;">
                                            <input wire:model.defer="current_password" class="form-control input-sm" type="password" placeholder="password">
                                            <div class="input-group-addon eyepass" style="">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                            <span class="text-danger"> @error('current_password') {{$message}} @enderror </span>
                                            </div>
                                   </div>
                               </div>

                           </div>

                           <div class="row">
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                       <label for="exampleInputPassword1">@lang('lang.Enter first name')</label>
                                       <input type="text" wire:model="first_name" class="form-control input-sm"  placeholder="date">
                                       <span class="text-danger">

                                                      @error('first_name') {{$message}} @enderror
                                                  </span>
                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                       <label for="exampleInputPassword1">@lang('lang.Enter last name')</label>
                                       <input type="text" wire:model="last_name" class="form-control input-sm"  placeholder="date">
                                       <span class="text-danger">

                                                      @error('last_name') {{$message}} @enderror
                                                  </span>
                                   </div>
                               </div>
                           
                           </div>

                           <div class="row">

                               <div class="col-xl-6">
                                   <label for="exampleInputPassword1">@lang('lang.Enter address')</label>
                                   <input type="text" wire:model="address" class="form-control input-sm"  placeholder="allow">
                                   <span class="text-danger">

                                   @error('address') {{$message}} @enderror
                                   </span>
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



<!-- <div>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input type="text" wire:model="position_name" class="form-control input-sm"  placeholder="Name">
    </div>
   
    <div class="form-group">
        <label for="exampleInputPassword1">Enter date</label>
        <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter allow</label>
        <input type="text" wire:model="allowed" class="form-control input-sm"  placeholder="allow">
    </div>
    <button wire:click="update()" class="btn btn-primary">Update</button>
</div>  -->