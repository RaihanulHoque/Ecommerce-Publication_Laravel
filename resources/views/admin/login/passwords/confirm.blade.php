
<!DOCTYPE html>
<html>

<head>
    <title>PBS Admin | Confirm Password?</title>
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
<body>
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
<div class="container wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4 col-sm-8 col-md-6 mx-auto forgotpwd_margin ">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="{{asset('/')}}admin/img/logo.png" alt="josh logo" class="admire_logo"><span class="text-white"> PBS Admin &nbsp;<br/>
                               Confirm Password</span>
                        </h3>
                    </div>

                    <form action="{{ route('password.confirm') }}" id="login_validator1" method="post"
                          class="form-group  login_validator">
                        @csrf

                        <div class="bg-white login_content login_border_radius">
                            <div class="form-group">
                                <label for="email">Please enter your password</label>
                                <div class="input-group">
                            <span class="input-group-addon addon_email"><i
                                    class="fa fa-envelope text-primary"></i></span>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group form-actions">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- global js -->
<script type="text/javascript" src="{{asset('/')}}admin/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/index.html"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('/')}}admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/forgot_password.js"></script>
</body>


</html>
