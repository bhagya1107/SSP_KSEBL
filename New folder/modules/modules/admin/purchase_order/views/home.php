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
                  <h4>Purchase Order</h4>
                  
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">Purchase Order</a>
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
                                              <th>Purchase Order</th>
                                              <th>Supplier Name</th>
											<th>Purchase Date</th>
											 <th>View </th>
                                               <th>Status </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>PCO8888752</td>
                                            <td>Name1</td>
                                            <td>10/02/2021</td>
						       <td><a data-toggle="modal" data-target="#view"><input type="button" class="btn  btn-sm btn-out-dashed btn-warning btn-square" value="View" /></a></td>

                    	       <td><a data-toggle="modal" data-target="#"><input type="button" class="btn  btn-sm btn-out-dashed btn-danger btn-square" value="Not Approved" /></a></td>

                                            
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>PCO3448752</td>
                                            <td>Name2</td>
                                            <td>05/10/2020</td>
                                  	       <td><a data-toggle="modal" data-target="#view2"><input type="button" class="btn  btn-sm btn-out-dashed btn-warning btn-square" value="View" /></a></td>
                         	       <td><a data-toggle="modal" data-target="#myModal"><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="Approved" /></a></td>

                                         
										 </tr>
                                         
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                           <th>#</th>
                                              <th>Purchase Order</th>
                                              <th>Supplier Name</th>
											<th>Purchase Date</th>
											 <th>View </th>
                                               <th>Status </th>
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
	   <h4 class="modal-title">Approved Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <p style="color:green">Successfully Approved Your Order Request</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    
  
  
  <div id="view" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content" style="width:632px;">
      <div class="modal-header">
	  <h4 class="modal-title">Purchase order details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
	  <table style="width:100%" class="maintable">
	  	<tr>
			<td>Vendor:</td>  
			<td>Name1</td>
		</tr>
	  	<tr>
			<td>Tender Name:</td>  
			<td>TNDR#0001</td>
		</tr>
		<tr>
			<td>Date:</td>  
			<td>10-02-2021</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Security Deposit:</td>  
			<td>2000</td>
		</tr>
			<table class="table">
				<tr>
					<th>Material</th>
					<th>Basic Price</th>
					<th>Freight Charges</th>
					<th>Quantity</th>
					<th>Unit price</th>
					<th>Total</th>
				
				</tr>
				<tr>
					<td>LED</td>
					<td>1001</td>
					<td>0.00</td>
					<td>2</td>
					<td>100</td>
					<td>200</td>
				</tr>
			
			</table>
	  </table>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



 <div id="view2" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content" style="width:632px;">
      <div class="modal-header">
	  <h4 class="modal-title">Purchase order details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
	  <table style="width:100%" class="maintable">
	  	<tr>
			<td>Vendor:</td>  
			<td>Name2</td>
		</tr>
	  	<tr>
			<td>Tender Name:</td>  
			<td>TNDR#0001</td>
		</tr>
		<tr>
			<td>Date:</td>  
			<td>05-10-2020</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Security Deposit:</td>  
			<td>2000</td>
		</tr>
			<table class="table">
				<tr>
					<th>Material</th>
					<th>Basic Price</th>
					<th>Freight Charges</th>
					<th>Quantity</th>
					<th>Unit price</th>
					<th>Total</th>
				
				</tr>
				<tr>
					<td>LED</td>
					<td>1001</td>
					<td>0.00</td>
					<td>2</td>
					<td>100</td>
					<td>200</td>
				</tr>
			
			</table>
	  </table>
		
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


