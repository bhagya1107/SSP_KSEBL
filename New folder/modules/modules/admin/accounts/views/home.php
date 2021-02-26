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
                  <h4>Accounts</h4>
                  
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">Accounts</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>

  <div class="card borderless-card">

<!-- </div> -->

                        <div class="card">

                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dt-ajax-object" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Invoice No</th>
                                              <th>Supplier Name</th>
											<th>Invoice Date</th>
											 <th>View Receipt</th>
                                              <th>Payment Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>INVOICE6544321</td>
                                            <td>Name1</td>
                                            <td>10/02/2021</td>
						       <td><a data-toggle="modal" data-target="#invoice"><input type="button" class="btn  btn-sm btn-out-dashed btn-warning btn-square" value="View" /></a></td>

                                            <td>Not Paid</td>
                                            
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>INVOICE8701231</td>
                                            <td>Name2</td>
                                            <td>05/10/2020</td>
                                  	       <td><a data-toggle="modal" data-target="#paid"><input type="button" class="btn  btn-sm btn-out-dashed btn-warning btn-square" value="View" /></a></td>
                                            <td>Paid</td>
                                         
										 </tr>
                                         
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th>#</th>
                                             <th>Invoice No</th>
                                              <th>Supplier Name</th>
											<th>Supplier Date</th>
											 <th>View Receipt</th>
                                              <th>Payment Status</th>
                                          </tr>
                                        </tfoot>
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
	
	
	
<!------------------------Documents------------------------------------------------------->

<div class="modal fade" id="invoice" style="padding-left: 0px !important;">

    <div class="modal-dialog">
        <div class="modal-content" style="width:583px;height:304px;">

            <!-- Modal Header -->
            <div class="modal-header">
               
            
<div class="tab-content">
					<form action="showReceipt.php" method="POST">
<table >
<tr><td>Transaction ID:<label>PL-F2567890342</label><br> DATE:<?php echo date("m / d / Y");?></td></tr>
<tr><td><h2>Your Order:</h2></td></tr><img src="<?php echo base_url();?>assets/logo2.png" alt="image description" width="30px"style="margin-top: -108px; margin-left: 385px;margin-bottom: -162px; width: 175px;">
<tr><td>LED</td> <td>Quantity :<label>  1000</label></td></tr>
<tr><td>Bulb</td> <td>Quantity: <label>500</label></td></tr>
<tr><td>Amount Given:10000</td> 


</table>
</form>
	
  <div class="modal-footer" >
  <button type="button" class="btn btn-primary" data-dismiss="modal">Payment</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>
    </div>
</div>
</div>
</div>
               
    

<!---------------------------modal end------------------------------------>
  <div class="modal fade" id="paid" style="padding-left: 0px !important;">

    <div class="modal-dialog">
        <div class="modal-content" style="width:583px;height:304px;">

            <!-- Modal Header -->
            <div class="modal-header">
               
            
<div class="tab-content">
					<form action="showReceipt.php" method="POST">
<table >
<tr><td>Transaction ID:<label>PL-F2567890342</label><br> DATE:<?php echo date("m / d / Y");?></td></tr>
<tr><td><h2>Your Order:</h2></td></tr><img src="<?php echo base_url();?>assets/logo2.png" alt="image description" width="30px"style="margin-top: -108px; margin-left: 385px;margin-bottom: -162px; width: 175px;">
<tr><td>LED</td> <td>Quantity :<label>  1000</label></td></tr>
<tr><td>Bulb</td> <td>Quantity: <label>500</label></td></tr>
<tr><td>Amount Given:10000</td> 


</table>
</form>
	
  <div class="modal-footer" >
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Payment</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>
    </div>
</div>
</div>
</div>
               
    

<!---------------------------modal end------------------------------------>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	   <h4 class="modal-title">Payment Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <p style="color:green">Successfully Paid Your Payment</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    
  

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
<!-------------------------modal------------------------------------------>


