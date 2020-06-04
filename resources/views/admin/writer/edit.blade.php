<head>
<?php
/*
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
<link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datepicker/css/bootstrap-datepicker.min.css">
<link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datepicker/css/bootstrap-datepicker3.css">
<link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datetimepicker/css/DateTimePicker.min.css">
<link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
<!--End of plugin styles-->
*/ ?>
<!--Plugin style-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href={{asset('/')}}admin/"vendors/animate/css/animate.min.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/portlet.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/advanced_components.css"/>

    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/datatables/css/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/dataTables.bootstrap.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/tables.css" />

    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/form_validations.css" />
    <!-- end of page level styles -->
</head>
@extends('admin.master')

@section('title')
    Admin Panel | Manage Writer/Auther
@endsection

@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Writers / Authers
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
                            <a href="#">Writers</a>
                        </li>
                        <li class="active breadcrumb-item">Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">

                <div class="col-12 data_tables">
                    <div class="card ">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> View Writer Detail
                        </div>
                        <div class="card-body ">
                            <div align="right">
                                <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
                            </div>
                            <br />
                            <form  id="categoryForm" method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data" name="categoryForm" class="form-horizontal">
                                <!-- <form id="categoryForm" action="" method="POST" name="categoryForm" class="form-horizontal"> -->
                            @csrf
                            @method('PATCH')
                            <!--<input type="hidden" name="writer_id" id="writer_id"> -->

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Writer Name (Eng.)*</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="validate[required] form-control" id="title" name="title" placeholder="Enter Name" value="{{ $data->title}}" maxlength="200" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title_bang" class="col-sm-12 control-label">Writer Name (Bang.)*</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="validate[required] form-control" id="title_bang" name="title_bang" placeholder="বাংলা নাম" value="{{ $data->title_bang}}" maxlength="200" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="slug" class="col-sm-12 control-label">Writer Name Slug URL (use-dash-for-space) *</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="validate[required] form-control smallLetter" id="slug" name="slug" placeholder="slug-url (i.e. হুমায়ূন-আহমেদ)" value="{{ $data->slug}}" maxlength="200" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-sm-12 control-label">Contact Information</label>
                                    <div class="col-sm-6 fLeft">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{ $data->phone}}" maxlength="50" >
                                    </div>
                                    <div class="col-sm-6  fLeft">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ $data->email}}" maxlength="150" >
                                    </div>
                                    <div class="lClear"></div>
                                </div>


                                <div class="form-group">
                                    <label for="phone" class="col-sm-12 control-label">Address</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $data->address}}" maxlength="200" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-sm-12 control-label">Photo</label>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" id="image" name="image"  value="" maxlength="200" >

                                        <img src="{{ URL::to('/') }}/uploads/writers/{{ $data->image }}" class="img-thumbnail" width="100" />
                                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-12 control-label">Short Description</label>
                                    <div class="col-sm-12">
                                        <textarea id="detail_info" name="detail_info" required="" placeholder="Enter Details" class="form-control">{{ $data->detail_info}}</textarea>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                    <!--<button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                                    </button> -->
                                    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />

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
