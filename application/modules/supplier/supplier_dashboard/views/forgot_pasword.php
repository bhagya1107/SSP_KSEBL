<!DOCTYPE html>
<html lang="en">

<head>
    <title>KSEB LOGIN</title> 
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
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web_user/files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web_user/files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web_user/files\assets\icon\icofont\css\icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web_user/files\assets\css\style.css">
</head>
<style>
#drag-2{
	margin-left: 10% !important;
	width:50% !important;
}
.login-block{

	background: #f7f7f7 !important;
}
.card-block {
    box-shadow: 0 0 2px #9c9c9c;
}

.scale-up-center {
	-webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.5s both;
	        animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.5s both;
}

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
@-webkit-keyframes scale-up-center {
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
}
@media (min-width: 992px){}
.col-md-12 {
    height: 61%;
    width: 100%;
}
#tg-footer{
    margin-top: 20%;
	display:block;
}
</style>
<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
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
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><br><br>
                    <!-- Authentication card start -->
                   
                            <div class="auth-box card">
                                <div class="card-block scale-up-center"><br><br> 
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                        <?php $emp=$this->session->userdata('Employee');
                                        $uid=$this->session->userdata('uid'); 
                                        ?>
                                            <h3 class="text-center">Change Password?</h3>
                                        </div>
                                    </div><br><br> 
                                    <?php if($emp=='Employee') {?>
                                        <form method="post" id="p" enctype="multipart/form-data" action="<?php echo base_url('supplier/dashboard/send_otp_employee_changepass')?>" >
                               <?php } else {?>
                                    <form method="post" id="p" enctype="multipart/form-data" action="<?php echo base_url('supplier/dashboard/send_otp')?>" >
                                    <?php } ?>
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                              
                                    <div class="form-group form-primary text-center" id="email_block"   >
                                    <script>
 
                                setTimeout(function() {
                                    $('#mydivss').hide('fast');
                                }, 7000); 

                                </script>  
                                <?php 
                            $msg=$this->session->flashdata('msg'); 
                            if($msg)
                            {
                            ?>
                            
                            <div class="alert alert-danger" id="mydivss" style="width: 60%;margin-left:20%;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <?php
                            echo $msg;
                                ?> 
                            </div>
                            
                            <?php 
                            }
                            ?>
                            <?php 
                            $msg=$this->session->flashdata('omsg'); 
                            if($msg)
                            {
                            ?>
                            
                            <div class="alert alert-success" id="mydivss" style="width: 60%;margin-left:20%;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <?php
                            echo $msg;
                                ?> 
                            </div>
                            
                            <?php 
                            }
                            ?>
                                      <label >Enter your Registered Mobile No</label>
                                        <input type="tel" name="mobile" id="mobile"  pattern="[6789][0-9]{9}" class="form-control" required="" placeholder=" registered Mobile No" autocomplete="off" style="width: 60%;">
                                        
                                        <span class="form-bar"></span>
                                    </div>

                                   
                                    <div class="row m-t-10 text-center">
                                   <div class="col-md-4 text-center " id="gtop" style="margin-left:33%" >
										
                                            <button type="submit" id="generateotp"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center">GET OTP</button>
                                            <!-- <button type="button" id="generateotp"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center">GET OTP</button><span style= "color:green;" id="paswordmess" class="hide">OTP sent to your registered mobile number</span> -->
                                    </div>
                              </form>
                                    </div>
                                    <br><br>
                                    <span style="color:red" id="error">
                                         <?php
                                      $er= $this->session->flashdata("error");
                                     echo $this->session->flashdata("error");
                                      if($er)
                                      {
                                      //  print '<script>alert("error")</script>';
                                      }
                                      ?>
                                    </span>
                                    <hr>

                                    
                                    
                                </div>
                                <br><br>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

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


</body>

</html>
<!-- 
<script>

$(document).ready(function(){

$("#generateotp").click(function() {
	$('#paswordmess').addClass('hide');
	var mobile=$('#mobile').val();
	console.log(mobile); 
	console.log($.isNumeric(mobile));console.log(mobile.length);
 if($.isNumeric(mobile)&& mobile.length ==10 ){
	 $('#paswordmess').removeClass('hide');
 }
 else{
	 alert ("enter a valid no");
 }
});
});
</script> -->
