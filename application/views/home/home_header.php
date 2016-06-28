<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Maths Learning</title>
        <link href="<?php echo base_url(); ?>admin/img/stm.png" rel="icon" type="image">
        <link href="<?php echo base_url(); ?>admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>admin/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/css/DT_bootstrap.css">
    </head>
    <script src="<?php echo base_url(); ?>admin/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin/js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>admin/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>admin/js/DT_bootstrap.js"></script>
    <script type='text/javascript' language='javascript' src='<?php echo base_url(); ?>js/ndhui.js'></script>


<!--slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/css/nivo-slider.css" type="text/css" media="screen" /> 

    <script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        });
    </script>
    </head>
<!--end slider -->
<body>
<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->


                    <!-- Everything you want hidden at 940px or less, place within here -->



                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                        <i class="icon-facebook-sign icon-large" id="color_white"></i>
                        <i class="icon-twitter icon-large" id="color_white"></i>
                        <i class="icon-google-plus icon-large" id="color_white"></i>
                        <i class="icon-github-alt icon-large" id="color_white"></i>
                        <i class="icon-linkedin-sign icon-large" id="color_white"></i>
                        <div class="pull-right">
                            <form class="navbar-search pull-left" method="post" action="vidpanel/search.php" required>
                                <i class="icon-search icon-large" id="color_white"></i>
                                <input type="text" class="search-query"  name="search" placeholder="Search">
                            </form>
                        </div>

                        <!-- end collapse -->
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">
                                <a href="<?php echo base_url() ?>home"><img src="<?php echo base_url(); ?>admin/images/head.png"></a>
                            </div>
                            <div class="span6">
                                <div class="pull-right">
                               <!--- login button -->                           
                                     <!--    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#student" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Student</a></li>
                                            <li><a href="#teacher" role="button"  data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Teacher</a></li>

                                        </ul>
                                    </div>

                                    <!-- end login -->

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>