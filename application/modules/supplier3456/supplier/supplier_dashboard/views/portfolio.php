
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
                                                        <label for="">Product Catagory</label>
                                                            <select class="form-control" id="inputCity" placeholder="Company name">
                                                                <option value="0">
                                                                Select Catagory
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
                                                                    <th>Catagory	</th>
                                                                    <th>Product Name</th>
                                                                    <th>Remove</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Street Lights</td>
                                                                    <td>Led </td>
                                                                    <td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
                                                                    <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Actions
                                                                        </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

	<a href="javascript:void(0);" class="dropdown-item btn-outline-primary  mt-1" id="edit-user"><i class="zmdi zmdi-edit zmdi-hc-lg"></i> Orders</a>
	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn-outline-danger  mt-1" id="delete-user" ><i class="zmdi zmdi-delete zmdi-hc-lg"></i> Overdue </a>

	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn-outline-info  mt-1 activate" role="button" id="activate-floor">Receipt History</a>

	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user">Defects</a>

	<div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user">On-Time Performance</a>

    <div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user" data-toggle="modal" data-target="#myModal_vmi">Vendor Managed Inventory</a>

    <div class="dropdown-divider"></div>
	<a href="javascript:void(0);" class="dropdown-item btn btn-outline-danger mt-1 activate" role="button" id="activate-user" data-toggle="modal" data-target="#myModal_ci">Consigned Inventory</a>


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
                                                        <label for="">Services Catagory</label>
                                                            <select class="form-control" id="inputCity" placeholder="Company name">
                                                                <option value="0">
                                                                Select Catagory
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
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <table class="table">
			<thead>
				<tr>
					<th>Processing lead time</th>
					<th>Order modifiers</th>
                    <th>Capacity/day</th>
                    <th>Tolerance</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>20</td>
					<td>20</td>
                    <td>100 units/100 days</td>
                    <td>20%</td>
				
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

<!-- myModal_capacity -->

<div id="myModal_vmi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <table class="table">
			<thead>
				<tr>
					<th>Place</th>
					<th>Max Capacity</th>
                    <th>Min Capacity</th>
                    <th>On Hand</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Thiruvananthapuram</td>
					<td>3000</td>
                    <td>200</td>
                    <td>400</td>
				
				</tr>
				<tr>
					<td>Palakkad</td>
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