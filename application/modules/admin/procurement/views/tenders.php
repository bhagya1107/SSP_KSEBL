<style type="text/css">
  .tbllength {
    max-width: 160px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap; 
  }
  .btnsucessor{
    background-color: #e32d2d !important;
    border-color : #e32d2d !important;
  }
</style>
<form name="frm" action="" name="frm" id="frm" enctype="multipart/form-data" method="post">
<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <div class="main-body">
          <div class="page-wrapper">
              <div class="page-body">
                <div class="row">


  <div class="col-md-12">

<div class="page-header">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <div class="d-inline">
                  <h4>Procurement</h4>
                  <span>Manage Procurement here</span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">Procurement</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>
<!-- <div class="alert alert-warning background-warning">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<i class="icofont icofont-close-line-circled text-white"></i>
</button>
<strong>Info!</strong> Click on <label class="label label-info">PUBLISH</label>  to publis a tender. |   Click on <label class="label label-success">PUBLISHED</label>  to see applied suppliers. | Click on <label class="label label-danger">CLOSED</label>  to see PQ list.
</div> -->


  <div class="card borderless-card">

<!-- </div> -->

                        <div class="card">

                      
                                         

                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dt-ajax-object" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        
                                            <tr>
                                              <!-- <th>#</th>
                                             
                                              <th>Tender Name</th>
                                              <th>Tender Date</th>
                                              <th>Tender End date</th>
                                              <th>Status</th>
                                              <th>#</th> -->
                                              <th>#</th>
                                             
                                              <th>Tender Number</th>
                                              <th>Tender Title</th>
                                              <th>Tender Description</th>
                                              <th>Tender Date</th>
                                              <th></th>
                                          </tr>
                                      
                                        </thead>
                                        <tbody>

                                       
                                        <?php $i=1;
                                        foreach ($tenderdata as $tenderdatas) { ?> 
                                          <tr>
                                            <td><?php echo $i;?></td>
                                              <td><?php echo $tenderdatas->tender_num; ?></td>
                                              <td class="tbllength" title="<?php echo $tenderdatas->tender_title; ?>"><?php echo $tenderdatas->tender_title; ?></td>
                                              <td class="tbllength" title="<?php echo $tenderdatas->tender_description; ?>" ><?php echo $tenderdatas->tender_description; ?></td>
                                              <td><?php echo $tenderdatas->tender_date; ?></td> 
                                            
                                           
                                            <td>
                                            <?php if(!in_array($tenderdatas->tender_id,$savedformengines)) { ?>
                                              <?php $tender_num = urlencode($tenderdatas->tender_num) ?>
                                            <a href="<?php echo admin_url("procurement/form_engine/".$tenderdatas->tender_id."?tender_num=".$tender_num) ?>">
                                          
                                                <input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square" value="Form Engine" />
                                            </a>
                                          <?php  }else { ?>
                                            <?php $tender_num = urlencode($tenderdatas->tender_num) ?>
                                            <a href="<?php echo admin_url("procurement/form_engine/".$tenderdatas->tender_id."?tender_num=".$tender_num) ?>">
                                            <input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square btnsucessor" value=" Update Form Engine" />
                                            </a>
                                            <?php  } ?>
                                            </td>
                                           
                                          </tr>
                                          <?php $i++; } ?>
<!--                                 
                                          <tr>
 

                                            <td>1</td>
                                            <td>Tender Name 1</td>
                                            <td>20/08/2020</td>
                                            <td>10/02/2021</td>
                                            <td>Publish</td>
                                            <td><a href="<?php echo admin_url("procurement/form_engine/1") ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square" value="Form Engine" /></a></td>
                                           
                                          </tr>
                                        
                                          <tr>
                                            <td>2</td>
                                            <td>Tender Name 2</td>
                                            <td>20/08/2020</td>
                                            <td>10/02/2021</td>
                                            <td>Published</td>
                                           
                                            <td><a href="<?php echo admin_url("procurement/request_clarification") ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-warning btn-square" value="Clarifications" /></a></td>
                                           
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Tender Name 3</td>
                                            <td>01/08/2020</td>
                                            <td>20/02/2021</td>
                                            <td>Closed</td>
                                           
                                           
                                            <td><a href="<?php echo admin_url("procurement/pq_list") ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-danger btn-square" value="PQ-LIST" /></a>
                                            <a href="<?php echo admin_url("procurement/response_consolidate") ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="RESPONSE CONSOLIDATE" /></a></td>
                                            
                                          </tr> -->
                                        </tbody>
                                    
                                    </table>
                                    <!-- <input type="button" class="btn  btn-sm btn-out-dashed btn-primary btn-square" value="CREATE NEW PROCUREMENT" style="width:100%" /> -->
                                </div>
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

    <?php   $this->view('template/admin/dataTable.php');  ?>

<!-- <script>
$( document ).ajaxStart(function() {
	$('#loader').show();
});
$( document ).ajaxStop(function() {
	$('#loader').hide();
});
</script> -->
<script>
table = $('#dt-ajax-object').DataTable({
  });
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>
