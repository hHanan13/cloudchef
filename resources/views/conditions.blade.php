@extends('app')

@section('content')

    <!--start conditions section-->
    <section class="conditions__section">
        <div class="container conditions__container">
            <div class="accordion faqs__accordion" id="accordionExample">
                <div class="faqs__card">
                    <div class="faqs__title" id="headingOne">
                        <!-- <a href="{{route('payment')}}" class="btn btn-success"> payment 1$ USD</a> -->
                        <h3 class="collapse__btn__faqs" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>مقدمة</span>
                            <i class="fa fa-angle-down"></i>
                        </h3>
                    </div> 
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="faqs__content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius 
                            purus. Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                        </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingTwo">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span>إذا كانت لديك أي أسئلة أو استفسارات فيما يتعلق بهذه الشروط والأحكام بإرسال رسالة إلكترونية الى info@cloudchef.com أو بالتواصل مع فريق الدعم </span>
                            <i class="fa fa-angle-down"></i>
                        </h3>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="faqs__content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                            Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                        </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingThree">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span>التعريفات</span>
                            <i class="fa fa-angle-down"></i>
                        </h3>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="faqs__content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                            Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                        </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingFour">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span>استخدام المنصة</span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingFive">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span>نحن نحتفظ بحقوق : </span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingSxth">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseSxth" aria-expanded="false" aria-controls="collapseSxth">
                          <span> الخصوصية </span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseSxth" class="collapse" aria-labelledby="headingSxth" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingSeven">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          <span> الطلبات عبر الانترنت </span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingEight">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                          <span> الدفع </span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
                <div class="faqs__card">
                    <div class="faqs__title" id="headingNine">
                        <h3 class="collapse__btn__faqs collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                          <span> الشروط العامة </span>
                        <i class="fa fa-angle-down"></i>
                        </h3>

                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                      <div class="faqs__content">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, facilisis auctor maecenas nullam sem neque malesuada in. Enim nunc tellus erat sit viverra a elit augue. A nunc nunc ac et interdum feugiat pellentesque at. Ultrices amet ac arcu commodo nibh fermentum fringilla nunc. Ultrices elit suspendisse tellus aliquet dignissim sed ac sit. Molestie auctor sed purus nisi, donec ultrices varius purus.
                           Egestas quis non pulvinar ac ligula. Sit mi arcu, urna nisl posuere. Lectus vel habitasse ligula suspendisse non quam. 
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection