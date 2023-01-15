<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> 
            {{isset($page_title) ? trans('lang.site_name') .'-'. $page_title  :   trans('cpanel.site_name')  }}

   </title>
    <!-- Favicon -->
    <link href="{{ asset('assets/front/images/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    {{--//notify--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('noty/noty.css') }}">
    <script src="{{ asset('noty/noty.min.js') }}"></script>
    {{--        end notify--}}
<!-- Icons -->

    <!-- Argon CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/front/vendor/nucleo/css/nucleo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/argon.css')}}">

    @if(auth()->check())
        @php
            if(session('seen_notifications')==null)
                session(['seen_notifications'=>0]);
            $notifications=auth()->user()->notifications()->orderBy('created_at','DESC')->limit(50)->get();
            $unreadNotifications=auth()->user()->unreadNotifications()->count();
        @endphp
    @endif
    @livewireStyles
    {{--        <livewire:styles />--}}
    @yield('styles')
    @if(app()->getLocale()=='ar')

        
        <link href="{{asset('assets/front/css/argon_rtl.css')}}" rel="stylesheet">
@endif

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="http://harshniketseta.github.io/popupMultiSelect/dist/javascripts/multiselect.min.js"></script> -->
    <link rel="stylesheet" href="{{asset('assets/front/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <script src="{{ asset('assets/front/ckeditor/ckeditor.js') }}"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>


</head>
<body>
<div class="container-fluid" style="height:100%;min-height: 100%;">
<!-- <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p> -->

@include('dashboard.layouts.sidebar')


<div class="main-content">
    <div class="container">
        @include('dashboard.layouts.navbar')

        @yield('content')
    </div>
</div>
</div>
<!-- Argon JS -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

<script src="{{asset('assets/front/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('assets/front/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script src="{{asset('assets/front/js/argon.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="{{asset('assets/front/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/chart.js/dist/Chart.extension.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>--}}

<script>
    var url = "{{url('dashboard/chartsorder')}}";
    var shipping = new Array();
    var amount = new Array();
    $(document).ready(function () {
        $.get(url, function (response) {
            shipping = response['shipping'];
            amount= response['amount'];
            var ctxs = document.getElementById("chartsales").getContext('2d');
            var myCharts = new Chart(ctxs, {
                type: 'doughnut',
                data: {
                    labels: shipping,
                    datasets: [{
                        label: 'Orders',
                        data: amount,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        $('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});
    });
</script>
<script>
    var link = "{{url('dashboard/charts')}}";
    var perfume_name = new Array();
    var rate1 = new Array();
    var price1 = new Array();
    $(document).ready(function () {
        $.get(link, function (response) {
         
            
            rate1= response['perfume'];
            price1 = response['total'];
            var ctx = document.getElementById("perumes_chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: rate1,
                    datasets: [{
                        label: 'chart two ',
                        data: price1,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    });
</script>


<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<!-- <script>
   $(document).ready(function () {
        $('#select2').select2();

   });


</script> -->
<script>
    // password
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });
</script>
@stack('modals')
@livewireScripts

@powerGridScripts


@yield('scripts')
<!-- <script type="text/javascript">
    $("#my-language").multiselect(
        {
            title: "Select Language",
            maxSelectionAllowed: 5
        });
</script> -->

<!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // $('.ckeditor').ckeditor();
        if ($('#summary-ckeditor').length) {
            CKEDITOR.replace('summary-ckeditor');
        }
        if ($('#summary-ckeditor2').length) {
            CKEDITOR.replace('summary-ckeditor2');
        }
    });
</script> -->
<script>
    $(document).ready(function () {
        jQuery('.delete').click(function (event) {
            event.preventDefault();
            console.log("Tapped Delete button")
            var that = $(this)
            // e.preventDefault();
            var n = new Noty({
                text: "@lang('lang.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('lang.yes')", 'btn btn-success mr-2', function () {
                        // that.click();
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('lang.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
        });
    });
</script>

<script>


    // $(document).ready(function() {
    //     $('.select2').select2({
    //         closeOnSelect: false
    //     });
    // });

    // setTimeout(function () {
    //     $('.alert-box').remove();
    // }, 3000);


    // document.getElementById("myBtn").addEventListener("click",()=>
    // {
    //     document.getElementById("modalUser").classList.add('fade-scale.in')
    // })

</script>

<script src="{{ asset('assets/front/ckeditor/adapters/jquery.js') }}"></script>

<script>
    CKEDITOR.replace('summary-ckeditor');
    CKEDITOR.replace('summary-ckeditor1');
    CKEDITOR.replace('summary-ckeditor2');
    CKEDITOR.replace('editor');
    CKEDITOR.replace('w3review');
</script>
<script>
    $(window).on('load', function () {
        $('#editor').ckeditor();
    });
</script>
<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });
</script>

<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#updateModal').modal('hide');
    });

</script>
<script src="{{asset('assets/front/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function () {
        $('.select2').select2({
            theme: 'bootstrap4',
        });
    })

</script>

<script>
var pusher = new Pusher("{{env("PUSHER_KEY")}}", { encrypted: true })
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('dc864af508b0307449d0', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>

</body>
</html>
