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


</style>


<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Profile</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Profile</li>
				</ol>
				<br />
			</div>
		</div>
	</div>
</div> -->
<!--************************************
		Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout"> 
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

						<div class="table-responsive">
							<table class="table table-bordered table-hover editcompany">
								<tr>
									<td style="text-align:right;width:35%;">Company Name	</td>
									<td style="width:35%;"><input type="text" id="profile" readonly class="form-control "  value="<?php echo $getcompanydetails->companyname;?>"/>	</td>
									
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
									<td style="text-align:right">Incorporation Noddd </td>
									<td><input type="text"  class="form-control "  id="incorporation" readonly value="<?php echo $getcompanydetails->incorporationno;?>"/>	</td>
									<td><input type="file"  class="form-control choose-file hide " value=""/><img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#gst" src="<?=base_url()?>assets/experience-certificate-kseb-1-638.jpg " style="width:35%" alt="Incorporation Certificates"></td>
										
								</tr>
								<tr>
									<td style="text-align:right">Incorporation Date </td>
									<td><input type="text"  class="form-control " id="date" readonly value="<?php echo $getcompanydetails->incorporationdate;?>"/>	</td>
									<td></td>
								</tr>
								
								<tr>
									<td style="text-align:right">PAN CARD NO </td>
									<td><input type="text" id="pancard" class="form-control " readonly value="<?php echo $getcompanydetails->pancardno;?>"/>	</td>
									<td></td> 
								</tr>
								<tr>
									<td style="text-align:right">GST/TIN	</td>
									<td><input type="text" id="gstin" class="form-control " readonly value="<?php echo $getcompanydetails->gst;?>"/>	</td>
									<td><input type="file"  class="form-control showprofile choose-file hide"  value="doc.img"/><img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#myModalpurchase" src="<?=base_url()?>assets/kseb2.jpg" style="width:35%" alt="GST/IN Certificates"></td>
								</tr>
								<tr>
									<td style="text-align:right">Company Address	</td>
									<td><input type="text"  id="address" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->companyaddress;?>"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text" id="mobile" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->mobile;?>"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Email	</td>
									<td><input type="text" id="email" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->email;?>"/>	</td>
									<td></td>
								</tr>
								
								<tr>
									<td style="text-align:right">Website	</td>
									<td><input type="text" id="website" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->website;?>"/>	</td>
									<td></td>
								</tr>
								
								<tr>
								<td style="text-align:right">Autorized Person	</td>
									<td><input type="text" id="authorizedperson" class="form-control showprofile" readonly value="<?php echo $getcompanydetails->authorizedperson;?>"/>	</td>
									<td><input type="file"  class="form-control showprofile choose-file hide"  value="doc.img"/><img id="myImg" class="form-control previewbutton" data-toggle="modal" data-target="#myModalpurchase" src="<?=base_url()?>assets/kseb1.jpg" style="width:35%" alt="Certificates"></td>									
								</tr>
									
							</table>
								 <div class="form-group">
                            <button type="submit" class="tg-btn pull-center editbutton" id="editprofilefn" style="margin-left:243px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Edit</span></button>
                               <button type="submit" class="tg-btn pull-center savebutton hide"  onclick="save_companydetails();" id="saveprofilefn" style="margin-left:243px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>

									</div>
 
                       

 
								
						</div>

				</div>
			
				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
			</div>
		</div>
	</div>
</main>


<div class="modal fade" id="myModalpurchase"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certificates</h5>
        
          
        </button>
      </div>
      <div class="modal-body">
             <img id="myImg" src="<?=base_url()?>assets/kseb2.jpg" alt="Snow" style="width:100%;max-width:300px;margin-left:20%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Download</button>
      </div>
    </div>
  </div>
</div>
  
<div class="modal fade" id="gst"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certificates</h5>
        
          
        </button>
      </div>
      <div class="modal-body">
	   <img id="myImg" src="<?=base_url()?>assets/kseb1.jpg" alt="Snow" style="width:100%;max-width:300px;margin-left:20%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Download</button>
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

 function save_companydetails() {

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
  

  
