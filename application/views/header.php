<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url() ?>asset/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url() ?>asset/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url() ?>asset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url() ?>asset/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>asset/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!--select to css-->
        <link href="<?php echo base_url() ?>asset/plugins/select2/css/select2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>asset/notifier/css/jquery.toast.css" rel="stylesheet" type="text/css" />

        <!--Custom metro style css-->
        <link href="<?php echo base_url() ?>asset/bootstrap/css/metro_style.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap_overight.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script>window.baseurl= '<?php echo base_url() ?>';</script>


        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "b471c23a-9087-4112-8353-12fb5087b8d5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="loader"></div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1464599523806855";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <nav class="navbar navbar-default hidden-xs">
        <div class="container">
            <ul class="nav navbar-nav navbar-left">
                <li><a class="jj_logo" href="<?= base_url() ?>"><img src="<?= base_url() ?>asset/dist/img/jj_logo.png"> </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url() ?>contactUs"><i class="fa fa-phone"></i>&nbsp;Contact us</a></li>
                <li><a href="<?= base_url() ?>newsSubmission"><i class="fa fa-newspaper-o"></i>&nbsp;Submit news</a></li>
                <li><a href="<?= base_url() ?>advertisment"><i class="fa fa-picture-o"></i>&nbsp;Advertisement</a></li>
                <li><a href="<?= base_url() ?>discus"><i class="fa fa-question-circle"></i>&nbsp;User Feedback</a></li>
            </ul>
        </div><!-- /.container-fluid -->
    </nav>