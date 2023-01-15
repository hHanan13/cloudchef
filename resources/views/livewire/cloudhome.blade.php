   <!--start header section-->
    <header>
        <div class="logo__wrapper">
           <div class="container logo__container">
                <a href="{{ url('/') }}" class="my__logo">
                    <img src="{{ asset('/images/logo.png') }}" alt="">
                </a>
            @if(App::getLocale() == 'ar')
                   <a href="{{url('/en/'.request()->segment(3))}}" class="lang__link">En</a>
            @else
                  <a href="{{url('/ar/'.request()->segment(3))}}" class="lang__link">ar</a>
            @endif
                
           </div>  
        </div>
    </header>
    <!--end header-->

    <!--start intro section-->
    <section class="intro__section">
        <div class="brand__cloud wow fadeInLeft" data-wow-offet="100" data-wow-duration="2s">
            <h2>Now you can launch your cloud brand at the lowest cost</h2>
            <h3>And if you have a kitchen, join us and raise your sales without any costs</h3>
        </div>
        <div class="main__banner wow fadeInRight" data-wow-offet="100" data-wow-duration="2s">
            <img src="{{ asset('/images/header.png') }}" alt="" class="banner__img">
            <a class="get__started show__started__modal" href="#">
                <span>get started</span>
                <img src="{{ asset('/images/arrow.png') }}" alt="" class="arr__img">
            </a>
        </div>
    </section>

    <!--------    started modal ---------->
    <div class="my__modal startedModal" id="startedModal">
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
                            <p>Content about the service, with you from designing the brand to choosing the type of restaurant and designing the menu to selling
                                Chef services, labor, equipment, administrative support, accountants, etc. Advertising and photography management</p>
                            <a href="#" class="modal__btn show__rest__modal">New Restaurant</a>
                            <h3 class="modal__title">Register your restaurant and receive orders</h3>
                            <p>Dedicated content
                                Marketing, purchasing support, raising efficiency, increasing income, business flexibility,</p>
                            <a href="#" class="modal__btn show__pro__modal">Professional Restaurant</a>
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
                            <form action="{{route('user.store')}}" method="post" class="register__form">
                            @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text"  placeholder="name" class="form-control" name="name">
                                        <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="store_name" placeholder="trade name" class="form-control">
                                        <span class="text-danger">

                                                       @error('store_name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="city" placeholder="city" class="form-control">
                                        <span class="text-danger"> @error('city') {{$message}} @enderror</span>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="email" name="email" placeholder="email" class="form-control">
                                        <span class="text-danger"> @error('email') {{$message}} @enderror</span>

                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="capital" placeholder="capital" class="form-control">
                                        <span class="text-danger"> @error('capital') {{$message}} @enderror</span>

                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="phone" placeholder="number" class="form-control">
                                        <span class="text-danger"> @error('phone') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" name="experience" placeholder="experience" class="form-control">
                                        <span class="text-danger"> @error('experience') {{$message}} @enderror</span>

                                    </div>

                                </div> 
                                <!-- <h3 class="mid__title">What kind of food can you prepare from your kitchen?</h3>
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
                                </div> -->
                                <a href="#" class="modal__btn next__btn" type="submit" >next</a>
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

    <!--------    professional restaurant modal ---------->
    <div class="my__modal proModal" id="proModal">
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
                                        <input type="text" placeholder="name" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="number" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="brand name" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="city" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="website" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="number of employees" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" placeholder="email" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" placeholder="number of branches" class="form-control">
                                    </div>
                                </div> 
                                <a href="#" class="modal__btn next__btn open__sec__proModal">next</a>
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

    <!--------   second pro restaurant modal ---------->
    <div class="my__modal sec__proModal" id="sec__proModal">
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
                            <h5 class="work__time">work time</h5>
                            <div class="time__wrapper">
                                <div class="time__col">
                                    <label>from: </label>
                                    <select class="time__select">
                                        <option value="8:00 AM" selected>8:00 AM</option>
                                        <option value="8:00 AM">9:00 AM</option>
                                        <option value="8:00 AM" >10:00 AM</option>
                                    </select>
                                </div>
                                <div class="time__col">
                                    <label>To: </label>
                                    <select class="time__select">
                                        <option value="8:00 AM" selected>9:00 PM</option>
                                        <option value="8:00 AM">10:00 PM</option>
                                        <option value="8:00 AM" >11:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            <form action="" class="register__form">
                                <h5 class="work__time">work time</h5>
                                <div class="check__wrapper">
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input" checked>
                                        <div class="food__wrap">
                                            <span class="icon-torta ico__icon"></span>
                                            <span>party</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-pastry ico__icon"></span>
                                            <span>pastry</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-cake ico__icon"></span>
                                            <span>cake</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-burger ico__icon"></span>
                                            <span>burger</span>
                                        </div>
                                    </div>
                                    <div class="check__relative">
                                        <input type="checkbox" class="check__input">
                                        <div class="food__wrap">
                                            <span class="icon-healthy ico__icon"></span>
                                            <span>healthy</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="modal__btn next__btn show__confirm__modal">next</a>
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

    <!--------    confirm modal ---------->
    <div class="my__modal confirmModal" id="confirmModal">
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
                            <div class="confirm__card">
                                <img src="{{ asset('/images/check.png') }}" alt="">
                                <p>You will be contacted as soon as possible.</p>
                            </div>
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


    <!--start kitchens section-->
    <section class="kitchens__section">
        <div class="container">
            <div class="row kitchen__row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kt__wrap">
                        <img src="{{ asset('/images/kt.png') }}" alt="" class="kt__img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card_wrap pt__80">
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s">
                                <img src="{{ asset('/images/k-1.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.1s">Shared kitchens in every city.</span>
                        </div>
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('/images/k-2.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.3s">More income.</span>
                        </div>
                        <div class="icons__card">
                            <div class="icon__img wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.4s">
                                <img src="{{ asset('/images/k-3.png') }}" alt="">
                            </div>
                            <span class="wow fadeInDown" data-wow-offset="100" data-wow-duration="0.5s" data-wow-delay="0.5s">Aboard new brands to your kitchen using existing resources to increase your profits.</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 pt__80">
                    <div class="ght__wrap">
                        <img src="{{ asset('/images/ght.png') }}" alt="" class="ght__img wow fadeInLeft" data-wow-offset="100" data-wow-duration="2s">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start started section-->
    <section class="started__section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="gets__wrap">
                        <a href="#" class="get__link show__started__modal hvr-sweep-to-right">
                            <span>get stated</span>
                            <img src="{{ asset('/images/arr2.png') }}" alt="" class="get__arr">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="started__des">
                        <p>At Cloud Chef, we help you launch your restaurant at the lowest costs and serve you from the beginning of the establishment to the sale.</p>
                        <p>We also serve the owners of restaurants in raising the operating rate, increasing confirmed orders, and supporting them with operational financing. </p>
                        <p>Existing kitchens will operate multiple brands that rely solely on delivery, thus boosting their monthly sales and profits. Virtual brands will cover more regions at a lower cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start mission section-->
    <section class="mission__section">
            <div class="mission__row">
                <div class="col-12 col-lg-5">
                    <div class="mission__card wow zoomInUp" data-wow-offet="100" data-wow-duration="1s">
                        <img src="{{ asset('/images/m-1.png') }}" alt="" class="miss__img">
                        <h3 class="mission__title">our mission</h3>
                    </div>
                    <div class="mission__des">
                        <p>At Cloud Chef we aim to increase restaurant income by injecting new virtual brands into existing operating kitchens in order to maximize their usage at the lowest possible cost. We deliver clear guides, recipes and supply chain providers in a seamless process that can be done overnight.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-7 px-0">
                    <div class="mission__card ps__95 wow zoomInUp" data-wow-offet="100" data-wow-duration="1s">
                        <img src="{{ asset('/images/m-2.png') }}" alt="" class="miss__img">
                        <h3 class="mission__title">our values</h3>
                    </div>
                    <div class="mission__des bk__white ps__95">
                        <p>Cloud Chef believes that the employee comes first and that company culture plays a vital role in employee performance. Our employees are the driving force behind our company culture: an entrepreneurial spirit, strategic thinking and an attitude of growth. In everything we do,
                             we strive to provide expertise, creativity and innovation. When you’re in the right culture, success will happen on its own.</p>
                    </div>
                </div>
            </div>
    </section>

     <!--start why section-->
     <section class="why__section">
        <div class="container why__container">
            <h3 class="why__title">Why Cloud Chef</h3>
            <p>At Cloud Chef we understand that average utilization rates for existing kitchens are 40%, which means they can do more than double the business on hand with the right supply paths, helping
                 their restaurants grow and serve virtual brands that have high demand and are looking for operating partners.</p>
            <img src="{{ asset('/images/ask.png') }}" alt="" class="ask__img wow tada" data-wow-iteration="2" data-wow-duration="1.5s" data-wow-offet="100" data-wow-delay="0.3s">
        </div>
     </section>

     <!--start features section-->
    <section class="features__section">
        <div class="container">
            <div class="row feature__row">
                <div class="col-12 col-md-6">
                    <div class="feature__card">
                        <img src="{{ asset('/images/f-1.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">Zero upfront cost</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card">
                        <img src="{{ asset('/images/f-2.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">Increase your kitchen usage</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card mb-lg-0">
                        <img src="{{ asset('/images/f-3.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">Serving new customers in your area with a new brand</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature__card mb-lg-0 mb-0">
                        <img src="{{ asset('/images/f-4.png') }}" alt="" class="feat__img wow fadeInDown" data-wow-offet="100" data-wow-duration="1s">
                        <span class="feat__line wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.1s"></span>
                        <p class="feat__name wow fadeInDown" data-wow-offet="100" data-wow-duration="1s" data-wow-delay="0.2s">Boost your restaurant’s monthly profit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start about section-->
    <section class="about__section">
        <div class="row mx-0">
            <div class="col-12 col-lg-5 px-0">
                <div class="about__images">
                    <div class="about__one">
                        <img src="{{ asset('/images/a-1.png') }}" alt="" class="about__one_img">
                        <div class="about_overlay"></div>
                    </div>
                    <div class="about__two">
                        <img src="{{ asset('/images/a-2.png') }}" alt="" class="about__two_img">
                        <div class="about_overlay"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 px-0">
                <div class="about__content">
                    <h3 class="about__title">About Cloud Chef</h3>
                    <div class="about__des">
                        <p>Cloud Chef is a business-to-business (B2B) platform that provides virtual kitchen services to the food and beverage industry, 
                            increasing usage rates for existing kitchens across the MENA region. Cloud Chef works with Kitchens as Fulfillment Partners and
                             aims to inject virtual brands to these Fulfillment Partners based on a revenue sharing model that increases sales and utility
                              rates. We also connect an established physical restaurant looking to expand geographically with established kitchens in multiple locations without having to worry about location, up-front cost or operating cost. Cloud Chef
                             aims to become the first virtual kitchen provider as well as become the largest franchisee in the MENA region.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start icons section-->
    <section class="icons__section">
        <div class="container icons__container">
            <div class="row icons__row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s">
                        <img src="{{ asset('/images/s-1.png') }}" alt="">
                        <h3>speed</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.2s">
                        <img src="{{ asset('/images/s-2.png') }}" alt="">
                        <h3>innovation</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.4s">
                        <img src="{{ asset('/images/s-3.png') }}" alt="">
                        <h3>trust</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bottom__card wow zoomInUp" data-wow-offet="100" data-wow-duration="2s" data-wow-delay="0.6s">
                        <img src="{{ asset('/images/s-4.png') }}" alt="">
                        <h3>respct</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>