<!--************************************
		Banner Start
*************************************-->
<style>
.h1{
	color:#171b82
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

@media screen and (max-width: 767px){
  .searchbar{
    display:none;
  }

}


</style>

<!-- <main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php //$this->view('profile_sidebar',$page); ?>
				</div>

				<div class="col-md-9 col-sm-8 col-xs-12 pull-right"> -->
				<?php
									$session=$this->session->userdata('uid');
									$user_type=$this->session->userdata('user_type');
									//  echo $user_type; exit();
									?>

						<div class="table-responsive" >
							<table class="table table-bordered table-hover" style="<?php if( $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" >
								<tr> 
									
									<td style="text-align:right"> Name	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile->name;?>" />	</td> 
								</tr>
 
								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile->mobile;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Email	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile->email;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">username	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile->username;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Password	</td>
									<td><input type="password" onclick="viewdata()"  id="password" readonly class="form-control" name="password" value="<?php echo $getpersonalprofile->password;?>"  />	</td>
								</tr>
								<tr>
									<td style="text-align:right">Change Password	</td>
									<td><p>
                                            <a style="color:#3343ff" onclick="window.top.location.href='<?php echo site_url('supplier/dashboard/forgotpassword');?>'" href="#" title="Reset Password"> Click Here For Change password</a>
                                        </p>	</td>
								</tr>
							</table>




							<table class="table table-bordered table-hover" style="<?php if( $user_type=='1' OR $user_type=='2' OR $user_type=='3') echo "display: none;" ?>" >
								<tr> 
									
									<td style="text-align:right">Name	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile1->name;?>" />	</td> 
								</tr>
 
								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile1->mobilenum;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Email	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile1->email;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">username	</td>
									<td><input type="text" readonly class="form-control"  value="<?php echo $getpersonalprofile1->mobilenum;?>"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Password	</td>
									<td><input type="password" onclick="viewdata()"  id="password" readonly class="form-control" name="password" value="<?php echo $getpersonalprofile1->password;?>"  />	</td>
								</tr>
								<tr>
									<td style="text-align:right">Change Password	</td>
									<td><p>
                                            <a style="color:#3343ff" onclick="window.top.location.href='<?php echo site_url('supplier/dashboard/forgotpasswordemployees');?>'" href="#" title="Reset Password"> Click Here For Change password</a>
                                        </p>	</td>
								</tr>
							</table> 
						</div> 

				<!-- </div>
				
			</div>
		</div>
	</div>
</main> -->

<script>
function viewdata() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
 
</script>
