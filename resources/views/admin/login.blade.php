<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                          @include('home.message')
                            <form action="{{ route('admin_logincheck') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" name="email" required data-msg="Please enter your username" class="input-material">
                                    <label for="email" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                                    <label for="password" class="label-material">Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="/register" class="signup">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
    </div>
</div>
<!-- JavaScript files-->
<script src="{{ asset('assets') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/popper.js/umd/popper.min.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/admin/js/front.js"></script>
</body>
</html>
