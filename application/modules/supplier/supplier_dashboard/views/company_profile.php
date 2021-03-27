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
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
	
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">  

				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">
					

					   <form method="post" enctype="multipart/form-data" action="<?php echo base_url('supplier/dashboard/update_companyprofile')?>" >
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
						<div class="">
							
							<table class="table editcompany">
								<tr>
									<input type="hidden" name="supplierid" value="<?php echo $getcompanydetails->supplierid;?>">
									<td style="text-align:right;width:35%;">Company Name	</td>
									<td style="width:35%;"><input type="text" name="profile" id="profile" readonly class="form-control "  value="<?php echo $getcompanydetails->companyname;?>"/>	</td>
									
									<td></td>
								</tr>
									<tr>
									<td style="text-align:right">PAN CARD NO </td>
									<td><input type="text" name="pancard" id="pancard" class="form-control " readonly value="<?php echo $getcompanydetails->pancardno;?>"/>	</td>
									<td></td> 
								</tr>
								<!--<tr>
									<td style="text-align:right">Registred Date	</td>
									<td><input type="text" readonly class="form-control"  value="20/08/2020"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Renewal Date	</td>
									<td><input type="text" readonly class="form-control"  value="19/08/2021"/>	</td>
								</tr>-->
								
								<tr>
									<td style="text-align:right">GST/TIN	</td>
									<td><input type="text" id="gstin" name="gstin" class="form-control " readonly value="<?php echo $getcompanydetails->gst;?>"/>	</td>
									<td><label  class="choose-file hide " id="a">pdf up to 10mb</label><input id="file" type="file"  name="file2" class="form-control showprofile choose-file hide"  value="doc.img"/>
											 <?php if($getcompanydetails->gst_tinfile=='')
                                                                 {?>
                                                                 <p>No GST/TIN Certificate</p>
                                                               <?php }
                                                               else {?>
										<img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#myModalpurchase" src="<?=base_url()?>assets/kseb2.jpg" style="width:35%" alt="GST/IN Certificates">
										<?php } ?></td>
								</tr>
								<tr>
									<td style="text-align:right">Incorporation No </td>
									<td><input type="text"  class="form-control "  id="incorporation" name="incorporation" readonly value="<?php echo $getcompanydetails->incorporationno;?>"/>	</td>
									<td><label  class="choose-file hide " id="b">pdf up to 10mb</label><input id="file0" type="file" name="file1"  class="form-control choose-file hide " value=""/>
										<?php if($getcompanydetails->incorporationcertificate=='')
                                                                 {?>
                                                                 <p>No Incorporation Certificate</p>
                                                               <?php }
                                                               else {?>

										<img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#gst" src="<?=base_url()?>assets/experience-certificate-kseb-1-638.jpg " style="width:35%" alt="Incorporation Certificates">
									<?php } ?>
									</td>
										
								</tr>
								<tr>
									<td style="text-align:right">Incorporation Date </td>
									<td><input type="text"  class="form-control " name="date" id="date" readonly value="<?php echo $getcompanydetails->incorporationdate;?>"/>	</td>
									<td></td> 
								</tr>
								
							
								<tr>
									<td style="text-align:right">Company Address	</td>
									<td><input type="text" name="address" id="address" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->companyaddress;?>"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text" name="mobile" pattern="[6789][0-9]{9}" id="mobile" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->mobile;?>"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Company Email	</td>
									<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->email;?>"/>	</td>
									<td></td>
								</tr>
								
								<tr>
									<td style="text-align:right">Website	</td>
									<td><input type="url" pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" name="website" id="website" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->website;?>"/>	</td>
									<td></td>
								</tr>
								
								<tr>
								<td style="text-align:right">Authorized Person	</td>
									<td><input type="text" name="authorizedperson" id="authorizedperson" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->authorizedperson;?>"/>	</td>
									<td ><label  class="choose-file hide " id="c">pdf up to 10mb</label><input id="file1" type="file" name="file3" class="form-control showprofile choose-file hide"  value="doc.img"/>

      	                                <?php if($getcompanydetails->authorisedpersonfile=='')
                                                                 {?>
                                                                 <p>No Authorized Person Certificate</p>
                                                               <?php }
                                                               else {?>
										<img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#Autorized" src="<?=base_url()?>assets/kseb1.jpg" style="width:35%" alt="Certificates">
									<?php } ?>
									</td>									
								</tr>
									
							</table>
							<div class="form-group" >
                <div class="col-md-offset-4 pull-right col-xs-offset-4">
                  <a class="tg-btn pull-center editbutton" id="editprofilefn" style="" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987" ><span>Edit</span></a>
                </div>
                <button type="reset" onclick="myFunction1()"  class="tg-btn pull-right savebutton hide"   value="cancel" style="background-color: #ff6666!important; "  name="cancel" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Cancel</span></button>
                
                  <button type="submit" class="tg-btn pull-right savebutton hide"   id="saveprofilefn"  style="" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                 
                  <!-- <a href="<?php echo base_url('supplier/dashboard/profile');?>" class="tg-btn pull-center savebutton hide"   id="" style="background-color: #ff6666!important; " data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Cancel</span></a> -->
							</div>
 

 
								 
						</div>
					</form>

				</div>
			
				
			</div>
		</div>
	</div>
</main>



<div class="modal fade" id="gst"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incorporation Certificates</h5>
        
          
        </button>
      </div>
      <div class="modal-body">
      	 <?php if($getcompanydetails->incorporationcertificate=='')
                                                                 {?>
                                                                 <p>No data</p>
                                                               <?php }
                                                               else {?>
	   <embed id="myImg" src="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->incorporationcertificate)?>" alt="Snow" style="width:100%;max-width:300px;margin-left:20%">
	   <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a style="<?php if($getcompanydetails->incorporationcertificate=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->incorporationcertificate)?>" target="_blank" ><button type="button" class="btn btn-primary">Download</button></a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModalpurchase"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GST/TIN Certificates</h5>
        
          
        </button>
      </div>
      <div class="modal-body">
      	 <?php if($getcompanydetails->gst_tinfile=='')
                                                                 {?>
                                                                 <p>No data</p>
                                                               <?php }
                                                               else {?>
               <embed id="myImg" src="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->gst_tinfile)?>" alt="No Certificates" style="width:100%;max-width:300px;margin-left:20%">
               <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a style="<?php if($getcompanydetails->gst_tinfile=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->gst_tinfile)?>" target="_blank" ><button type="button" class="btn btn-primary">Download</button></a>
      </div>
    </div>
  </div>
</div>
  


<div class="modal fade" id="Autorized"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Authorized Person Certificates</h5>
        
          
        </button>
      </div>
      <div class="modal-body">

      	 <?php if($getcompanydetails->authorisedpersonfile=='')
                                                                 {?>
                                                                 <p>No data</p>
                                                               <?php }
                                                               else {?>

	  <embed id="myImg" src="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->authorisedpersonfile)?>" alt="No Certificates" style="width:100%;max-width:300px;margin-left:20%">
	  <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a style="<?php if($getcompanydetails->authorisedpersonfile=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/company_profile/'.$getcompanydetails->authorisedpersonfile)?>" target="_blank" ><button type="button" class="btn btn-primary">Download</button></a>
      </div>
    </div>
  </div>
</div>



<script>
    $('#editprofilefn').click(function(){
      $('.showprofile').removeAttr('readonly');
	  $('.editbutton').addClass('hide');
	   $('.savebutton').removeClass('hide');
	    $('.choose-file').removeClass('hide');
		$('.previewbutton').addClass('hide');
    });

       
    function myFunction1() 
                  {


                    $('.showprofile').attr("readonly", "readonly");
                    $('.editbutton').removeClass('hide');
                    $('.savebutton').addClass('hide');
                    $('.choose-file').addClass('hide');
                    $('.previewbutton').removeClass('hide');
                                

                  }

  
  
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

 function save_companydetailsss() {
 	alert();

    var profile = $("#profile").val();
	var incorporation = $('#incorporation').val();
	var date = $("#date").val();
	var pancard = $("#pancard").val();
	var gstin = $("#gstin").val();
	var address = $("#address").val();
	var mobile = $("#mobile").val();
	var email = $("#email").val();
	var website = $("#website").val();
	var authorizedperson = $("#authorizedperson").val();
    
    $(".error_msg").remove();
    var flag = 0;


    if (profile == '') {
        flag = 1;
        $("#profile").append("<span class='error_msg'>Company Name Required</span>");
    }
	
	if (incorporation == '') {
        flag = 1;
        $("#incorporation").append("<span class='error_msg'>Incorporation No Required</span>");
    }

    if (date == "") {
        flag = 1;
        $("#date").append("<span class='error_msg'>Incorporation Date Required</span>");
    }
	  if (pancard == "") {
        flag = 1;
        $("#pancard").append("<span class='error_msg'>Pancard Required</span>");
    }
	 if (gstin == "") {
        flag = 1;
        $("#pancard").append("<span class='error_msg'>GST/TIN Required</span>");
    }
	 if (mobile == "") {
        flag = 1;
        $("#mobile").append("<span class='error_msg'>Mobile Required</span>");
    }
	 if (website == "") {
        flag = 1;
        $("#website").append("<span class='error_msg'>Website Required</span>");
    }
if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo site_url('supplier/dashboard/update_companyprofile')?>", {
			suppplierid: 1,				
            profile: profile,
			incorporation:incorporation,
            date: date,
			pancard: pancard,
			gstin:gstin,
            address: address,
			mobile:mobile,
			email:email,
			website:website,
			authorizedperson:authorizedperson,
           
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, function(data) {
			 alert(data);
             $('#savemicro').removeAttr("disabled");
			window.location.reload();

        });

    }


}


</script>
  

  
