<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.creative-tim.com">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/login" >
                        Login
                    </a>
                </li>
                <li>
                    <a href="/register" >
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form class="form" method="POST" action="{{route('login')}}">
                            {{ csrf_field() }}
                            <div class="header header-info text-center">
                                <h4>Sign In</h4>
                                <div class="social-line">
                                    <a href="/auth/facebook" class="btn btn-simple btn-just-icon" data-toggle="tooltip" title="facebook">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="/auth/paypal" class="btn btn-simple btn-just-icon" data-toggle="tooltip" title="paypal">
                                        <i class="fa fa-paypal"></i>
                                    </a>
                                    <a href="/auth/google" class="btn btn-simple btn-just-icon" data-toggle="tooltip" title="google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="text-divider">Or Be Classical</p>
                            <div class="content">



                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                    <input name="email" type="text" class="form-control" placeholder="Email...">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                    <input name="password" type="password" placeholder="Password..." class="form-control" />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <!-- If you want to add a checkbox to this form, uncomment this code

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                        Subscribe to newsletter
                                    </label>
                                </div> -->
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-simple btn-info btn-lg">Get Started</button>
                            </div>
                            <div id="lippbutton">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>

</div>
<style>

</style>

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>