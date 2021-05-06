<?php if ($this->session->userdata('session_otp')!='') {?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- //header  -->
 <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?=base_url('assets/public/register')?>/css/bd-wizard.css">
<!-- header link -->
 <nav class="navbar navbar-expand-sm navbar-light bg-white">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="<?=base_url('assets/logo.png')?>" alt="logo"></a>
        <a class="navbar-brand" href="<?=base_url('supplier/dashboard/forgotpasstohome');?>" style="margin-left: 80%;color:black"><b>Home</b></a>
       
      </div>
    </nav>


 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-user-lock fa-4x"></i></h3>
                  <script>

                    setTimeout(function() {
                        $('#mydivss1').hide('fast');
                    }, 7000);

                    </script>
                  <?php
                  $msg = $this->session->flashdata('msg');
                  if ($msg) {
                  ?>

        <div class="alert alert-success" id="mydivss">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
            <!-- <span aria-hidden="true">&times;</span> -->
          <!-- </button> -->
          <?php
          echo $msg;
          ?>
        </div>

      <?php
      }
      ?>
      
      <?php
                  $msg = $this->session->flashdata('rmsg');
                  if ($msg) {
                  ?>

        <div class="alert alert-danger" id="mydivss1">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
            <!-- <span aria-hidden="true">&times;</span> -->
          <!-- </button> -->
          <?php
          echo $msg;
          ?>
        </div>

      <?php
      }
      ?> 
                 
             
                  <p>Enter your OTP </p>
                  <div class="panel-body">
                  <?php $s=$this->session->set_userdata('supplier',8); ?>  
                    <!-- <form id="register-form" role="form" autocomplete="off" class="form" method="post"> -->
    
                    <form method="post" action="<?php echo base_url('supplier/dashboard/send_otp_supplier_verify')?>" >
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
  
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                          <input id="otp"  name="otp" placeholder="Enter your OTP " class="form-control"  type="text" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit" style="background-color :#272360;">
                      </div>
                      <a href="<?php echo base_url('supplier/dashboard/resend_otp')?> ">Resend OTP</a>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
<style>
    
    .form-gap {
    padding-top: 70px;
}
</style>
<?php } else { redirect(base_url('forgot_password')); } ?>
