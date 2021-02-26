<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

<main id="tg-main" class="tg-main tg-haslayout">
	<section class="">
        <div class="container">
		    <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
                    
                        <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                            <ul class="nav nav-tabs">
                                <li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">products</a></li>
                                <li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Services</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
                                    <div class="row">
                                    
                                                <div class="card card-small ">
                                                    <div class="card-header border-bottom" style="margin-top:10px;">
                                                        <!-- <h6 class="m-0">Add Products</h6> -->
                                                        <!-- <hr /> -->
                                                    </div>
                                                    <div class="row p-0 px-3 pt-3">

                                                        <div class="form-group col-md-12">
                                                        <label for="">Product category</label>
                                                            <select class="form-control" id="inputCity" placeholder="Company name">
                                                                <option value="0">
                                                                Select category
                                                                </option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                        <label for="">Select Product</label>
                                                            <select class="form-control" id="inputCity" placeholder="Year of  registration">
                                                                <option value="0">
                                                                Product
                                                                </option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <button class="mb-2 btn btn-primary mr-2">Add To My Products</button>
                                                        <hr />
                                                            <h6>Added Products</h6>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <table class="table  table-responsive" style="width: 100%">
                                                                <thead>
                                                                <tr style="background-color:#26265f ;color:#FFF ">
                                                                    <th>Sl No	</th>
                                                                    <th>category	</th>
                                                                    <th>Product Name</th>
																	<th>On-Time Performance</th>
																	<th>Consigned Inventory</th>
                                                                    <th>Remove</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Street Lights</td>
                                                                    <td>Led </td>
																	<td><span class="score">
    <div class="score-wrap">
        <span class="stars-active" style="width:88%">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </span></td>
																	<td></td>
                                                                    <td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
                                                                    <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Actions
                                                                        </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

	<a href="javascript:void(0);" class="dropdown-item btn-outline-primary  mt-1" data-toggle="modal" data-target="#orders" id="edit-user"><i class="zmdi zmdi-edit zmdi-hc-lg"></i> Orders</a>
	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn-outline-danger  mt-1" data-toggle="modal" data-target="#overdue" id="delete-user" ><i class="zmdi zmdi-delete zmdi-hc-lg"></i> Overdue </a>

	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn-outline-info  mt-1 activate" data-toggle="modal" data-target="#pay" role="button" id="activate-floor">Receipt History</a>

	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" data-toggle="modal" data-target="#defects" role="button" id="activate-user">Defects</a>

<!--	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user">On-Time Performance</a>-->

    <div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user" data-toggle="modal" data-target="#myModal_vmi1">Vendor Managed Inventory</a>

   <!-- <div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user" data-toggle="modal" data-target="#myModal_ci">Consigned Inventory</a>-->


    <div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user" data-toggle="modal" data-target="#myModal_capacity">Capacity Info</a>

   
  </div>
</div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                </div>

                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade <?php echo $tab ==2 ? "in active" : "" ?>">
                                    <div class="row">
                                    
                                                <div class="card card-small ">
                                                    <div class="card-header border-bottom" style="margin-top:10px;">
                                                    <!-- <h6 class="m-0">Add Services</h6>
                                                    <hr /> -->
                                                    </div>
                                                    <div class="row p-0 px-3 pt-3">

                                                        <div class="form-group col-md-12">
                                                        <label for="">Services category</label>
                                                            <select class="form-control" id="inputCity" placeholder="Company name">
                                                                <option value="0">
                                                                Select category
                                                                </option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                        <label for="">Select Services</label>
                                                            <select class="form-control" id="inputCity" placeholder="Year of  registration">
                                                                <option value="0">
                                                                Services
                                                                </option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <button class="mb-2 btn btn-primary mr-2">Add To My Services</button>
                                                            <hr />
                                                            <h6>Added Services</h6>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <table class="table  table-responsive" style="width: 100%">
                                                                <thead>
                                                                <tr style="background-color:#26265f ;color:#FFF ">
                                                                    <th>Sl No	</th>
                                                                    <th>Services	</th>
                                                                    <th>Services Name</th>
                                                                    <th>Remove</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Man Power</td>
                                                                    <td>Labour </td>
                                                                    <td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                </div>

                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                    

                        
                        </div>
                    

                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <?php $this->view('profile_sidebar',$page); ?>

                    </div>
                </div>
            </div>
        </div>
	</section>
</main>
<style>


</style>

<!-- myModal_capacity -->


<!--  -->


<div id="myModal_capacity" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Capacity Info</h4>
      </div>
      <div class="modal-body">
	   <div class="modal-body mx-3">
       <div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr>
									<td style="text-align:right">Processing Lead Time	</td>
									<td><input type="text"  class="form-control"  value="20"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Order Modifiers	</td>
									<td><input type="text" class="form-control"  value="20"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Capacity/Day</td>
									<td><input type="text"  class="form-control"  value="100 units /100 days"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Tolerance	</td>
									<td><input type="text"  class="form-control"  value="20%"/>	</td>
								</tr>
								
								
							</table>
						</div>

       
      </div>
      <div class="modal-footer">
	   <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

<!-- myModal_capacity -->

<div id="myModal_vmi1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Vendor managed Inventory</h4>
      </div>
      <div class="modal-body">
        <table class="table">
			<thead>
				<tr>
					<th>Order No</th>
					<th>Max Capacity</th>
                    <th>Min Capacity</th>
                    <th>On Hand</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>PCO88944556</td>
					<td>3000</td>
                    <td>200</td>
                    <td>400</td>
				
				</tr>
				<tr>
					<td>PCO8895544</td>
					<td>100</td>
                    <td>200</td>
                    <td>400</td>
				
				</tr>
				
			
			</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="orders" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Purchase order details</h4>
      </div>
      <div class="modal-body" style="height: 300px;">
	  <div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO88944556</span>
										<h4>Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div>
		<a href="<?php echo site_url('supplier/purchase_order');?>" >More Details</a>
			
	  	</div>
</div>
								</div>
								
								  <div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">20<span>JAN</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO8895544</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div>
			<a href="<?php echo site_url('supplier/purchase_order');?>" >More Details</a>
			
	  	</div>
</div>
								</div>
		
      </div>
     
    </div>

  </div>
</div>
<style>
.score {
  display: block;
  font-size: 16px;
  position: relative;
  overflow: hidden;
}
.score-wrap {
  display: inline-block;
  position: relative;
  overflow: hidden;
  height: 19px;
}

.score .stars-active {
  color: #EEBD01;
  position: relative;
  z-index: 10;
  display: inline-block;
}

.score .stars-inactive {
  color: grey;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-text-stroke: initial;
  overflow: hidden;
}
</style>


<!------------------------overdue------------------------------------------------------->

<div class="modal fade" id="overdue" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">OverDue</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
				 SL No: 1 <br>
               Order No: #24324 <br>
			   Description:Estimated delivery on 2020-11-09
			   <br><br>
			SL No: 2 <br>
               Order No: #123567FE654 <br>
			   Description:Estimated delivery on 2020-11-13
			   <br>


                 </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('supplier/delivery');?>';"data-dismiss="modal">More Details</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------overdue End---------------------------------------------------->


<!------------------------defects------------------------------------------------------->

<div class="modal fade" id="defects" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Defects</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
				 SL No: 1 <br>
               Order No: #24324 <br>
			   Product:LED<br>
			   Description:Small Size Quantity Defects
			   <br><br>
			SL No: 2 <br>
               Order No: #123567FE654 <br>
			  Product:Bulb<br>
			   Description: Broken Defects
			   <br>

                 </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------defects End---------------------------------------------------->




<!------------------------payment------------------------------------------------------->

<div class="modal fade" id="pay" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Payment Receipt</h4>
               
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="questions"></span></h4>
                <div class="table-responsive">

                    <table id="questions" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Pay Amount</th>
								 <th scope="col">Order No</th>
                                <th scope="col">Quantity</th>
								<th scope="col">Date of Transactions</th>
								 <th scope="col">Gst</th>
                                <th scope="col">Total Amount</th>
								
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>PCO889444556</td>
                                    <td>500</td>
									 <td>05-11-2020</td>
                                    <td>50.00</td>
                                    <td>550.00</td>

                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
			 <button type="button" class="btn btn-primary" data-dismiss="modal">Print</button>
			 <button type="button" class="btn btn-warning" data-dismiss="modal">Download</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
               

<!-------------------------payment End---------------------------------------------------->
