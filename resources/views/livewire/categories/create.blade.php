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
                                    <h4 class="card-title">@lang('lang.add_new_category')</h4>

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

                                        

                                        <div class="row">
                                            <label for="Name"
                                               class="bmd-label-floating">@lang('lang.ar.name')</label>
                                            <div class="col-md-12">
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
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        

                                        <div class="row">
                                            <label for="Name"
                                               class="bmd-label-floating">@lang('lang.en.name')</label>
                                            <div class="col-md-12">
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
                                </div>
                            </div>

                            <div class="row">
                               
                                <div class="col-xl-12">
                                    <div wire:ignore class="form-group bmd-form-group">

                                    <label for="Name"
                                               class="bmd-label-floating">@lang('lang.en.description')</label>

                                    <textarea wire:model.defer="description_ar" class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

                                    <span class="text-danger"> @error('desc_en') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div wire:ignore class="form-group bmd-form-group">

                                    <label for="Name"
                                               class="bmd-label-floating">@lang('lang.ar.description')</label>
                                    <textarea wire:model.defer="description_ar" class="form-control" id="summary-ckeditor1" name="summary-ckeditor1"></textarea>

                                    <span class="text-danger"> @error('desc_ar') {{$message}} @enderror </span>

                                    </div>
                                </div>

                            </div>

 <div class="row">
                                 <label class="container">@lang('lang.item_status')
                                        
                                    </label>
                                <div class="col-md-12">
                                    <label class="container">@lang('lang.status')
                                        <input type="checkbox" name="status" value="1"
                                            wire:model.defer="status">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-12">
                                    <label for="photo-upload" class="custom-file-upload fas">
                                        <div class="img-wrap img-upload">
                                            <i class="fa-solid fa-camera"></i>
                                        </div>
                                        <input id="photo-upload" type="file" wire:model.defer="image">
                                    </label>

                                    <span class="text-danger">
                                                    @error('image') {{$message}} @enderror
                                                </span>

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






    
    




