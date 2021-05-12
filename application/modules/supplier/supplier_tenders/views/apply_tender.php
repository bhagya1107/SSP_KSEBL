<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<!-- <div class="tg-section-name">
				<h2>Apply</h2>
      </div> -->
          <div class="col-lg-12" style="float-right">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title" style="float:right">
                        <li class="breadcrumb-item">
                          <a href="index-1.htm"><a href="<?php echo supplier_url("tenders") ?>">My Tenders </a><i class="fa fa-angle-double-right"></i>
                          </li>

                          <li class="breadcrumb-item"><a href="#">Register</a>
                          <!-- <?php echo supplier_url("tenders/apply/$tenderId") ?> -->
                          </li>
                    </ul>
                </div>
            </div><br>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            
          
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
             
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <!-- <h6 class="m-0">Account Details</h6> -->
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form name="formengine" id="formengine">
                              
                              <div data-role="control" data-type="form-header" data-hash="00000002" data-type-id="27" data-colspan="20" id="form-heading-00000002-acc" aria-labelledby="form-heading-00000002-acc" data-i18n-html="Headline"><span style="font-size:x-large;">Vendor/Supplier Registration Form<br></span><br>Thank you for your interest in becoming a vendor/supplier for us. If you wish to apply for this status, please fill out this online Vendor/Supplier Registration Form.<br><hr></div>

                            <div>
                              <div class='form-row'>
                                <div class=' col-md-12'> 
                                  <label for='feFirstName'> <b> Tender No   : <?php echo $gettenderdetails->tenderno;?>
                                  <?php $sep=$this->session->userdata('uid');
                                   ?> </b></label>
                                </div> 
                              </div>
                              <div class='form-row'>
                                <div class=' col-md-12'>
                                  <label for='feFirstName'><b> Tender Name   :<?php echo $gettenderdetails->tendername;?></b></label> 
                                </div> 
                              </div>
                              <div class='form-row'>
                                <div class=' col-md-12'>
                                  <label for='feFirstName'><b> Last date of submission : <?php echo $gettenderdetails->tenderdate; ?></b></label>
                                </div> 
                              </div>
                              <br>
                            </div>       
         
                            <?php
                                 echo $form_questions;

                            ?>
                                <div class="row">    
                                    <div class="col-md-5"></div>
                                    
                                      <button type="button" class=" btn  btn-sm btn-out-dashed btn-info btn-square" id="save_tender">Save</button>
                                      <button type="button" class=" btn  btn-sm btn-out-dashed btn-success btn-square"  id="save_appliedtend" >Save & Register</button>

                                      <!-- onclick="saveappliedtenders(<?php echo htmlentities(json_encode($getfavtender), ENT_QUOTES, 'UTF-8')?>);" -->
                                   
                                </div>

                                <input type="hidden" name="tender_id" value="<?php echo $tender_id;?>">
                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
                                <input type="hidden" name="is_completed" id="is_completed" value="0">
                             
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
</div>
</section>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PREVIEW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:unset">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Edit</button>
        <button type="button" class="btn btn-primary" id="SubmitApplication">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
 function saveappliedtenders(favtender) {
	  	  console.log(favtender);
$.post("<?php echo site_url('supplier/tenders/insert_appliedtenders')?>", {

            title: favtender.tendername,
			      tenderdate:favtender.tenderdate,
            tenderno: favtender.tenderno,
			      tenderauthority: favtender.tenderauthority,
           
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, function(data) {
			 alert(data);
window.location.reload();
        });
 }

</script>

<style>
.list-group-item{
    border:none!important;
    box-shadow: 0 1px 6px rgba(32,33,36,.28);
    border-color: rgba(223,225,229,0);
}
.col{
    padding:15px;
}


</style>

<script>

$(document).ready(function(){
var countcheckbox =false;


  $('#SubmitApplication').click(function(e){

    $('#is_completed').val(1);
    ProcessApplication();

  });

  $('#save_appliedtend').click(function(e){

    if(confirm("Are you sure ? This cannot be changed once submitted")){

      var obj = {};
      $(".inputtext").each(function(i, el) {

        // select options
       if($(el).is("select")){

        var value=$(this).find('option:selected').text();
       }
       // radio button
       else if($(el).is(':radio')){

        var fieldName =this.name;
         if($(this).is(':checked')){
           var value= $("input[name="+fieldName+"]:checked").data('names');
      
         }else{
          return true;
         }
        
       } 
      // checkbox
       else if($(el).is(':checkbox')){

          if($(this).is(':checked')){

            var fieldName =this.name;
            if(countcheckbox == fieldName){
              return true;
              // this is to continue looping through labels in case of multiple checkboxes;
              // this returns the label and value to be displaced only once for one particular name attribute
            }

            var string = $("input[name='" + fieldName + "']").map(function() {

               countcheckbox = fieldName;
              if($(this).prop('checked') == true){
                return $(this).data('names');
              }
            
              
              }).get().join(',');


            var value=string;
            
          }else{
            return true;
          }
       }
       else{
        var value = $(el).val();
       }
      
       
        var label = $(el).parent().parent().find('.labelfor').text();

        $('.modal-body').append("<div class='form-row'><div class='form-group col-md-6'><label>"+ label +"</label></div><div class='form-group col-md-6'><label>"+value+"</label></div></div><div class='clearfix'></div>"); 

     
      });

    
      $('#exampleModal').modal();
    }

  });

  $('#save_tender').click(function(e){
    e.preventDefault();
    ProcessApplication();
   

  });


  function ProcessApplication(){
    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);


    $('form').find(':radio:checked').each(function () {
      formData.append(this.name, $(this).val());
    });



    $('form').find(':checkbox:checked').each(function () {
      var fieldName =this.name;

      var string = $("input[name='" + fieldName + "']").map(function() {
        if($(this).prop('checked') == true){
          return this.value;
        }
       
        
        }).get().join('|');
     
      formData.append(this.name, string);
    });





    $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/tenders/saveApplication',
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function(result) {
              console.log(result);
              data= JSON.parse(result);
              msg=data.msg;
              if (data.status == 101) {

            

                    swal({
                            title: "Good job!",
                            text: msg,
                            type: "success",
                            icon : 'success',
                        });

                        location.reload();
              }else{
                 swal({
                          title: "Oops!...!",
                            text: msg,
                            type: "error",
                            icon : 'error',
                 });
              }
                        
            }
    });
  }


  var user_id= $('#user_id').val();
  if(user_id){

     return;

      var forms = $('form')[0]; // You need to use standard javascript object here
      var formData_New = new FormData(forms);
     
      $('form input[type="checkbox"]:not(:checked)').each(function(i, e) { 
          // console.log(e.getAttribute("name"));
          formData_New.append(e.getAttribute("name"),false); 
          // formData_New.append('name', 'John');
        });

        $('form input[type="radio"]:not(:checked)').each(function(i, e) { 
          // console.log(e.getAttribute("name"));
          formData_New.append(e.getAttribute("name"),false); 
          // formData_New.append('name', 'John');
        });





      $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/tenders/getSavedAnswers',
            data: formData_New,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function(result) {
              console.log(result);
              var data= JSON.parse(result);
             
              $i=0;
              $.each( data.questionId, function( key, value ) {
                //  key : 0,1,2  value = questionIds
                console.log(data.answer[$i]);
                var answers= data.answer[$i]
                  // $('#'+value).val(answers);

                 // $("input:radio[name='"+ value +"'][value=" + answers + "]").prop('checked', true);

              

               $i++;
              }); 
            }
      });


  }

});

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/jquery-library.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>