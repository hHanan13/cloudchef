<div>
{{--     AddPopModal--}}
    <div  class="modal over_modal" role="dialog" data-backdrop="true" style="display: block">
        <div class="modal-dialog ">

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
                                    <h4 class="card-title">@lang('lang.add new note')</h4>

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
                                               class="bmd-label-floating">@lang('lang.ar.name')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.ar.name')" id="Name"
                                                       name="name_ar"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="name_ar">

                                                <span class="text-danger">

                                                       @error('name_ar') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.en.name')</label>

                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.en.name')" id="Name"
                                                       name="name_en"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="name_en">

                                                <span class="text-danger">
                                                       @error('name_en') {{$message}} @enderror
                                                   </span>
                                           
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                            <label for="exampleInputPassword1">@lang('lang.Enter desc en')</label>

                                <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <textarea wire:model.defer="desc_en" class="form-control" id=""
                                              name=""></textarea>

                                    <span class="text-danger"> @error('desc_en') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <label for="exampleInputPassword1">@lang('lang.Enter desc ar')</label>

                            <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <textarea wire:model.defer="desc_ar" class="form-control" id=""
                                              name=""></textarea>

                                    <span class="text-danger"> @error('desc_ar') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter price')</label>
                                    <input type="text" class="form-control input-sm" placeholder="price"
                                           wire:model.defer="price">
                                    <span class="text-danger"> @error('price') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.Enter stock')</label>
                                        <input type="text" wire:model.defer="stock" class="form-control input-sm"
                                            placeholder="stock">
                                        <span class="text-danger"> @error('stock') {{$message}} @enderror </span>

                                    </div>
                                </div>

                                    <div class="col-xl-6">
                                        <label for="photo-upload"
                                               class="custom-file-upload fas">
                                            <lable>@lang('lang.image')</lable>

                                            <input id="photo-upload" type="file"
                                                   wire:model.defer="image">
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


</div>
