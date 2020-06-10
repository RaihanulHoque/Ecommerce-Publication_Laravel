<!DOCTYPE html>
<html>

<!-- Mirrored from demo.admireadmin.com/admire2/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2019 05:36:44 GMT -->
<head>
    <title>PBS Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('/')}}admin/img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/login1.css"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('/')}}admin/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>


<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="{{asset('/')}}admin/img/logo.png" alt="PBS logo" class="admire_logo">
                            <span class="text-white"> PBS Admin Login</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="{{ route('login') }}" id="login_validator" method="post" class="login_validator">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label"> E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input id="email" type="email" class="form-control  form-control-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input id="password" type="password" class="form-control form-control-md @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <div class="m-t-15 text-center">
                                        <a href="{{ route('password.request') }}" class="text-white">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>


                        </form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                        <input class="custom-control-input form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">

                            @if (Route::has('register'))
                                <label class="col-form-label">Don't you have an Account? </label>
                                <a href="{{ route('register') }}" class="text-primary font_18">SIGN UP</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- global js -->
<script type="text/javascript" src="{{asset('/')}}admin/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/popper.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('/')}}admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/jquery.backstretch/js/jquery.backstretch.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/login2.js"></script>

</body>


<!-- Mirrored from demo.admireadmin.com/admire2/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2019 05:36:47 GMT -->
</html>
