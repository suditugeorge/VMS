<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/core_images/4-anial logo@3x.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('/core_images/4-anial logo@3x.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') - Tetravet Militari
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{URL::asset('/client/css/core/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/client/css/core/core.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/client/css/core/tetravet.css')}}" rel="stylesheet" />

    {{--Extra CSS--}}
    @stack('styles')
</head>

<body class="@yield('body_class')">
    <input type="hidden" name="_token" value="{{Session::token()}}">

    @include('client.navigation')

    @yield('content')

    <script type="text/javascript" src="{{ URL::asset('/client/js/core/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/core/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/core/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/nouislider.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/client/js/plugins/bootstrap-datetimepicker.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('/client/js/now-ui-kit.js') }}"></script>

    @stack('scripts')

</body>

</html>