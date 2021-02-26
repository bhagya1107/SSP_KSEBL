<!-- <div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">

					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<h3 class="page-title">Company Portfolio</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<div class="card card-small ">
			<div class="card-header border-bottom">
			 <h6 class="m-0">Add Products</h6>
			</div>
			<div class="row p-0 px-3 pt-3">

			<div class="form-group col-md-12">
				<label for="">Product Catagory</label>
						<select class="form-control " id="cat" placeholder="Company name" multiple>
							<option value="0">	Select Catagory</option>
							<option value="1" selected>	 Catagory 1</option>
							<option value="2" selected>	 Catagory 2</option>
							</select>
			</div>
			<div class="form-group col-md-12">
				<label for="">Sub Catagory</label>
						<select class="form-control " id="subcat" placeholder="Company name" multiple>
							<option value="0">Select Catagory	</option>
							<option value="1" selected>Sub Catagory 1</option>
							<option value="2" selected>Sub	 Catagory 2</option>
							</select>
			</div>
			<div class="form-group col-md-12">
				<label for="">Select Product</label>
						<select class="form-control select2" id="inputCity" placeholder="Year of  registration" multiple>
							<option value="0">	Product</option>
							<option value="2" selected>Product 1</option>
							</select>
			</div>



		


		</div>
	</div>
	</div>
	<div class="col-lg-6">
		<div class="card card-small ">
			<div class="card-header border-bottom">
			 <h6 class="m-0">Add Services</h6>
			</div>
			<div class="row p-0 px-3 pt-3">

			<div class="form-group col-md-12">
				<label for="">Service Catagory</label>
						<select class="form-control " id="cat" placeholder="Company name" multiple>
							<option value="0">	Select Catagory</option>
							<option value="1" selected>	 Catagory 1</option>
							<option value="2" selected>	 Catagory 2</option>
							</select>
			</div>
			<div class="form-group col-md-12">
				<label for="">Sub Catagory</label>
						<select class="form-control " id="subcat" placeholder="Company name" multiple>
							<option value="0">Select Catagory	</option>
							<option value="1" selected>Sub Catagory 1</option>
							<option value="2" selected>Sub	 Catagory 2</option>
							</select>
			</div>
			<div class="form-group col-md-12">
				<label for="">Select Service</label>
						<select class="form-control select2" id="itCity" placeholder="Year of  registration" multiple>
							<option value="0">	Service</option>
							<option value="2" selected>Service 1</option>
							</select>
			</div>



			<div class="form-group align-items-end col-md-6">

				<button type="button" class="mb-2 btn btn-outline-primary mr-2">Previous</button>
					<a href="<?=supplier_url('registration/step_6')?>" class="mb-2 btn btn-outline-primary mr-2">Next</a>
			</div>


		</div>
	</div>
	</div>
</div>
<div class="row" style="display: none">
	<div class="col-lg-5 ">
		<div class="card card-small ">
			<div class="card-header border-bottom">
			 <h6 class="m-0">Add Products</h6>
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
						 <tr>
							<th>Sl No	</th>
							<th>Catagory	</th>
							<th>Product Name</th>
							<th>Remove</th>
						 </tr>
					</thead>
					<tbody>
						 <tr>
							<td>1</td>
							<td>Street Lights</td>
							<td>Led </td>
							<td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						 </tr>
					</tbody>
				</table>

			</div>

			<div class="form-group align-items-end col-md-6">
				<a href="<?=supplier_url('registration/step_6')?>" class="mb-2 btn btn-outline-primary mr-2">Next</a>
		<button type="button" class="mb-2 btn btn-outline-primary mr-2">Previous</button>
			</div>
		</div>
	</div>
</div>



<div class="col-lg-5 ">
	<div class="card card-small ">
		<div class="card-header border-bottom">
		 <h6 class="m-0">Add Services</h6>
		</div>
		<div class="row p-0 px-3 pt-3">

		<div class="form-group col-md-12">
			<label for="">Service Catagory</label>
					<select class="form-control" id="inputCity" placeholder="Company name">
						<option value="0">
							Select Catagory
						</option>
						</select>
		</div>
		<div class="form-group col-md-12">
			<label for="">Select Service</label>
					<select class="form-control" id="inputCity" placeholder="Year of  registration">
						<option value="0">
							Select Service
						</option>
						</select>
		</div>
<div class="form-group col-md-12">
	<button class="mb-2 btn btn-primary mr-2">Add To My Products</button>
	<hr />
	<h6>Added Services</h6>
</div>
	<div class="col-md-12">
			<table class="table  table-responsive" style="width: 100%">
				<thead>
					 <tr>
						<th>Sl No	</th>
						<th>Catagory	</th>
						<th>Service</th>
						<th>Remove</th>
					 </tr>
				</thead>
				<tbody>
					 <tr>
						<td>1</td>
						<td>Resource</td>
						<td>Labour </td>
						<td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
					 </tr>
				</tbody>
			</table>

		</div>

		<!-- <div class=" col-md-6"></div> -->


	</div>
</div>
</div>
<div class="col-md-2">
	<div class="form-group align-items-end col-md-6">
		<a href="<?=supplier_url('registration/step_6')?>" class="mb-2 btn btn-outline-primary mr-2">Next</a>
		<a href="<?=supplier_url('registration/step_4')?>" class="mb-2 btn btn-outline-primary mr-2">Previous</a>
		<!-- <button type="button" class="mb-2 btn btn-outline-primary mr-2">Previous</button>	 -->
	</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
$(".select2").select2();
$("#cat").select2();
$("#subcat").select2();
</script>
