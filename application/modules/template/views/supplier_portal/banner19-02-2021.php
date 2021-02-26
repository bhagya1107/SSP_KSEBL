<!--************************************
		Banner Start
*************************************-->
<style>
#tg-banner{
     width: 100%;
     position:fixed;
     top: 0px;
}
</style>
<div id="tg-banner" class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<!-- <div class="tg-pagetitle">
					<h3><?php echo $title; ?></h3>
				</div> -->
				<ol class="tg-breadcrumb">
					<?php

					$url= '#';
					if(isset($indexurl)){
						$url=$indexurl;
					}
					?>
					<li><a href="<?= $url ?>">Home</a></li>
					<li class="active"><?php echo $title; ?></li>

                </ol>
    
			</div>
            
		</div>
	</div>
</div>


  <style>
  
  .p-10{
	  padding-top:10px;
  }
  </style>
             

  <?php if($this->uri->segment(2) == 'tenders')  { ?>
 <div class="">

 				<div class="col-sm-12 col-xs-10 p-10" style="margin-left: 193px">

 					<div class="form-group row form_filter">

 						<div class="col-sm-2 col-xs-12" >
						<!--<label>Tender ID:</label>-->
 							<select class="select2 form-control" id="tenderid" name="group_flat__id" data-placeholder="Select a TenderId" >
												 <option>Select Tender ID</option>
 								<option value="0">TDR001860</option> 
								<option value="0">TDR001862</option> 
							   	<option value="0">TDR001889</option>
							</select>
 									

 						</div>

						 <div class="col-sm-2 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Location</option>
                            	<option value="0">TVM TEST</option> 
								<option value="0">KTM 11</option> 
							   	<option value="0">EKM 89</option>
							</select>	

 								
 						</div>
 						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="text" class=" form-control"  id="keyword" name="keyword" placeholder="Key Word" >
							
 								
 						</div>

						<div class="col-sm-2 col-xs-12 " style="margin-top:10px;">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
				
  <?php } ?>
  
  <?php if($this->uri->segment(2) == 'purchase_order')  { ?>

			<div class="">

 				<div class="col-sm-12 col-xs-10 p-10" style="margin-left: 193px;">

 					<div class="form-group row form_filter">

 						<div class="col-sm-3 col-xs-12" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select purchase Order</option>
 								<option value="0">PCO6555590</option> 
								<option value="0">PCO1223590</option> 
							   	<option value="0">PCO68855590</option>
							</select>
 									

 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Tender</option>
                            	<option value="0">Name1</option> 
								<option value="0">Name2</option> 
							   	<option value="0">Name3</option>
							</select>	

 								
 						</div>
 						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="text" class=" form-control"  id="keyword" name="keyword" placeholder="Key Word" >
							
 								
 						</div>

						<div class="col-sm-3 col-xs-12 " style="margin-top:10px;">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
  <?php } ?>
  
  
  <?php if($this->uri->segment(2) == 'procurement')  { ?>

	<div class="">

 				<div class="col-sm-12 col-xs-10 p-10" style="margin-left: 193px;">

 					<div class="form-group row form_filter">

 						<div class="col-sm-2 col-xs-12" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select Product</option>
 								<option value="0">LED</option> 
								<option value="0">BULB</option> 
							   
							</select>
 									

 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Scheme</option>
                            	<option value="0">KSEB 19-20</option> 
								<option value="0">KSEB 20-21</option> 
							   	
							</select>	

 								
 						</div>
 						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="text" class=" form-control"  id="keyword" name="keyword" placeholder="Key Word" >
							
 								
 						</div>

						<div class="col-sm-3 col-xs-12 " style="margin-top:10px;">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
	  
	  
<?php	 
  }?>
  
  <?php if($this->uri->segment(2) == 'delivery')  { ?>

	<div class="">

 				<div class="col-sm-12 col-xs-10 p-10" style="margin-left: 193px;">

 					<div class="form-group row form_filter">

 						<div class="col-sm-2 col-xs-12" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select Orders</option>
 								<option value="0">PCO9876540</option> 
								<option value="0">PCO2344200</option> 
							   	<option value="0">PCO1294200</option>
							</select>
 									

 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Name</option>
                            	<option value="0">Name1</option> 
								<option value="0">Name2</option> 
							   	<option value="0">Name3</option>
							</select>	

 								
 						</div>
 						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="text" class=" form-control"  id="keyword" name="keyword" placeholder="Key Word" >
							
 								
 						</div>

						<div class="col-sm-3 col-xs-12 " style="margin-top:10px;">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			<div>
	  
	  
<?php	 
  }?>
  
   <?php if($this->uri->segment(2) == 'accounts')  { ?>

			<div class="">

 				<div class="col-sm-12 col-xs-10 p-10" style="margin-left: 193px;">

 					<div class="form-group row form_filter">

 						<div class="col-sm-2 col-xs-12" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select Invoice No</option>
 								<option value="0">INVOICE654432</option> 
								<option value="0">INVOICE24662</option> 
							   	<option value="0">INVOICE78952</option>
							</select>
 									

 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-2 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Name</option>
                            	<option value="0">Name1</option> 
								<option value="0">Name2</option> 
							   	<option value="0">Name3</option>
							</select>	

 								
 						</div>
 						<div class="col-sm-2 col-xs-12 ">
 							
 							<input type="text" class=" form-control"  id="keyword" name="keyword" placeholder="Key Word" >
							
 								
 						</div>

						<div class="col-sm-2 col-xs-12 " style="margin-top:10px;">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
  <?php } ?>
  
	  

  <?php if($this->uri->segment(2) == 'dashboard')  { ?>

	<div id="main" style="opacity:0">
  <button class="openbtn"  data-toggle="tooltip" title="Quick Links!">☰ </button>
  </div>
	  
	  
<?php	 
  }?>
  <?php if($this->uri->segment(2) == 'workmeasurement')  { ?>

	<div class="">

 				<div class="col-sm-12 col-xs-12 p-10">

 					<div class="form-group row form_filter">

 						<div class="col-sm-12 col-lg-3" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select Work Code</option>
 								<option value="0">CWGG2020567</option> 
								<option value="0">CWGL8900567</option> 
							   	<option value="0">CWGL5780567</option>
							</select>
 									

 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Measurement No</option>
                            	<option value="0">MSR203/09</option> 
								<option value="0">MSR113/05</option> 
							   	<option value="0">MSR783/09</option>
							</select>	

 								
 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
  
  
	  
	  
<?php	 
  }?>
  
<div class="col-md-12 row all-slides">
<div class="col-md-2">
