@extends('dashboard.app')

@section('content')

<div class="tab-content"  id="myTabContentwrapper">
    <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
        <div class="dashboard__center row px-0">
            <div class="col-12 col-xl-9">
                <div class="table__wrapper">
                    <div class="dashboard__table">
                         <!--row one-->
                         <div class="twrapper table__row">
                            <div class="row collapse__table">
                                <div class="col">ahmed hassan</div>
                                <div class="col">ahmed</div>
                                <div class="col">example@gmail.com</div>
                                <div class="col">0000 000 000 000</div>
                                <div class="col"><span class="contacted_span active__color"> contacted </span></div>
                                <div class="col-1">
                                    <div class="dropdown dashboard__dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis dots__icon"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item open__report__wrapper" href="report.html">
                                                <img src="img/report.svg" alt="" class="dropdown__icon" width="20px" height="27px">
                                                <span>report</span>
                                            </a>
                                            <a class="dropdown-item" href="index.html">
                                                <img src="img/envelope.svg" alt="" class="dropdown__icon" width="20px" height="18px">
                                                <span>email</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item delete__dashrow has__function" href="#">
                                                <img src="img/trash.svg" alt="" class="dropdown__icon" width="18px" height="27px">
                                                <span>delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsed__div">
                                <div class="row">
                                    <div class="col">city</div>
                                    <div class="col">date</div>
                                    <div class="col">package</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">saudi arabia</div>
                                    <div class="col">20/2/2022</div>
                                    <div class="col">package name</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">capital</div>
                                    <div class="col">experience</div>
                                    <div class="col">kitchen</div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <div class="col">12 000 sr</div>
                                    <div class="col">2 years</div>
                                    <div class="col">
                                        <span class="mr__26 flex__icons"><img src="img/p1.png" alt="" class="part__icon"> party</span>
                                        <span class="flex__icons"><img src="img/p2.png" alt="" class="part__icon"> pastry</span>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctreatInvoice__wrpper">
                    <div class="report__title">
                        <img src="{{ asset('images/inv.svg')}}" alt="" class="report__thumb">
                        <span class="add__repolink">Add a report</span>
                    </div>
                    <div class="dashInvoice__table">
                        <!--row one-->
                        <div class="twrapper table__row">
                            <div class="row collapse__table">
                                <div class="col-3">024681</div>
                                <div class="col-3">2/2/2022</div>
                                <div class="col-4">Emerging Restaurant Package</div>
                                <div class="col-2">
                                    <div class="printDwnFlx">
                                        <a href="#" class="crt-nav__link prntBk__link"><img src="{{ asset('images/prnt.svg')}}" alt=""></a>
                                        <a href="#" class="crt-nav__link" download><img src="{{ asset('images/dwn.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--report card-->
                        <div class="report__card">
                            <div class="repo_cardheader">
                                <form action="">
                                    <div class="cardrepo__start">
                                        <span class="repo__name">follow up</span>
                                        <span class="repo_date"> 9:00 AM </span>
                                        <span class="repo_date">22/2/2022</span>
                                    </div>
                                    <div class="cardrepo__end">
                                        <img src="{{ asset('images/edit.svg')}}" alt="" class="edit__icon" width="19px" height="19px">
                                        <img src="{{ asset('images/trash.svg')}}" alt="" class="trash__icon" width="18px" height="27px">
                                    </div>
                                </form>
                            </div>
                            <p class="report__des">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
                                 standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                                with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <button type="submit" class="report__btn save__btn">save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="pt__30"> 
                    <div class="yellow__card bk__site">
                        <h3 class="side__title">visit website</h3>
                        <div class="flex__end">
                            <span class="red__num">300</span>
                            <span>client</span>
                        </div>
                    </div>
                    <div class="yellow__card rg__site">
                        <h3 class="side__title">Registered</h3>
                        <div class="flex__end">
                            <span class="red__num">199</span>
                            <span>client</span>
                        </div>
                        <h5 class="typCusTitle orgColtiTle">new customer</h5>
                        <div class="flex__end">
                            <span class="grey__num orgColtiTle">120</span>
                            <span>client</span>
                        </div>
                        <h5 class="typCusTitle greColtiTle">partner client</h5>
                        <div class="flex__end">
                            <span class="grey__num greColtiTle">79</span>
                            <span>client</span>
                        </div>
                        <h5 class="typCusTitle oBColtiTle">Client under follow up</h5>
                        <div class="flex__end">
                            <span class="grey__num oBColtiTle">120</span>
                            <span>client</span>
                        </div>
                        <h5 class="typCusTitle redColtiTle">Discontinued client</h5>
                        <div class="flex__end">
                            <span class="grey__num redColtiTle">79</span>
                            <span>client</span>
                        </div>
                        <h5 class="typCusTitle grColtiTle">Uninterested customer</h5>
                        <div class="flex__end">
                            <span class="grey__num grColtiTle">79</span>
                            <span>client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection