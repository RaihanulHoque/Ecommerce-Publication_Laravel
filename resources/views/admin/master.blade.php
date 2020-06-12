<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!doctype html>
<html class="no-js" lang="en">

<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('/')}}admin/img/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/custom.css" />
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/c3/css/c3.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/toastr/css/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/vendors/switchery/css/switchery.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}admin/css/pages/new_dashboard.css"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>

</head>

<body class="body">
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
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand" href="index.html">
                    <h4><img src="{{asset('/')}}admin/img/logo.png" class="admin_img" alt="logo"> PBS ADMIN</h4>
                </a>
                <div class="menu mr-sm-auto">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <?php /*
                <div class="top_search_box d-none d-md-flex">
                    <form class="header_input_search">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
                */?>
                <div class="topnav dropdown-menu-right">
                    <div class="btn-group small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i
                                    class="fa fa-envelope-o fa-1x"></i>
                                <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html" class="text-white">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i
                                    class="fa fa-bell-o"></i>
                                <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                                <div class="popover-header">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('/')}}admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#" class="text-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications request_section no-bg">
                            <a class="btn btn-default btn-sm messages" id="request_btn"> <i
                                    class="fa fa-sliders" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('/')}}admin/img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>{{ Auth::user()->name }} </strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>

                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out"></i>
                                    {{ __('Logout') }}
                                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <?php /*
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                     src="{{asset('/')}}admin/img/admin.jpg">
                                <p class="user-info menu_hide">Welcome {{ Auth::user()->name }} </p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                */ ?>
                <ul id="menu">
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard</span>
                        </a>
                    </li>
                    <?php
                    /*
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Writers</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('add-writer')}}">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp;Add writers</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('manage-writers')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Manage writers
                                </a>
                            </li>
                        </ul>
                    </li
                    >*/ ?>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Categories</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('main-categories')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Main Categories
                                </a>
                            </li>
                            <li>
                                <a href="{{route('sub-categories')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Manage Sub-Categories
                                </a>
                            </li>
                            <li>
                                <a href="{{route('sec-sub-categories')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Secondary Sub-Categories
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Books</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="cards.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title"> Manage Books</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('writers')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Manage Writers
                                </a>
                            </li>
                            <li>
                                <a href="{{route('publications')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Manage Publications
                                </a>
                            </li>
                            <li>
                                <a href="{{route('merchants')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Manage Merchants
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Widgets</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="  ">
                                    <i class="fa fa-angle-right"></i>
                                    PRODUCTS
                                </a>
                            </li>
                            <li>
                                <a href="widgets2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets3.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Widgets 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title menu_hide">&nbsp; Forms</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Date Time Picker
                                </a>
                            </li>

                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Ratings
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title menu_hide">&nbsp; Charts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide">&nbsp; Galleries</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Gallery
                                </a>
                            </li>
                            <li>
                                <a href="video_gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Video Gallery
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title menu_hide">&nbsp; Email</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="mail_compose.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Compose
                                </a>
                            </li>
                            <li>
                                <a href="mail_inbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Inbox
                                </a>
                            </li>

                            <li>
                                <a href="mail_view.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View
                                </a>
                            </li>
                            <li>
                                <a href="mail_sent.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sent
                                </a>
                            </li>
                            <li>
                                <a href="mail_spam.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Spam
                                </a>
                            </li>

                            <li>
                                <a href="mail_draft.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Draft
                                </a>
                            </li>
                            <li>
                                <a href="mail_trash.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title menu_hide">&nbsp; Maps</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Vector Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp; Pages</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 404
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 500
                                </a>
                            </li>
                            <li>
                                <a href="login1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Login 1
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="login3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="register1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Register 1
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="register3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 1
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 2
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 3
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Invoice
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
            @yield('body')
        </div>
    </div>
    <!--wrapper-->
    <div id="request_list">
        <div class="request_scrollable">
            <ul class="nav nav-tabs m-t-15">
                <li class="nav-item">
                    <a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <div id="settings_section">
                        <div class="layout_styles mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4>Layout settings</h4>
                                </div>
                            </div>
                            <form autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Header</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_nav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Menu</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_menunav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">No Breadcrumb</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_breadcrumb">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4 class="setting_title">General Settings</h4>
                                </div>
                            </div>
                            <div class="data m-t-5">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
                                    <div class="col-7">
                                        <span class="chat_name">Notifications</span><br/>
                                        Get new notifications
</div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-info">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Messages</span><br/>
                                        Get new messages
</div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-danger">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Warnings</span><br/>
                                        Get new warnings
</div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-warning">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Events</span><br/>
                                        Show new events
</div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-primary">
                                            <input type="checkbox" value="" >
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourites">
                    <div id="requests" class="mx-3">
                        <div class="m-t-35">
                            <h4 class="setting_title">Favorites</h4>
                        </div>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/images1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                <div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Nancy T. Strozier</span><br/>
                                    Away
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Robbinson</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="setting_title">Contacts</h4>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Chester Hardesty</span><br/>
                                    Busy
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Peter</span><br/>
                                    Online
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Devin Hartsell</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/4.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Kimy Zorda</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('/')}}admin/img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Jessica Bell</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="{{asset('/')}}admin/js/components.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="{{asset('/')}}admin/vendors/slimscroll/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/raphael/js/raphael.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/vendors/countUp.js/js/countUp.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/new_dashboard.js"></script>

<script src="{{asset('/')}}admin/js/jquery.validate.js"></script>
<script src="{{asset('/')}}admin/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/js/dataTables.bootstrap4.min.js"></script>

<!--Page level scripts-->
<script type="text/javascript" src="{{asset('/')}}admin/js/pages/simple_datatables.js"></script>
<!-- end of global scripts-->
@yield('scripts')



</body>


</html>
