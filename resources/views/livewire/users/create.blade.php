    <div  class="modal over_modal" role="dialog" data-backdrop="true" style="display: block">
        <div class="modal-dialog">

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
                                    <h4 class="card-title">@lang('lang.add new user')</h4>


                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill" data-dismiss="modal"
                                            wire:click="toggleAddModal"
                                            style="font-size: 25px;"><i class="fa fa-times-circle"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body ">


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.first_name')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.first_name')" id="first_name"
                                                       name="first_name"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="first_name">

                                                <span class="text-danger">

                                                       @error('first_name') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.last_name')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.last_name')" id="last_name"
                                                       name="last_name"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="last_name">

                                                <span class="text-danger">
                                                       @error('last_name') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.email')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="email" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.email')" id="first_name"
                                                       name="email"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="email">

                                                <span class="text-danger">

                                                       @error('email') {{$message}} @enderror
                                                   </span>
                                            
                                    </div>
                                </div>
                                
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.password')</label>

                                               <div class="input-group" id="show_hide_password" style="box-shadow: none;">
                                            <input class="form-control" type="password" placeholder="password" wire:errors="$errors" wire:model.defer="password">
                                            <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                            </div>

                                                <span class="text-danger">
                                                       @error('password') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.address')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.address')" id="last_name"
                                                       name="address"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="address">

                                                <span class="text-danger">
                                                       @error('address') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.phone')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.phone')" id="phone"
                                                       name="phone"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="phone">

                                                <span class="text-danger">
                                                       @error('phone') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.roles')</label>

                                                <select name="role_id[]" class="form-control"  wire:model.defer="role_id">
                                                    @foreach($data['roles'] as $role)
                                                        <option value="{{$role->id}}" >{{$role->name}}</option>
                                                    @endforeach

                                                </select>
                                           
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xl-5">
                                    <label for="photo-upload" class="custom-file-upload fas">
                                        
                                       <!--  <div class="img-wrap img-upload">
                                            <i class="fa-solid fa-camera"></i>
                                        </div> -->
                                        <input id="photo-upload" type="file" wire:model.defer="image">
                                         @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" style="height:100px;width:150px;">
                                    @endif
                                    </label>

                                    <span class="text-danger">
                                                       @error('image') {{$message}} @enderror
                                                   </span>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="container">@lang('lang.status')
                                        <input type="checkbox" name="status" value="1"
                                               wire:model.defer="status">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>

                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="save"
                            >@lang('lang.add')
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal" tabindex="-1" role="dialog" data-backdrop="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
