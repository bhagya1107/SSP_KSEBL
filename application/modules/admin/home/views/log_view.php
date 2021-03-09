<!DOCTYPE html>
<html lang="en">

<head>
    <title>KSEB LOG VIEW</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
   <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\icon\icofont\css\icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\css\style.css">
</head>
<style>
.login-block{

	background: #f7f7f7 !important;
}
.card-block {
    box-shadow: 0 0 2px #9c9c9c;
}
/* 
.scale-up-center {
	-webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.5s both;
	        animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.5s both;
} */

/* ----------------------------------------------
 * Generated by Animista on 2019-12-30 18:15:1
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation scale-up-center
 * ----------------------------------------
 */
/* @-webkit-keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
} */


</style>
<body class="fix-menu">
    <!-- Pre-loader start -->
    <!-- <div class="theme-loader"> -->
        <!-- <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- Pre-loader end -->

<form name="frm" action="" method="POST">


        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <br />
                <br />

                  <div class="card">

                    <div class="card-block">
                      <div class="row">
                        <div class="col-md-2 date_range">
                            <label>From Date </label>
                            <input data-toggle="datepicker" class="form-control  form-control-sm" name="from_date" id="from_date" value="<?php echo $from_date ?>">
                        </div>
                        <div class="col-md-2 date_range">
                            <label>To Date </label>
                            <input data-toggle="datepicker" class="form-control  form-control-sm" name="to_date" id="to_date" value="<?php echo $to_date; ?>">
                        </div>
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />


                          <div class="col-md-2">
                            <br />
                            <input type="submit" class="btn btn-primary" value="VIEW" />
                          </div>
                      </div>
                      <hr />
                      <h4 style="color:red">Log</h4>
                      <?php
                       foreach($result->result() as $key)
                       {
                         $logs=$key->logs;
                         $log_datetime=$key->log_datetime;
                         echo "<p>
                          <b>$log_datetime : </b>
                         $logs
                         </p>";
                       }
                       ?>
                    </div>
                  </div>
              </div>

            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
</form>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\assets\js\common-pages.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<link rel="stylesheet" href="<?=base_url('assets/datepicker/datepicker.css')?>">
<script src="<?=base_url('assets/datepicker/datepicker.js')?>"></script>

<script>
$(function(){
	$('[data-toggle="datepicker"]').datepicker({
  format: 'yyyy-mm-dd',
	autoHide:true
});
});
</script>
</body>

</html>
