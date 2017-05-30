<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
@include('layouts.head')
        <!-- end: HEAD -->
<!-- start: BODY -->
<body>
<div class="main-wrapper">
    <!-- start: TOPBAR -->
    @include('layouts.topbar')
    <!-- end: TOPBAR -->
    <!-- start: PAGESLIDE LEFT -->
    @include('layouts.sidebar')
    <!-- end: PAGESLIDE LEFT -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container inner">
        <!-- start: PAGE -->
        <div class="main-content">
            <div class="container">
                <!-- start: PAGE HEADER -->
                <!-- start: TOOLBAR -->
                @include('layouts.toolbar')
                <!-- end: TOOLBAR -->
                <!-- end: PAGE HEADER -->
                <!-- start: BREADCRUMB -->
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                {{trans('messages.AppName')}}
                            </li>
                            <li>
                                <a href='{{url('#')}}'>
                                    {{$pageTitle}}
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- end: BREADCRUMB -->
                <!-- start: PAGE CONTENT -->
                @yield('content')
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    @include('layouts.footer')
    <!-- end: FOOTER -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
@include('layouts.javascript')
@yield('table')
</body>
<!-- end: BODY -->
</html>