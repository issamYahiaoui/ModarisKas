<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="{{__('lang.frontTitle')}}">
    <meta name="author" content="">
    <meta name="keyword"
          content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="icon" type="image/png" sizes="16x16" href="../demos/plugins/images/favicon.png">
    <title>{{__('lang.frontTitle')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="{{__('lang.frontDescription')}}">
    <meta name="author" content="">
    <meta name="keyword"
          content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../demos/plugins/images/favicon.png">
    <title>{{__('landing.istikdamTitle')}}</title>
    <!-- Font Awesome -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb-theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb-theme/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('mdb-theme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    @if(app()->getLocale()==='ar')
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>


        <style>
            nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
                font-family: 'DroidArabicKufiRegular';
                /*font-family: 'Cairo', sans-serif;*/

            }

            body {
                direction: rtl;
            }
        </style>
    @else

        <style>
            nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
                /*font-family: 'DroidArabicKufiRegular';*/
                font-family: 'Roboto', serif;

            }

            body {
                direction: ltr;
            }
        </style>
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('social/css/hexagons.css')}}" rel="stylesheet">

    @yield('css')
</head>

<body >
<div id="app">
@yield('content')
@include('front.home.sections.footer')
<!-- SCRIPTS -->
</div>
<!--/.Footer-->
{{--end footer --}}

<!-- SCRIPTS -->
<script src="/js/lang.js"></script>

<script>


    var urlBase = '{{url('/')}}';
    var _token = '{{csrf_token()}}';
</script>
<!-- JQuery -->
<script type="text/javascript" src="{{asset('mdb-theme/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb-theme/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb-theme/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb-theme/js/mdb.min.js')}}"></script>

<script src="{{asset('landingpage/particles.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('social/js/hexagons.min.js')}}"></script>

{{--<script src="{{asset('js/LanguageSwitcher.js')}}"></script>--}}


@yield('js')
</body>

</html>
