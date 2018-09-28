<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteMaintenance.themedesigner.in/demos/eliteMaintenance-horizontal-nav-fullwidth/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 02:42:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/fss_icon.png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/editor.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/select.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/dropify/dist/css/dropify.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    
    <style type="text/css">
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .plot-blue{
            background-color: #3498db; 
            color: white;
        }

        .plot-green{
            background-color: #2ecc71; 
            color: white;
        }

        .legend-green{
            background-color: #2ecc71; 
            color: white;
        }

        .legend-blue{
            background-color: #3498db; 
            color: white;
        }

        .legend-darkBlue{
            background-color: #34495e; 
            color: white;
        }

        .legend-purple{
            background-color: #9b59b6; 
            color: white;
        }

        .legend-orange{
            background-color: #e67e22; 
            color: white;
        }

        .plot-orange{
            background-color: #e67e22; 
            color: white;
        }

        .legend-red{
            background-color: #e74c3c; 
            color: white;
        }

        .legend-darkBlue{
            background-color: #34495e; 
            color: white;
        }

        .plot-darkBlue{
            background-color: #34495e; 
            color: white;
        }

        .plot-regular{
            background-color: #b2bec3
            color: white;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .schedBorder{
            border:1px white solid;
            height:30px;
            text-align:center;
            font-family:tahoma;
            font-size:11px;
        }

        .schedBorderMid{
            /*border:1px #000000 solid;*/
            border-left:1px #000000 solid;
            border-right:1px #000000 solid;
            height:30px;
            text-align:center;
            font-family:tahoma;
            font-size:11px;
        }

        .schedBorderTop{
            border-top:1px #000000 solid;
            border-left:1px #000000 solid;
            border-right:1px #000000 solid;
            height:30px;
            text-align:center;
            font-family:tahoma;
            font-size:11px;
        }

        .schedBorderBot{
            border-bottom:1px #000000 solid;
            border-left:1px #000000 solid;
            border-right:1px #000000 solid;
            height:30px;
            text-align:center;
            font-family:tahoma;
            font-size:11px;
        }

        .ajax-loader {
          visibility: hidden;
          background-color: rgba(255,255,255,0.7);
          position: absolute;
          z-index: +100 !important;
          width: 100%;
          height:100%;
        }

        .ajax-loader img {
          /*position: relative;
          top:50%;
          left:50%;*/
            /*display: block;
            margin-left: auto;
            margin-right: auto;*/
           position: absolute;
           top: 50%;
           left: 50%;
           width: 100px;
           height: 100px;
           margin-top: -50px; /* Half the height */
           margin-left: -50px; /* Half the width */
        }

    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color: #2D3640;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a href="index.php"><span><img src="<?php echo base_url(); ?>assets/plugins/images/header.png" alt="home" height="60px" style="margin-left: 10px;" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <!-- <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li> -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
                            <img id="imageicon" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('NAME');?></b></a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:changePass();"><i class="ti-user"></i> Change Password</a></li>
                            <li><a href="<?php echo base_url('Access/logout');?>" id="logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li> <a href="<?php echo base_url();?>Maintenance/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span></a>
                    </li>
                    <li><a href="<?php echo base_url();?>Maintenance/faculty_prof" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Faculty Profile<span class="fa arrow"></span></span></a>
                    </li>
                    <li><a href="javascript:;" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Maintenance &nbsp;  <span class="ti-angle-down"></span> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level two-li">
                            <li><a href="<?php echo base_url();?>Maintenance/departments">Departments</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/courses">Courses</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/specializations">Course Specializations</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/faculty_types">Faculty Types</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/faculty">Faculty Members</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/load_limits">Faculty Load Limits</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/subjects">Subjects</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/prerequisites">Subject Prerequisites</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/curriculum_year">Curriculum Years</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/curriculum">Curriculum Management</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/section">Section Management</a></li>
                            <li><a href="<?php echo base_url();?>Maintenance/room_labs">Rooms and Laboratories</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Transactions &nbsp;  <span class="ti-angle-down"></span><span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Transaction/load_subjects">Load Subjects</a></li>
                            <li><a href="<?php echo base_url();?>Transaction/student_eval">Student Evaluations</a></li>
                            <li><a href="<?php echo base_url();?>Transaction/subject_pref">Subject Preference</a></li>
                            <li><a href="<?php echo base_url();?>Transaction/new_schedule">Plot Schedules</a></li>
                            <li><a href="<?php echo base_url();?>Transaction/services">Services</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo base_url();?>Transaction/view_schedule" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">View Schedules<span class="fa arrow"></span></span></a>
                    </li>
                    <li><a href="javascript:;" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Reports &nbsp;  <span class="ti-angle-down"></span><span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Report/subject_offer">Subject Offerings</a></li>
                            <li><a href="<?php echo base_url();?>Report/faculty_schedule">Teaching Assignments</a></li>
                            <li><a href="<?php echo base_url();?>Report/room_schedule">Room Schedules</a></li>
                            <li><a href="<?php echo base_url();?>Report/subject_pref">Subject Preference Report</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

         <a data-toggle="modal" href="#modalNewPass" id="openMod1"></a>

        <div class="modal fade bs-example-modal-lg" id="modalNewPass" tabindex="-1" role="dialog" aria-labelledby="modalNewPass" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Change Password</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="change_pass" method="POST" enctype="multipart/form-data" data-toggle="validator">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">New Password:</label>
                                                    <input class="form-control" type="password" data-toggle="validator" data-minlength="6" id="new_pass" name="new_pass" required>
                                                    <span class="help-block">Minimum of 6 characters</span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Confirm Password:</label>
                                                        <input class="form-control" type="password" id="con_pass" name="con_pass" data-match="#new_pass" data-match-error="Whoops, these don't match" required>
                                                        <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                                                <button type="submit" name="btnNewPass" id="btnNewPass" class="btn btn-success waves-effect text-left">Save Password</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                
                