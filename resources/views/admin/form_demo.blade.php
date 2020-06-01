<head>
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datepicker/css/bootstrap-datepicker.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datepicker/css/bootstrap-datepicker3.css">
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datetimepicker/css/DateTimePicker.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/form_validations.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of page level styles -->
</head>
@extends('admin.master')

@section('title')
    Admin Panel | Add Book Category
@endsection

@section('body')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Book Categories
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Categories</a>
                        </li>
                        <li class="active breadcrumb-item">Add Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Add Category
                        </div>
                        <div class="card-body m-t-35">
                            <form action="#" class="form-horizontal  login_validator" id="form_block_validator">
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="sport" class="col-form-label">Parent Category *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <select name="parent" id="parent" class="form-control select2">
                                            <option value="">Select a sport</option>
                                            <option value="option1">Tennis</option>
                                            <option value="option2">Football</option>
                                            <option value="option3">Golf</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Category Name *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">E-mail *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="email" id="email2" name="Email2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="password2" class="col-form-label">Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" id="password2" name="Password2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="confirm_password2" class="col-form-label">Confirm Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" id="confirm_password2" name="Confirmpassword2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label class="col-form-label">Date *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control form_val_popup_dp3" name="date_inline" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="url2" class="col-form-label">Url *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="url" id="url2" name="Url2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="digits" class="col-form-label">Digits Only *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="digits" name="digits_only"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="range" class="col-form-label">Range [5,16] *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="range" name="Range" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label class="col-form-label check_form_val">Agreement to policy</label>
                                    </div>
                                    <div class="col-lg-4 error_color1">
                                        <label class="custom-control custom-checkbox error_color">
                                            <input type="checkbox" class="custom-control-input" name="activate">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">I agree to the terms and conditions.</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-xl-8 ml-auto">
                                        <input type="submit" value="Validate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@endsection

<!--Plugin scripts-->
<script type="text/javascript" src="{{asset('/')}}admin/vendors/jquery-validation-engine/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/jquery-validation-engine/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/moment/js/moment.min.js"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('/')}}admin/js/form.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/form_validation.js"></script>
<!-- end page level scripts -->
