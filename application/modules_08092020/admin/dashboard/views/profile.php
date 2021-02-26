
<form name="frm" action="" name="frm" id="frm" enctype="multipart/form-data">
<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <div class="main-body">
          <div class="page-wrapper">
              <div class="page-body">
                <div class="row">
                  <div class="col-sm-12 col-lg-4">
                      <!-- Checkbox Tree card start -->
                      <div class="card">

                          <div class="card-block">
                                <h4 class="sub-title">Profile</h4>


                              <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <label>Name <span class="star">*</span></label>
                                  <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter  name" maxlength="40" value="<?php echo $user_details->name; ?>" name="name" id="name" autocomplete="off">
                                </div>

                                </div>
                              </div>
                              <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <label>Email</label>
                                  <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter email" maxlength="40" name="email" id="email" value="<?php echo $user_details->email; ?>" autocomplete="off">
                                </div>

                                </div>
                              </div>
                              <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <label>Mobile </label>
                                  <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter Mobile" maxlength="10" name="mobile" id="mobile" value="<?php echo $user_details->mobile; ?>" autocomplete="off">
                                </div>

                                </div>
                              </div>

                                <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>User Name <span class="star">*</span></label>
                                    <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter username" maxlength="20" name="username_get" id="username_get" readonly value="<?php echo $user_details->username; ?>"  autocomplete="off">
                                  </div>

                                  </div>
                                </div>


                                <hr />
                                <div id="crude">
                                    <button class="btn btn-out-dashed btn-success btn-square" type="button" onclick="saveuser()">Update</button>
                                </div>


                              </div>


                              <div>

                              </div>
                          </div>
                      </div>




                      <div class="col-sm-12 col-lg-4">
                          <!-- Checkbox Tree card start -->
                          <div class="card">

                              <div class="card-block">
                                    <h4 class="sub-title">Chnange Password</h4>


                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>Current Password <span class="star">*</span></label>
                                      <input type="password" class="form-control form-control-sm thresold-i" placeholder="Enter  name" maxlength="40"  name="password" id="password" autocomplete="off">
                                    </div>

                                    </div>
                                  </div>
                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>New Password <span class="star">*</span></label>
                                      <input type="password" class="form-control form-control-sm thresold-i" placeholder="Enter email" maxlength="40" name="newpasswprd" id="newpasswprd"  autocomplete="off">
                                    </div>

                                    </div>
                                  </div>
                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>Confirm Password <span class="star">*</span></label>
                                      <input type="password" class="form-control form-control-sm thresold-i" placeholder="Enter confirm password" maxlength="20" name="cpasword" id="cpasword" autocomplete="off">
                                    </div>

                                    </div>
                                  </div>

                                    <hr />
                                    <div id="crude">
                                        <button class="btn btn-out-dashed btn-success btn-square" type="button" onclick="updatePwd()">Update</button>
                                    </div>


                                  </div>


                                  <div>

                                  </div>
                              </div>
                          </div>


                </div>
                    <!-- Checkbox Tree card end -->
                    <!-- DATA TABLE -->


                    <!-- DATA TABLE END  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>

<script>

$('input.thresold-i').maxlength({
    threshold: 20
});
   var elemsmall = document.querySelector('.js-small');

 	var switchery = new Switchery(elemsmall, { color: '#4680ff', jackColor: '#fff', size: 'small' });

function updatePwd()
{
  password=$("#password").val();
  newpasswprd=$("#newpasswprd").val();
  cpasword=$("#cpasword").val();
  if(password!="" && newpasswprd!="" && cpasword!="")
  {
      if(newpasswprd==cpasword)
      {

          $.ajax({
           type: "POST",
           url: '<?php echo base_url() ?>dashboard/updatePassword',
           data: $("form").serialize() ,
           success: function(result){
             //alert(result);
                 if(result==1)
                 {
                   swal({
                         title: "Done!",
                         text: "Your password updated successfully!",
                         type: "success"
                      },
                     function(){
                      location.reload();
                      });
                 }
                 else if(result==2)
                 {
                      swal("error!", "Entered existing password is wrong", "error");
                 }
                 else {
                     swal("error!", result, "error");
                 }

             }
         });
      }
      else {
        swal("error!", "New password and confirm password do not match", "error");
      }
  }
  else {
      swal("error!", "Fill all manadatory coloumns", "error");
  }
}
  function saveuser()
  {
    event.preventDefault();
    var email=$("#email").val();
    var mobile=$("#mobile").val();
    var name=$("#name").val();


    if(name!="")
    {
      $.ajax({
       type: "POST",
       url: '<?php echo base_url() ?>dashboard/updateNewuser',
       data: $("form").serialize() ,
       success: function(result){
         //alert(result);
             if(result==1)
             {
               swal({
                     title: "Done!",
                     text: "You have updated the user details!",
                     type: "success"
                  },
                 function(){
                  location.reload();
                  });
             }
             else if(result==2)
             {
                  swal("error!", "Try later", "error");
             }
             else {
                 swal("error!", result, "error");
             }

         }
     });
    }

    else
{
  playSound();
  notifys('Please fill all required columns', 'inverse');
  return false;
}

  }


</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_user/js/myScript.js"></script>
