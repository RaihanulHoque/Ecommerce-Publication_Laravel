<!DOCTYPE html>
<html>

<!-- Mirrored from demo.admireadmin.com/admire2/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2019 05:36:44 GMT -->
<head>
    <title>Login 2 | Admire</title>
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
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/login2.css"/>
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
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{asset('/')}}admin/img/logow2.png" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-12">
                            <a class="text-success m-r-20 font_18">LOG IN</a>
                            <a href="{{asset('/')}}admin/register2.html" class="text-white font_18">SIGN UP</a>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <form role="form" action="{{ route('login') }}" id="login_validator" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> E-mail</label>
                                <!--<input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail"> -->

                                <input id="email" type="email" class="form-control b_r_20 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password</label>
                                <!-- type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password"> -->

                                <input id="password" type="password" class="form-control b_r_20 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-t-15">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox">
                                        <!--<input type="checkbox" class="custom-control-input form-control">-->
                                        <input class="custom-control-input form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description text-white">Keep me logged in</a>



                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center login_bottom">
                                <button type="submit" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="m-t-15 text-center">
                                <a href="{{ route('password.request') }}" class="text-white">Forgot password ?</a>
                            </div>
                        </form>
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
