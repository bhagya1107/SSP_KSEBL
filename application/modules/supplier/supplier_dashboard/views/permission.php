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

<!-- <main id="tg-main" class="tg-main tg-haslayout"> 
	<div class="container">
		
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

        <div class="col-md-3 col-sm-4 col-xs-12">
						<?php //$this->view('profile_sidebar',$page); ?>
				</div>

				<div class="col-md-9 col-sm-8 col-xs-12 pull-right"> -->

						<div class="">
  
                <?php 
                  $msg=$this->session->flashdata('msg'); 
                  if($msg)
                  {
                    ?>
                    
                    <div class="alert alert-success">
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

						</div> 

						<div style=" border-style: solid;  border-width: thin;" ><br><br>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <form method="post" action="<?php echo base_url('supplier/dashboard/Supplier_dashboard/insert_access_permission');?>">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
   
              			 <div class="form-group" style="width:190px; margin-left: 15%" id="div1">
                    <!--  <label>User Type</label> -->
                     <select class="form-control" name="user_type" id="s" >
                      <option selected disabled >
                         -Select User Type-
                       </option>  
                      <option value="4" >
                         Accounts Manager
                       </option> <option value="5" >
                         Delivery Manager
                       </option>
                       <option value="6">
                        Basic User
                       </option>
                     </select>
                   </div>
                <div   id="div2">
                  <h1></h1>
                </div>
                <div id="div2" style="margin-left: 15%;">

                  <input type="checkbox" id="procurement_plan" name="procurement_plan" value="1" >
                  <label for="accounts"style="margin-top:-21px;margin-left:27px;"> Procurement Plan
                  <!--  <?php echo $getcompanypermissiondetails->procurement_plan;?> <?php echo $getcompanypermissiondetails->user_type;?> -->
                    
                  </label><br>
            
                  <input type="checkbox" id="tenders" name="tenders" value="1"  >
                  <label for="tenders" style="margin-top:-21px;margin-left:27px;"> Tenders</label><br>
                  
                  <input type="checkbox" id="purchase_order" name="purchase_order" value="1"  >
                  <label for="purchase_order" style="margin-top:-21px;margin-left:27px;" > Purchase Order</label><br>
                  
                  <input type="checkbox" id="delivery" name="delivery" value="1" >
                  <label for="delivery" style="margin-top:-21px;margin-left:27px;" > Delivery</label><br>
                  
                  <input type="checkbox" id="accounts" name="accounts" value="1"  >
                  <label for="accounts" style="margin-top:-21px;margin-left:27px;"> Accounts</label><br>


                  <input type="checkbox" id="work_measurement" name="work_measurement" value="1" >
                  <label for="work_measurement" style="margin-top:-21px;margin-left:27px;"> Work Measurement</label><br>
              
                  <input type="submit" class="tg-btn " value="Submit"> 
						    </div><br><br>
              </form>
            </div>
				<!-- </div>
			
			</div>
		</div>
	</div>
</main> -->

  <script type="text/javascript">
  $(document).ready(function(){ 
    $("#s").on('change',function() 
    {
      $.ajax({
        type:'post',
        url:"<?php echo base_url('supplier/dashboard/Supplier_dashboard/getdetails')?>",  
         dataType: 'json',
        data:{
          id: $('#s').val()
        },
        success:function(result)
        {
           $('#procurement_plan').prop('checked', false);
           $('#tenders').prop('checked', false);
            $('#purchase_order').prop('checked', false);
             $('#delivery').prop('checked', false);
              $('#accounts').prop('checked', false);
              $('#work_measurement').prop('checked', false);

          
          if(result){
           
            if(result.procurement_plan==1){
          
              $('#procurement_plan').prop('checked', true); 
            }
        
            if(result.tenders==1){
             
              $('#tenders').prop('checked', true);
            }
   
           
            if(result.purchase_order==1){
             
              $('#purchase_order').prop('checked', true);
            }
    
            
            if(result.delivery==1){
                    $('#delivery').prop('checked', true);
            }
          
         
            if(result.accounts==1){
                           $('#accounts').prop('checked', true);
            }
           
            if(result.work_measurement==1){
                        $('#work_measurement').prop('checked', true);
            }
          }
          // $('#div2').html(result);
        }
      });
    });
  });
</script>

  

