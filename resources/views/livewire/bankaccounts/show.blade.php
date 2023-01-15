<div>
    {{--    showPopModal--}}

    <div id="modalArticle" class="modal over_modal" role="dialog" data-backdrop="true"
         style="display: block">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="OpenDialog1" class="modal-body"
                     style="background-color: #1B222C;">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">

                                <img
                                    src="{{ asset('assets/front/images/icons/Group 119.png') }}"
                                    class="img-fluid" width="35px">
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-9">
                                    <h4 class="card-title"> {{$this->name_en}}</h4>
                                    <div style="width:115px;">
                                    <h5>@lang('lang.created_at')
                                        <span>{{$this->created_at}}</span></h5>
                                        </div>
                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill"
                                            wire:click="ShowModalClose()"
                                            data-dismiss="modal"
                                            style="font-size: 25px;"><i
                                            class="fa fa-times-circle"></i></button>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.ar.name')</label>

                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.ar.name')"
                                                   id="Name" name="name_ar"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="name_ar"
                                                   readonly>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.en.name')</label>

                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.en.name')"
                                                   id="Name" name="name_en"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="name_en"
                                                   readonly>

                                </div>
                            </div>

                        </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.number')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.number')" id="Name"
                                                       name="number"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="number" readonly>

                                                <span class="text-danger">

                                                       @error('number') {{$message}} @enderror
                                                   </span>
                                          
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.email')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.email')" id="Name"
                                                       name="email"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="email" readonly>

                                                <span class="text-danger">
                                                       @error('email') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.iban')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.iban')" id="Name"
                                                       name="iban"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="iban" readonly>

                                                <span class="text-danger">

                                                       @error('iban') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.first_name')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.first_name')" id="Name"
                                                       name="first_name"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="first_name" readonly>

                                                <span class="text-danger">
                                                       @error('first_name') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                            </div>

                        <div class="row">

                            <div class="col-xl-5">
                                <lable>@lang('lang.image')</lable>
                                <label for="photo-upload"
                                       class="custom-file-upload fas">

                                    <img src="{{$this->image_path}}" width="100"
                                         height="100">
                                </label>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label
                                    class="container">@lang('lang.status')
                                    <input type="checkbox" @if($this->status==1) checked="checked" @endif
                                           name="status" value="1"
                                           wire:model.defer="status" readonly>
                                    <span class="checkmark"></span>
                                </label>


                            </div>
                        </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


</div>
