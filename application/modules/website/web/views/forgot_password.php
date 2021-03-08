
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

  
    <!-- Main Container -->
    <div class="gx-main-container">

     
        <!-- Main Content -->
        <div class="gx-main-content">
             <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                    <div class="login-content">
                        <div class="login-header" style="text-align:center">
                           
                        </div>
                        <div class="container">
                        <div class="login-form">    
                        <div class="container-sm border"  style=" margin-top: 20%;width: 120%;  margin-left: -25%;">
                                <fieldset   style="width: 50%;margin-left: 150px; height:50%;margin-top: 93px;">
								<h3 style="text-align:center;">Forgot Password</h3><br>
                                <div style="text-align:center;">
                                    <label>Enter your Registered Mobile No</label><br>
                                    <div class="form-group" id="email_group">
                                        <input name="mobile" id="mobile" class="form-control form-control-lg" placeholder="Enter Your Mobile No" type="email">
                                    </div><br>
                                    
                                    <div style="color: red;"><span> </span></div>
                         
                                    <button type="button" id="generateotp" class="btn btn-primary">Submit</button><br>
                                    </div>
<!--                                    <span style="float:right;"><a href="<?php echo site_url('/');?>" title="Login">Login</a></span>
                      -->
                                </fieldset>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                   <!---  <p style="margin-left:470px;">NETROXE IT SOLUTIONS</p>-->
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

</div>
<!-- /page container -->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/files\bower_components\bootstrap\js\bootstrap.min.js"></script> -->
    <!-- jquery slimscroll js -->

</body>
</html>

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
</script>


