<div>

{{--    editPopModal--}}

    <div  class="modal over_modal" wire:ignore.self role="dialog" data-backdrop="true"
         style="display: block">
        <div class="modal-dialog">
                <div class="modal-content">
                    <input hidden name="id" wire:model.defer="u_id">

                    <div id="OpenDialog1" class="modal-body"
                         style="background-color: #1B222C;">

                        <div class="card ">
                            <div
                                class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">

                                    <img
                                        src="{{ asset('assets/front/images/icons/Group 119.png') }}"
                                        class="img-fluid" width="35px">
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-9">
                                        <h4 class="card-title"> {{$this->name}}</h4>
                                        <div style="width:115px;">
                                        <h5>@lang('lang.created_at')
                                            <span>{{$this->created_at}}</span></h5>
                                            </div>
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

                                            <label for="Name"
                                                   class="bmd-label-floating">@lang('lang.name')</label>

                                                    <input class="form-control" maxlength="25"
                                                           type="text" data-val="true"
                                                           :errors="$error"
                                                           placeholder="@lang('lang.name')" id="Name"
                                                           name="name_ar"
                                                           spellcheck="false" data-ms-editor="true"
                                                           wire:model.defer="name">

                                                    <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                               
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group bmd-form-group">

                                            <label for="Name"
                                                   class="bmd-label-floating">@lang('lang.guard_name')</label>

                                            
                                                    <input class="form-control" maxlength="25"
                                                           type="text" data-val="true"
                                                           wire:errors="$errors"
                                                           placeholder="@lang('lang.guard_name')" id="guard_name"
                                                           name="guard_name"
                                                           spellcheck="false" data-ms-editor="true"
                                                           wire:model.defer="guard_name">

                                                    <span class="text-danger">
                                                       @error('guard_name') {{$message}} @enderror
                                                   </span>
                                              
                                        </div>
                                    </div>
                                    <label for="exampleInputPassword1">@lang('lang.permissions')</label>

                                </div>
                                <div class="col-xl-12">

                                <div wire:ignore class="form-group bmd-form-group">

                                    <select class="select2" id="" multiple="multiple" wire:model.defer="permissions" placeholder="Select Option" name="permissions[]">
                                        <option value="">Select Option</option>
                                        @foreach ($data['models'] as $index=>$model)
                                            @foreach ($data['maps'] as $map)
                                                <option value="{{ $map . '_' . $model }}"> @lang('lang.' . $map)_ @lang('lang.' . $model) </option>

                                            @endforeach
                                        @endforeach

                                    </select>
                                </div>
                                </div>
                                
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-12">--}}
{{--                                        <div class="form-group bmd-form-group">--}}
{{--                                            <select class="form-control select2 " multiple="" wire:model.defer="permissions"  name="permissions[]" data-placeholder="{{trans('site.select')}}" style="width: 100%;" tabindex="-1" aria-hidden="true">--}}

{{--                                                @foreach ($data['models'] as $index=>$model)--}}
{{--                                                    @foreach ($data['maps'] as $map)--}}
{{--                                                        <option value="{{ $map . '_' . $model }}"> @lang('lang.' . $map)_ @lang('lang.' . $model) </option>--}}

{{--                                                    @endforeach--}}
{{--                                                @endforeach--}}


{{--                                            </select>--}}

{{--                                            @foreach ($data['models'] as $index=>$model)--}}
{{--                                                <span>--}}
{{--                                                <li class="form-group {{ $index == 0 ? 'active' : '' }}">@lang('lang.' . $model)</li>--}}
{{--                                       </span>--}}

{{--                                                <div--}}
{{--                                                    class="form-group {{ $index == 0 ? 'active' : '' }}"--}}
{{--                                                    id="{{ $model }}">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-12">--}}
{{--                                                            @foreach ($data['maps'] as $map)--}}
{{--                                                                <input type="checkbox"  value="{{ $map . '_' . $model }}"    wire:model.lazy="permissions"  name="permissions[]">--}}

{{--                                                                @lang('lang.' . $map)--}}



{{--                                                            @endforeach--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                                </td>--}}

{{--                                                </tr>--}}
{{--                                            @endforeach--}}


{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                            </div>
                            <div class="card-footer ">
                                <button class="btn btn-fill btn-rose pull-right"
                                        wire:click="update()"
                                >@lang('lang.edit')
                                </button>
                            </div>

                        </div>
                    </div>
                    <script>
            $(function(){
                $('.select2').select2({
                    theme: 'bootstrap4',
                });
            })
            CKEDITOR.replace('summary-ckeditor');

</script>

                </div>
            </div>
        </div>



</div>

@push('js')
    <script src="{{asset('assets/front/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(function(){
            $('.select2').select2({
                theme: 'bootstrap4',
            });
        })

    </script>

@endpush
