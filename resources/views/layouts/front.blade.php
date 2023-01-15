<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Ghali</title>
    <link href="{{asset('css/style_rtl.css')}}" rel="stylesheet">

<script src="https://unpkg.com/vue@3"></script>
<style link="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></style>
<script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>


<!-- @if(App::getLocale() == 'en')
<link href="{{asset('css/style_rtl.css')}}" rel="stylesheet">

@else
<link href="{{asset('css/index.css')}}" rel="stylesheet">

@endif -->

</head>
<body>
    <div id="app">
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    <!-- -->
</body>
</html>