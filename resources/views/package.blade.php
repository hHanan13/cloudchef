@extends('app')

@section('content')

 <!--start package section-->
 <section class="package__section">
        <div class="container package__container">
            <div class="row package__row">
                <div class="col-12 col-lg-8">
                    <div class="package__wrapper">
                        <div class="packTitle">
                            <img src="{{ asset('images/wrd.png') }}" alt="" class="packImgThumb">
                            <span>Emerging Restaurant Package</span>
                        </div>
                        <ol class="packageCont">
                            <li> Establishing the restaurant according to the target audience.</li>
                            <li> Designing the identity of the restaurant, packaging and store.</li>
                            <li> Ad design and photography of advertising content.</li>
                            <li> Menu engineering and design.</li>
                            <li> Create your online store.</li>
                            <li> Integration with multiple delivery platforms.</li>
                            <li> Ads management for your store and your account on delivery platforms.</li>
                            <li> Administrative and operational support. 9. Operational financing.</li>
                            <li> operational financial</li>
                            <li> your restaurant from and to.</li>
                        </ol>
                        <div class="flexEndPack">
                            <p>Launch your restaurant now and start selling now.</p>
                            <a href="{{ route('payment.create') }}" class="modal__btn next__btn my-0">next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__info p__absolute">
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
    </section>

@endsection