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
                                    <h4 class="card-title">@lang('lang.add')</h4>


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
                                               class="bmd-label-floating">@lang('lang.name')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" maxlength="25"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.name')" id="Name"
                                                       name="name"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="name">

                                                <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="col-xl-12">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter domain')</label>
                                    <input type="text" class="form-control input-sm" placeholder="domain"
                                           wire:model.defer="domain">
                                    <span class="text-danger"> @error('domain') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.Enter database')</label>
                                        <input type="text" wire:model.defer="database" class="form-control input-sm"
                                            placeholder="database">
                                        <span class="text-danger"> @error('database') {{$message}} @enderror </span>

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
