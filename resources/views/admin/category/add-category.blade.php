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
                                @csrf
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="sport" class="col-form-label">Parent Category </label>
                                    </div>
                                    <div class="col-xl-4">
                                        <select name="parent" id="parent" class="form-control select2">
                                            <option value="">Select Parent</option>
                                            <option value="option1">Tennis</option>
                                            <option value="option2">Football</option>
                                            <option value="option3">Golf</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Category Name (Eng.)*</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Category Name (Bang.)*</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="title_bang" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">Category Slug URL*</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="slug" name="slug" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">Category Details</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <textarea id="autosize" name="detail_info" class="form-control" cols="50" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions form-group row">
                                    <div class="col-xl-8 ml-auto">
                                        <input type="submit" name="btn" value="Submit"  class="btn btn-primary">
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
<script type="text/javascript" src="{{asset('/')}}admin/vendors/autosize/js/jquery.autosize.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/form.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/form_validation.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/form_elements.js"></script>



<!-- end page level scripts -->
