<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{URL::to('images/logo/logo.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{URL::to('assets2/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets2/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets2/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{URL::to('assets2/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{URL::to('assets2/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{URL::to('assets2/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{URL::to('assets2/css/app.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets2/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{URL::to('assets2/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('assets2/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('assets2/css/header-colors.css')}}"/>


    <title>MultiMedia MahaPutra</title>

    @yield('head')
</head>
