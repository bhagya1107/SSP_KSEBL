<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <!-- <h3><i class="fa fa-lock fa-4x"></i></h3> -->
                  <h2 class="text-center">Forgot Password?<?php $supplier_mobile=$this->session->userdata('supplier_mobile');
                ?></h2>
                  <?php 
                            $msg=$this->session->flashdata('omsg'); 
                            if($msg)
                            {
                            ?>
                            
                            <div class="alert alert-danger" id="mydivss">
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
                            $msg=$this->session->flashdata('msg'); 
                            if($msg)
                            {
                            ?>
                            
                            <div class="alert alert-success" id="mydivss">
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

                  
                  <!-- <p>You can reset your password here.</p>
                  <p>Enter your Registered Mobile No</p> -->
                  <div class="panel-body">
    
                    <!-- <form id="register-form" role="form" autocomplete="off" class="form" method="post"> -->
                    <form method="post" action="<?php echo base_url('supplier/dashboard/update_supplier_password')?>" >
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
  
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class=" color-blue"></i></span>
                          <input  name="pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$"   id="Password" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New Password" class="form-control"  type="text">
                      </div>
                        
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class=" color-blue"></i></span>
                          <input id="confirm_pass" name="confirm_pass" placeholder="Confirm password" class="form-control"  type="text">
                      </div>
                        
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">
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