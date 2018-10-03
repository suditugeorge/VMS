<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/core_images/4-anial logo@3x.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('/core_images/4-anial logo@3x.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') - Admin Tetravet Militari
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{URL::asset('/admin/css/core/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/admin/css/core/core.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/admin/css/core/tetravet.css')}}" rel="stylesheet" />

    {{--Extra CSS--}}
    @stack('styles')
</head>

<body class="@yield('body_class')">
<input type="hidden" name="_token" value="{{Session::token()}}">

@if (isset($show_nagigation) && $show_nagigation)
    @include('admin.navigation')
@endif

@yield('content')

<script type="text/javascript" src="{{ URL::asset('/admin/js/core/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/admin/js/core/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/admin/js/core/bootstrap.min.js') }}"></script>

<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/moment.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/bootstrap-switch.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/sweetalert2.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/jquery.validate.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/jquery.dataTables.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/bootstrap-tagsinput.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/jasny-bootstrap.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/fullcalendar.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/jquery-jvectormap.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/nouislider.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/chartjs.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/plugins/bootstrap-notify.js') }}"></script>
<script async type="text/javascript" src="{{ URL::asset('/admin/js/now-ui-dashboard.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('/client/js/now-ui-kit.js') }}"></script>

@stack('scripts')

</body>

</html>