 <div class="col-xl-12 pt-4 pb-4 side" style="background-color: #161C26;">

                <h2 class="mb-0 text-sm"><span><img src="{{ asset('assets/front/images/icons/Group 200.png') }}" class="img-fluid" width="35px"></span> @lang('lang.Perfumes')</h2>
                <div class="card mt-4">
                                    <div class="card card-stats mt-3 mb-xl-0" style="padding: 2px;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body sid-2">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="card-title text-uppercase mb-0 sid">@lang('lang.roles')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\role::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>

            <h2 class="mb-0 text-sm"><span><img src="{{ asset('assets/front/images/icons/Group 199.png') }}" class="img-fluid" width="35px"></span> stock</h2>

            <div class="card mt-4">
                                    <div class="card card-stats mt-3 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body sid-2">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="card-title text-lowercase mb-0 sid">@lang('lang.services')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Service::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mt-3 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body sid-2">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="card-title text-lowercase mb-0 sid">@lang('lang.articles')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Article::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mt-3 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body sid-2">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="card-title text-lowercase mb-0 sid-1">@lang('lang.OrderDetail')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\order_detail::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mt-3 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;box-shadow: none;">
                                        <div class="card-body sid-2">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="card-title text-lowercase mb-0 sid-1">@lang('lang.Downloads')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Download::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
        </div>
