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
    Admin Panel | Details View of {{$data->title}}
@endsection

@section('body')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                       Merchant
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
                            <a href="{{route('merchant')}}">Merchant</a>
                        </li>
                        <li class="active breadcrumb-item">Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

            <div class="card">
                <div class="card-header bg-white">
                    <i class="fa fa-table"></i> View Publication Detail
                    <!--<div align="right">
                        <a class="btn" href="" >Back</a>
                    </div> -->
                </div>
                <div class="card-body ">
                    <div class="row">

                        <div class="col-lg-6 m-t-35">

                            <div class="text-center">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumb_zoom zoom admin_img_width">
                                            <img src="{{ URL::to('/') }}/uploads/merchant/{{ $data->image }}" alt="admin" class="admin_img_width"/>

                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-t-25">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab"
                                           data-toggle="tab" aria-expanded="true">Basic Info.</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Detail Info</a>
                                    </li>

                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table" id="users">
                                            <br />

                                            <tr>
                                                <td>Authorised Person</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name">{{ App\User::getData($row->athorised_person, 'name').'<br/>'.App\User::getData($row->athorised_person, 'phone') }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name">{{ $data->title }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bangla Name</td>
                                                <td>
                                                    <span class="editable" data-title="Edit User Name">{{ $data->title_bang }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SLUG-URL</td>
                                                <td>
                                                    <span class="editable" data-title="Edit User Name">{{ $data->slug }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    <span class="editable" data-title="Edit Phone Number">{{ $data->phone }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td>
                                                    <span class="editable" data-title="Edit Phone Number">{{ $data->emial }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>
                                                    <span class="editable" data-title="Edit Address">{{ $data->address }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>{{ $data->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>Created By</td>
                                                <td>
                                                    <span class="editable" data-title="Edit City">{{ app('App\User')->getData($data->created_by, "name") }}</span>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="card_nav_body_padding">

                                            <p class="text-justify">
                                                {{$data->detail_info}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->




@endsection
