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
                          <form>
                              
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
                                  <label for='feFirstName'><b> Tender Name   :<?php echo $gettenderdetails->tendername;;?></b></label> 
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
                                    
                                      <button type="button" class=" btn  btn-sm btn-out-dashed btn-info btn-square">cancel</button>
                                      <button type="button" class=" btn  btn-sm btn-out-dashed btn-success btn-square"  id="save_appliedtend" onclick="saveappliedtenders(<?php echo htmlentities(json_encode($getfavtender), ENT_QUOTES, 'UTF-8')?>);">Save & Register</button>
                                   
                                </div>
                             
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
