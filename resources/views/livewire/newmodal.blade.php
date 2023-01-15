 <!--------    new restaurant modal ---------->
 <div class="my__modal restModal" id="restModal">
        <button type="button" class="close__modal">
            <img src="{{ asset('/images/close.png') }}" alt="">
        </button>
        <div class="container modal__container px-lg-0">
            <div class="inner__modal">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="register__wrap">
                            <a href="{{ url('/') }}" class="modal_logo"> 
                                <img src="{{ asset('/images/logo.png') }}" alt="">
                            </a>
                            <h3 class="modal__title">Register and launch your restaurant</h3>
                            <form action="" class="register__form">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="name" placeholder="name" class="form-control">
                                        <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="store_name" placeholder="trade name" class="form-control">
                                        <span class="text-danger">

                                                       @error('store_name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="city" placeholder="city" class="form-control">
                                        <span class="text-danger"> @error('city') {{$message}} @enderror</span>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="email" :errors="$error" wire:model.defer="email" placeholder="email" class="form-control">
                                        <span class="text-danger"> @error('email') {{$message}} @enderror</span>

                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="capital" placeholder="capital" class="form-control">
                                        <span class="text-danger"> @error('capital') {{$message}} @enderror</span>

                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="phone" placeholder="number" class="form-control">
                                        <span class="text-danger"> @error('phone') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" :errors="$error" wire:model.defer="experience" placeholder="experience" class="form-control">
                                        <span class="text-danger"> @error('experience') {{$message}} @enderror</span>

                                    </div>

                                </div> 
                                <h3 class="mid__title">What kind of food can you prepare from your kitchen?</h3>
                                <div class="check__wrapper">
                                    <div class="check__relative">
                                        <input type="checkbox" :errors="$error" wire:model.defer="kind" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-torta ico__icon"></span>
                                            <span>party</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" :errors="$error" wire:model.defer="kind" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-pastry ico__icon"></span>
                                            <span>pastry</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" :errors="$error" wire:model.defer="kind" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-cake ico__icon"></span>
                                            <span>cake</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" :errors="$error" wire:model.defer="kind" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-burger ico__icon"></span>
                                            <span>burger</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" :errors="$error" wire:model.defer="kind" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-healthy ico__icon"></span>
                                            <span>healthy</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="modal__btn next__btn" wire:click="save">next</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="contact__info">
                            <h3 class="contact__title">contact info</h3>
                            <div class="contact__card">
                                <span class="phone_icon info__icon"></span>
                                <a href="#" class="info__num">0000 000 000 000</a>
                            </div>
                            <div class="contact__card">
                                <span class="email_icon info__icon"></span>
                                <a href="#" class="info__num">example@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>