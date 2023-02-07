@extends('app')

@section('content')

 <!--start conditions section-->
 <section class="conditions__section">
    <div class="container">
        <div class="bankAccounts__cloumn">
            <h3 class="mdpay_title">Bank accounts</h3>
            <div class="row row__bankInfo">
                <div class="col-12 col-lg-4">
                    <div class="bankInfoCard">
                        <div class="msrfImg">
                            <img src="{{ asset('images/rgh.png') }}" alt="">
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">account name</h5>
                            <p class="accountDt">ghalialathman</p>
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">account number</h5>
                            <p class="accountDt">597000010006086110149</p>
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">iban</h5>
                            <p class="accountDt">Sa1480000597608016110149</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="bankInfoCard">
                        <div class="msrfImg">
                            <img src="{{ asset('images/enm.png') }}" alt="">
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">account name</h5>
                            <p class="accountDt">ghalialathman</p>
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">account number</h5>
                            <p class="accountDt">597000010006086110149</p>
                        </div>
                        <div class="accountWRap">
                            <h5 class="accountNamee">iban</h5>
                            <p class="accountDt">Sa1480000597608016110149</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection