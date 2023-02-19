@extends('dashboard.app')

@section('content')

<div class="tab-content"  id="myTabContentwrapper">
                        <div class="employees__dashboard tab-pane fade in active show" role="tabpanel" id="employees__dashboard">
                            <div class="dashboard__center row px-0">
                                <div class="col-12 col-xl-9">
                                    <div class="invcTopFlex">
                                        <div class="inv__numb">
                                            <small>invoice</small>
                                            <span>024681</span>
                                        </div>
                                        <div class="printDwnFlx">
                                            <a href="#" class="kt-nav__link print__link"><img src="{{ asset('images/print.svg') }}" alt=""></a>
                                            <a href="#" class="kt-nav__link" download><img src="{{ asset('images/down.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="invoiceWrapper">
                                        <div class="myFlex__row">
                                            <div class="col-12 col-lg-5">
                                                <form action="{{ route('invoices.store') }}" class="search__form" method="Post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form__group mb__14">
                                                        <input type="password" placeholder="E-mail" class="form-control">
                                                        <button type="submit" class="submit__btn">
                                                            <i class="fa-solid fa-magnifying-glass search__icon"></i>
                                                        </button>
                                                    </div>
                                                    <a href="#" class="newCBtn">+ Add a new customer</a>
                                                    <label class="mdFtitle">Date created</label>
                                                    <div class="myFlex__row mb__20">
                                                        <div class="timeCol_relative w__70">
                                                            <i class="fa-solid fa-chevron-down down__absBtn"></i>
                                                            <input class="datepicker timeInput_md" data-date-format="mm/dd/yyyy" placeholder="20/02/2022">
                                                        </div>
                                                        <div class="timeCol_relative w__25">      
                                                            <input class="timeInput_small dashboard__select timeInput_md" id="stepExample1" placeholder="9:00 PM">
                                                        </div>
                                                    </div>
                                                    <label class="mdFtitle">add a product</label>
                                                    <select class="nice-select dashboard__select timeInput_md mb__20">
                                                        <option value="all" selected>Emerging Restaurant Package</option>
                                                        <option value="one">one</option>
                                                        <option value="two">two</option>
                                                        <option value="three">three</option>
                                                    </select>
                                                    <label class="mdFtitle">Quantity</label>
                                                    <input type="text" placeholder="0" class="form-control mb__20">
                                                    <div class="myFlex__row mb__20">
                                                        <div class="w__70">
                                                            <label class="mdFtitle">price</label>
                                                            <div class="timeCol_relative">
                                                                <span class="down__absBtn">SR</span>
                                                                <input type="text" class="dashboard__select timeInput_md" placeholder="2000">
                                                            </div>
                                                        </div>
                                                        <div class="w__25">
                                                            <label class="mdFtitle">discount</label> 
                                                            <div class="timeCol_relative">
                                                                <span class="down__absBtn">%</span>
                                                                <input type="text" class="dashboard__select timeInput_md" placeholder="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="mdFtitle">final price</label>
                                                    <div class="timeCol_relative">
                                                        <span class="down__absBtn">SR</span>
                                                        <input type="text" class="dashboard__select timeInput_md mb__20 input__bold" placeholder="1800">
                                                    </div>
                                                    <div class="relative__textarea areaWidth__100">
                                                        <textarea class="jobs__textarea invoice__textarea" placeholder="Notes" maxlength="100"></textarea>
                                                        <div class="abs__value">
                                                            <span class="number__increase">0</span> / <span>100</span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="rltvInvoice__wrapper">
                                                    <div class="invoice__details">
                                                        <div class="myFlex__row">
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">name</label>
                                                                <span class="invoice__info">Raana Elnbawy</span>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">number</label>
                                                                <span class="invoice__info">000 000 000</span>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">website</label>
                                                                <span class="invoice__info">www.com</span>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">brand name</label>
                                                                <span class="invoice__info">brand name</span>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">city</label>
                                                                <span class="invoice__info">Saudi Arabia</span>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-4 invoice_col">
                                                                <label class="inovice_label">email</label>
                                                                <span class="invoice__info">Ran@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="newCustFrm_wrap">
                                                        <form action="" class="register__form">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">name</label>
                                                                        <input type="text" placeholder="Raana Elnbawy" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number</label>
                                                                        <input type="text" placeholder="number" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">brand name</label>
                                                                        <input type="text" placeholder="brand name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">city</label>
                                                                        <input type="text" placeholder="city" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">website</label>
                                                                        <input type="text" placeholder="website" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number of employees</label>
                                                                        <input type="text" placeholder="number of employees" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">email</label>
                                                                        <input type="email" placeholder="email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <div class="relative__group">
                                                                        <label for="" class="abs__label">number of branches</label>
                                                                        <input type="text" placeholder="number of branches" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="alignFlex__end">
                                                                <button type="submit" class="modal__btn next__btn">add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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