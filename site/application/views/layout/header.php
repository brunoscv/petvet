<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/logo.png">-->
    <title>PET</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/
    chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!--Form css plugins -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" rel="stylesheet" />
    <!--Form css plugins end -->

    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- summernotes CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="<?php echo base_url() ?>assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Cropper CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/cropper/cropper.min.css" rel="stylesheet">

    <!-- Footable CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Date picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/green.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
</head>

<body class="fix-header fix-sidebar card-no-border">
    
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <div class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light"> 
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() ?>assets/images/vet_logo.png" alt="homepage" class="dark-logo" style="width:3em;"/>
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() ?>assets/images/vet_logo.png" alt="homepage" class="light-logo" style="width:3em;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url() ?>assets/images/vet_logo.png" alt="homepage" class="dark-logo" style="width:3em;" />
                         <!-- Light Logo text -->    
                         <!-- <img src="<?php echo base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                        </span> 
                    </a> 
                </div>
                <!-- End Logo -->
                
                <div class="navbar-collapse navbar-right right">  
                    <!-- toggle and nav items -->
                    
                    <ul class="navbar-nav ml-auto mt-md-0 d-flex align-items-center">
                        <li class="nav-item mr-2"><a class="btn" href="" style="color: #43a047; font-family: Poppins, sans-serif; font-weight: 700;"><i class="fa fa-home"></i> PET</a></li>
                        <li class="nav-item mr-2"><a class="btn" href="" style="color: #43a047; font-family: Poppins, sans-serif; font-weight: 700;"><i class="fa fa-bullhorn"></i> QUEM SOMOS</a></li>
                        <li class="nav-item mr-2"><a class="btn" href="" style="color: #43a047; font-family: Poppins, sans-serif; font-weight: 700;"><i class="fa fa-rocket"></i> SERVIÇOS</a></li>
                        <li class="nav-item mr-2"><a class="btn" href="" style="color: #43a047; font-family: Poppins, sans-serif; font-weight: 700;"><i class="fa fa-lock"></i> ÁREA DO CLIENTE</a></li>
                        <li class="nav-item mr-2"><a class="btn" href="" style="color: #43a047; font-family: Poppins, sans-serif; font-weight: 700;"><i class="fa fa-envelope"></i> CONTATOS</a></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                    </ul>
                </div>
            </nav>
        </div>

        <!-- GALERIA DE CATEGORIAS -->
        <style type="text/css">
            #inputBuscarImovel {
                border-radius: 0px;
                height: 3em;
                padding: 1.5em;
            }
            #btnBuscarImovel {
                font-size: 16px;
                font-weight: 700;
                padding:0.5em 2em;
            }
            .topbar {
                /* background:#F58023; */
                background: #fff;
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
            }
            header.home {
                /* background: url('assets/images/banner1.jpg') center center no-repeat;
                background-size: cover; */
                background: #fff; 
                min-height: 640px;
                position: relative;
                color: #fff;
            }

            header.home .container-fluid {
                height: 640px;
                position: relative;
                z-index: 20;
            }
            .vcenter {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .container-fluid {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            header.home {
                color: #fff;
            }
            header.home h1 {
                font-size: 55px;
                font-weight: 500;
                /* color: #fff; */
            }
            header.home h2 {
                font-size: 22px;
                font-weight: 300;
                margin-bottom: 40px;
                /* color: #fff; */
            }
            .form-group.validate input, .form-group.validate select, .form-group.validate textarea {
                border-bottom: 1px solid #26c6da;
            }
            /* .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 15px;
                font-weight: 700;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 0;
                text-transform: uppercase;
                -o-transition: all .5s;
                transition: all .5s;
            } */
            header.home .overlay {
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: rgba(0,0,0,.3);
                position: absolute;
                z-index: 19;
                object-fit: cover;
                object-position: center center;
            }
            footer {
                padding: 50px 0;
                background-color: #F58023;
                color: #fff;
            }
            footer.copyright {
                padding: 0;
                color: #fff;
                /* background-color: #c25e00; */
                background-color: #2e7d32;
                line-height: 60px;
            }
            .btn-group-vertical > .btn-group::after, .btn-group-vertical > .btn-group::before, .btn-toolbar::after, 
            .btn-toolbar::before, .clearfix::after, .clearfix::before, .container-fluid::after, .container-fluid::before, 
            .container::after, .container::before, .dl-horizontal dd::after, .dl-horizontal dd::before, .form-horizontal 
            .form-group::after, .form-horizontal .form-group::before, .modal-footer::after, .modal-footer::before, 
            .modal-header::after, .modal-header::before, .nav::after, .nav::before, .navbar-collapse::after, 
            .navbar-collapse::before, .navbar-header::after, .navbar-header::before, .navbar::after, .navbar::before, 
            .pager::after, .pager::before, .panel-body::after, .panel-body::before, .row::after, .row::before {
                display: table;
                content: " ";
            }
        </style>
        <!-- End Topbar header -->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
        <!-- ==========================Dynamicaly Show Main Page Content============================ -->
           
        <!-- ==========================Dynamicaly Show Main Page Content============================ -->
       