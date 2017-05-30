<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Login - RestAnalyticsAdmin</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/iCheck/skins/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/iCheck/skins/all.css')}}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome-ie7.min.css')}}">
    <![endif]-->
    <!-- end: MAIN CSS -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="login">
<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="logo">
        <img src="{{asset('images/logo.png')}}">
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>{{trans('messages.SignInMessage')}}</h3>
        <p>
            {{trans('messages.CredentialsNeeded')}}
        </p>
        <form id="loginForm" class="form-login" method="POST" action="{{url('login')}}">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                {!! csrf_field() !!}
                <div class="form-group">
							<span class="input-icon">
								<input type="email" name="email" id="email" class="form-control" placeholder="{{trans('messages.Username')}}">
								<i class="fa fa-user"></i>
                            </span>
                </div>
                <div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" name="password" id="password" class="form-control password" placeholder="{{trans('messages.Password')}}">
								<i class="fa fa-lock"></i>
                            </span>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-green pull-right">
                        {{trans('messages.Login')}} <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{{asset('plugins/respond.min.js')}}"></script>
<script src="{{asset('plugins/excanvas.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jQuery/jquery-1.11.1.min.js')}}"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="{{asset('plugins/jQuery/jquery-2.1.1.min.js')}}"></script>
<!--<![endif]-->
<script src="{{asset('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/iCheck/jquery.icheck.min.js')}}"></script>
<script src="{{asset('plugins/jquery.transit/jquery.transit.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
    var validator = $("#loginForm").validate({
        rules: {
            email: "required",
            password: "required"
        },
        messages: {
            email: "{{trans('messages.EmailNeeded')}}",
            password: "{{trans('messages.PasswordNeeded')}}"
        }
    });
</script>
</body>
<!-- end: BODY -->
</html>