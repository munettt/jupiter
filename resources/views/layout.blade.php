<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>{{ config('app.name') }}</title>
	


    <!-- Bootstrap core CSS -->
	<link href="{{asset('vendor/jupiter/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/jupiter/fonts/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">

  </head>

  <body>
	<header id="site-header">
        <nav class="navbar navbar-fixed-top navbar-dark">
            <button class="navbar-toggler hidden-sm-up float-xs-left mr-1" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
            <a href="#" class="navbar-brand "><img src="{{ asset('vendor/jupiter/images/logo.png') }}" alt="" class="mr-1"> <span class="hidden-xs-down">Client Management</span></a>

            <!-- user -->
            <div class="dropdown-user dropdown float-xs-right">
                <a class="btn dropdown-toggle" href="#" id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('vendor/jupiter/images/user.png') }}" class="rounded"> John Wick
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user-dropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
            <!-- /user -->

            <!-- navbar -->
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                @include('jupiter::includes.navbar')
            </div>
        </nav> <!-- /navbar -->


    </header>

    <div class="page-wrap">
        <div class="content-wrap">
            <div id="page-title">
                @yield('page-title')
            </div>

            <div id="main-container" class="container-fluid">
				@yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="{{asset('vendor/jupiter/js/app.js')}}"></script>
  </body>
</html>