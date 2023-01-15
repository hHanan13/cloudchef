<div>
 <div wire:ignore.self class="modal over_modal" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="true" style="display: block">
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
                                    <h4 class="card-title">@lang('lang.add new role')</h4>


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

                                        <label for="exampleInputPassword1">@lang('lang.name')</label>
                                        <input type="text" wire:model.defer="name" class="form-control input-sm"  placeholder="name">
                                        <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">@lang('lang.guard_name')</label>
                                        <input type="text" wire:model.defer="guard_name" class="form-control input-sm"  placeholder="guard_name">
                                        <span class="text-danger">

                                                       @error('guard_name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>
                                <label for="exampleInputPassword1">@lang('lang.permissions')</label>

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

                            </div>
                            
                            </div>

                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="save()"
                            >@lang('lang.add')
                            </button>
                        </div>
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
