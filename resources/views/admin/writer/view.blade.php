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
                            <div class="jumbotron text-center">
                                <div align="right">
                                    <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
                                </div>
                                <br />
                                <img src="{{ URL::to('/') }}/uploads/writers/{{ $data->image }}" class="img-thumbnail" />
                                <h3>Name Bangla - {{ $data->title_bang }} </h3>
                                <h3>SLUG URL - {{ $data->slug }}</h3>
                                <p>Phone - {{ $data->phone}}</p>
                                <p>Email - {{ $data->email}}</p>
                                <p>Address - {{ $data->address}}</p>
                                <p>Detail Info - {{ $data->detail_info}}</p>
                            </div>
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
