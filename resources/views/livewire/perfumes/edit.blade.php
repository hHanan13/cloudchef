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
                                    <h4 class="card-title"> {{$this->perfume_name_en}}</h4>
                                    
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

                                        <label for="exampleInputPassword1">@lang('lang.Enter Name en')</label>
                                        <input type="text" wire:model.defer="perfume_name_en" class="form-control input-sm"
                                            placeholder="Name">
                                        <span class="text-danger"> @error('perfume_name_en') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">@lang('lang.Enter Name ar')</label>
                                        <input type="text" wire:model.defer="perfume_name_ar" class="form-control input-sm"
                                            placeholder="Name">
                                        <span class="text-danger"> @error('perfume_name_ar') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div wire:ignore class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">@lang('lang.Enter desc en')</label>
                                        <textarea wire:model.defer="desc_en" class="form-control" id=""
                                                name=""></textarea>

                                        <span class="text-danger"> @error('desc_en') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div wire:ignore class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">@lang('lang.Enter desc ar')</label>
                                        <textarea wire:model.defer="desc_ar" class="form-control" id=""
                                                name=""></textarea>

                                        <span class="text-danger"> @error('desc_ar') {{$message}} @enderror </span>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
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
                                        <label for="exampleInputPassword1">@lang('lang.Enter stock')</label>
                                        <input type="text" wire:model.defer="stock" class="form-control input-sm"
                                            placeholder="stock">
                                        <span class="text-danger"> @error('stock') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.Enter image')</label>
                                        <input type="file" wire:model.defer="image" class="form-control input-sm"
                                            placeholder="image">
                                        <span class="text-danger"> @error('image') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.Enter Discount')</label>
                                        <input type="text" wire:model.defer="discount" class="form-control input-sm"
                                            placeholder="discount">
                                        <span class="text-danger"> @error('discount') {{$message}} @enderror </span>

                                    </div>
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
                            <button class="btn btn-fill btn-rose pull-right" wire:click="update()">@lang('lang.edit') </button>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>
</div>



