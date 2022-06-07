<?php if($_GET["pan"]!='') { ?>
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
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <script>

setTimeout(function() {
    $('#mydivss').hide('fast');
}, 7000);

</script>
                  <?php
                  $msg = $this->session->flashdata('msg');
                  if ($msg) {
                  ?>

        <div class="alert alert-danger" id="mydivss">
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
     
    
                  <h2 class="text-center">Set Password?</h2> 
                  <p>You can set your password here.</p>
                  <p>Enter your Password</p>
                  <div class="panel-body">
                  <?php $s=$this->session->set_userdata('supplier',8); ?>  
                    <!-- <form id="register-form" role="form" autocomplete="off" class="form" method="post"> -->
                  
                    <?php $pan= $_GET["pan"]; ?>
                    <form method="post" action="<?php echo base_url('supplier/dashboard/update_set_password')?>" >
                 
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                    <input type="hidden" name="pan" value="<?php echo $pan?>" />
  
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa- color-blue"></i></span>
                          <input id="txtPassword"  name="pass" placeholder="Password" class="form-control"  type="password" required="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa- color-blue"></i></span>
                          <input id="txtConfirmPassword"  name="confirm_pass" placeholder="Confirm Password" class="form-control"  type="password" required="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit" style="background-color :#272360;">
                      </div>
                       
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


<script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("txtPassword");
        var txtConfirmPassword = document.getElementById("txtConfirmPassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
</script>
<?php } else {
  redirect(base_url(''));
}?>