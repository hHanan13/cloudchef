@extends('dashboard.layouts.app',['page_title'=>trans('cpanel.home')])

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-xl-10">
                @include('dashboard.layouts.cards')
                @include('dashboard.layouts.statics')
            </div>
            <div class="col-xl-2" style="padding: 0;">

                @include('dashboard.layouts.side_statics')
            </div>
    </div>
@endsection

@push('js')

    <script src="{{asset('assets/front/vendor/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('assets/front/vendor/chart.js/dist/Chart.extension.js')}}"></script>

@endpush
