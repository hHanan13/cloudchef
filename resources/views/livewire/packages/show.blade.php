<div>
    {{--    showPopModal--}}

    <div  class="modal over_modal" role="dialog" data-backdrop="true"
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
                                    <h5>@lang('lang.created_at')
                                        <span>{{$this->created_at}}</span></h5>
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

                                    <div class="row">
                                        <div class="col-md-12">
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
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.en.name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
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
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.type')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.type')" id="type"
                                                   name="name_en"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="type" readonly>

                                            <span class="text-danger">
                                                       @error('type') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.price')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.price')" id="type"
                                                   name="name_en"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="price" readonly>

                                            <span class="text-danger">
                                                       @error('price') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.duration')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.duration')" id="type"
                                                   name="duration"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="duration" readonly>

                                            <span class="text-danger">
                                                       @error('duration') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.rate')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.rate')" id="type"
                                                   name="rate"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="rate" readonly>

                                            <span class="text-danger">
                                                       @error('rate') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.count_in_rate')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.count_in_rate')" id="type"
                                                   name="count_in_rate"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="count_in_rate" readonly>

                                            <span class="text-danger">
                                                       @error('count_in_rate') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                            <div class="row">

                                <div class="col-xl-5">
                                    <label for="photo-upload"
                                           class="custom-file-upload fas">
                                        <lable>@lang('lang.image')</lable>
                                        <div class="img-wrap img-upload">
                                            <img src="{{$this->image_path}}"
                                                 width="100" height="100">
                                        </div>


                                    </label>

                                    <span class="text-danger">
                                                       @error('image') {{$message}} @enderror
                                                   </span>

                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label
                                    class="container">@lang('lang.status')
                                    <input type="checkbox"   readonly @if($this->status==1) checked="checked" @endif
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
