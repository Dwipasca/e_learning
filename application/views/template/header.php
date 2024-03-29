<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> E-Learning </title>
    
    <!-- header -->
    <!-- Bootstrap -->
    <link href=" <?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" <?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?> " rel="stylesheet">
    <!-- NProgress -->
    <link href=" <?php echo base_url('assets/vendors/nprogress/nprogress.css'); ?> " rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href=" <?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?> " rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href=" <?php echo base_url('assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css'); ?> " rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href=" <?php echo base_url('assets/vendors/normalize-css/normalize.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css'); ?> " rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href=" <?php echo base_url('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?> " rel="stylesheet">

    <link href=" <?php echo base_url('assets/vendors/cropper/dist/cropper.min.css'); ?> " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" <?php echo base_url('assets/build/css/custom.min.css'); ?> " rel="stylesheet">

    <!-- iCheck -->
    <link href=" <?php echo base_url('assets/vendors/iCheck/skins/flat/green.css'); ?> " rel="stylesheet">
    <!-- Datatables -->
    <link href=" <?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?> " rel="stylesheet">



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>E-Learning</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/images/img.jpg'); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?= $this->session->userdata('nama'); ?> </h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a href="<?php echo base_url('jadwal'); ?>"><i class="fa fa-home"></i> Home <span class="label label-success pull-right">Coming Soon</span></a></li>
                  
                  <li><a><i class="fa fa-edit"></i> Jadwal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_advanced.html">Tugas</a></li>
                      <li><a href="form.html">Lihat Mahasiswa</a></li>
                    </ul>
                  </li>

                  <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Diskusi <span class="label label-success pull-right">Coming Soon</span></a></li>

                </ul>
              </div>

              

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src=" <?php echo base_url('assets/images/img.jpg'); ?> " alt=""> <?= $this->session->userdata('nama'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                   
                    <li>
                      <a>
                        <span class="image"><img src=" <?php echo base_url('assets/images/img.jpg');?> " alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/images/img.jpg');?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->