<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="Nam Le (j251282@gmail.com)">

    <!-- favicon -- really? does it need to be this complicated??? -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <title>{{Config::get('settings.back-name')}} - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/back/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ URL::asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- SweetAlert -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @yield('head')
    <link href="{{ URL::asset('css/back/custom.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">@lang('pages.back_toggle_nav')</span>
                <span class="icon-bar">dummy 1</span>
                <span class="icon-bar">dummy 1</span>
                <span class="icon-bar">dummy 1</span>
            </button>
            <img class="img-rounded logo" src="{{ URL::asset('images/next-gen.png') }}" alt="logo"/>
            <a href="{!! route('back.home') !!}" class="navbar-brand logo-text"
               title="{!! Config::get('settings.back-name') !!}">
                {!! Config::get('settings.back-name') !!}</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <!-- alerts -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <!--
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                    -->
                </ul>
            </li>
            <!-- user account menu -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa"></i>
                    <img class="img-circle profile-image" src="{{ Auth::user()->avatar }}" alt="avatar"/>
                    {{ Auth::user() ? Auth::user()->name : 'unknown' }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i
                                    class="fa fa-fw fa-user"></i> @lang('pages.profile')</a>
                    </li>
                    <li>
                        <a href="#"><i
                                    class="fa fa-fw fa-gear"></i> @lang('pages.settings')</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{!! route('back.logout') !!}"><i
                                    class="fa fa-fw fa-power-off"></i> @lang('pages.logout')</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <!-- other icons:
                fa-bar-chart-o
                fa-table
                fa-edit
                fa-desktop
                fa-wrench
                fa-arrows-v
                fa-caret-down
                fa-file
                 -->
                <li>
                    <a href="{!! route('back.home') !!}"><i
                                class="fa fa-fw fa-dashboard"></i> @lang('pages.dashboard')</a>
                </li>
                <li>
                    <a href="{!! route('back.match.index') !!}"><i
                                class="fa fa-fw fa-table"></i> @lang('pages.manage_matches')</a>
                </li>
                @if (session('root'))
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-fw fa-wrench"></i> @lang('pages.back_restricted')
                            <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="{!! route('back.staff.index') !!}">@lang('pages.manage_staffs')</a>
                            </li>
                            <li>
                                <a href="{!! route('back.siteSettings') !!}">@lang('pages.site_settings')</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        @yield('page-heading')
                        <small>@yield('page-sub-heading')</small>
                    </h1>
                    @yield('breadcrumbs')
                </div>
            </div>
            <!-- /.row -->

            <!-- flash -->
            @if(Session::has('message'))
                <script language="JavaScript">
                    swal({
                        title: "{{ Session::get('message') }}",
                        type: "{{ Session::get('status') }}"
                    });
                </script>
            @endif

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif


            @yield('content')
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>

@yield('foot')

</body>
</html>