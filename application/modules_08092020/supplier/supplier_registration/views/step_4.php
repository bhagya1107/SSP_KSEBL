

<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<h3 class="page-title">Company profile</h3>
	</div>
</div>


<div class="row">
	<div class="col-lg-8">
		<div class="card card-small ">
			<div class="card-header border-bottom">
				<!-- <h6 class="m-0">Form Inputs</h6> -->
			</div>
			<div class="row p-0 px-3 pt-3">

			<div class="form-group col-md-12">
				<label for="">Company name</label>
						<input type="text" class="form-control" id="inputCity" placeholder="Company name">
			</div>
			<div class="form-group col-md-6">
				<label for="">Year of registration</label>
						<input type="text" class="form-control" id="inputCity" placeholder="Year of  registration">
			</div>
			<div class="form-group col-md-6">
				<label for="">Email</label>
						<input type="text" class="form-control" id="inputCity" placeholder="Company email">
			</div>
			<div class="form-group col-md-6">
				<label for="">Website</label>
						<input type="text" class="form-control" id="inputCity" placeholder="Company Website">
			</div>
			<div class="form-group col-md-6">
				<label for="">LinkedIN</label>
						<input type="text" class="form-control" id="inputCity" placeholder="Company LinkedIN">
			</div>
			<div class="form-group col-md-12">
				<label for="">About Company</label>
						<textarea type="text" class="form-control" id="inputCity" placeholder="Company detail"> </textarea>
			</div>
			<!-- <div class=" col-md-6"></div> -->
			<div class="form-group align-items-end col-md-6">
				<a href="<?=supplier_url('registration/step_5')?>" class="mb-2 btn btn-outline-primary mr-2">Next</a>
				<!-- <button type="button" class="mb-2 btn btn-outline-primary mr-2">Previous</button>	 -->
			</div>

		</div>
	</div>
</div>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
$(".select2").select2();
$("#cat").select2();
$("#subcat").select2();
</script>
