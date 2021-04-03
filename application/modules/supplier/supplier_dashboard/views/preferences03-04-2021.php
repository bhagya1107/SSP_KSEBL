<!--************************************
		Banner Start
*************************************-->
<style>

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

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">


				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>

				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">
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

						<div class="table-responsive">
            <form method="post" action="<?php echo base_url('supplier/dashboard/insert_notification_status')?>">
                 <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
							<table class="table table-bordered table-hover">
								<tr>
									<td style="text-align:right"> Time Zone	</td>
									<td> 
                           
                            <select class="form-control" id="timezone" name="timezone">
                            <option value="<?php echo $viewnotifications->timezone;?>">
                           <?php echo $viewnotifications->timezone;?>
                            </option> 
                            <option value="Asia/Kolkata">
                             Asia/Kolkata
                            </option> <option value="Asia/Katmandu">
                               Asia/Katmandu
                            </option> <option value="Asia/Bangkok">
                              Asia/Bangkok
                            </option>
                            <option value="Asia/Krasnoyarsk">
                              Asia/Krasnoyarsk
                            </option>
							              <option value="Pacific/Midway">
                               Pacific/Midway
                            </option>
                            </select>
                       </td>
								</tr>
								
								
									<!--<tr>
									<td style="text-align:right">Character Encoding	</td>
									<td><input type="text"  class="form-control"  value=""/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Acessibility</td>
									<td><input type="text"  class="form-control"  value=""/>	</td>
								</tr>-->
								<tr>
									<td style="text-align:right"> Notification </td>
									<td style="text-align:left"><input type="radio"   class="custom-control  custom-radio custom-control-inline" value="true"  name="display_status" id="display_status" 
                  <?php if ($viewnotifications->preference_display_status=="true"){ echo "checked"; }?> /> &nbsp ON
									
									<input type="radio"  class="custom-control custom-radio custom-control-inline"  name="display_status" value="false"  id="display_status"  
                  <?php if ($viewnotifications->preference_display_status=="false"){ echo "checked"; }?> /> &nbsp OFF
							</td>
								</tr>
								<!--<tr>
								<td style="text-align:right;"> Font Size</td>
								<td><p style="font-size:10px;margin-left: -289px;">AAA <p style="font-size:14px;margin-left: -18px;margin-top:-40px;">AAA</p> <p style="font-size:16px;margin-left: 231px;margin-top: -41px;">AAA</p> </td>
								</tr>-->
								<tr>
									<td style="text-align:right">Date Format</td>
									<td> <select class="form-control" id="date" name="date">
                          <option value="<?php echo $viewnotifications->date_formate;?>">
                           <?php echo $viewnotifications->date_formate;?>
                            </option> 
                            <option value="MM-DD-YYYY">
                            MM-DD-YYYY
                            </option> <option value="YYYY-MM-DD">
                            YYYY-MM-DD
                            </option> <option value="DD-MM-YYYY">
                            DD-MM-YYYY
                            </option>
                            
                            </select></td>
									
								</tr>
								<!--<tr>
									<td style="text-align:right">Password</td>
									<td><input type="password"  class="form-control"  value="123"/>	</td>
								</tr>-->
								
								
							</table>
							   <div class="form-group">
                            <button type="submit" class="tg-btn pull-center editbutton"  style="margin-left:243px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>

									</div>
                  </form>
						</div>

				</div>
				
			</div>
		</div>
	</div>
</main>

<script>
$( ".datepicker" ).datepicker({
   format: 'yyyy-mm-dd'
});

 function save_preferences() {
	// alert();
    var timezone = $("#timezone").val();
	var display_status = $('#display_status').val();
	var date = $("#date").val();
	
	
    $(".error_msg").remove();
    var flag = 0;


    if (timezone == '') {
        flag = 1;
        $("#timezone").append("<span class='error_msg'>timezone Required</span>");
    }
	
	if (display_status == '') {
        flag = 1;
        $("#display_status").append("<span class='error_msg'>Display Status Required</span>");
    }

    if (date == "") {
        flag = 1;
        $("#date").append("<span class='error_msg'>date Required</span>");
    }

  
    if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo site_url('supplier/dashboard/insert_preferenceprofile')?>", {

            timezone: timezone,
			      display_status:display_status,
            date: date, 
			
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, function(data) {
			 alert(data);
             $('#savemicro').removeAttr("disabled");
			window.location.reload();

        });

    }


}

</script>

