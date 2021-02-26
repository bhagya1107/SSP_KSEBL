<!--************************************
		Banner Start
*************************************-->
<style>

</style>
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Products</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Profile</li>
          <li class="active">Products</li>
				</ol>
				<br />
			</div>
		</div>
	</div>
</div> -->
<!--************************************
		Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

          <div class="card card-small ">
            <div class="card-header border-bottom">
             <h6 class="m-0">Add Products</h6>
             <hr />
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
		<div style="margin-left: 326px;">
		 <label style="margin-bottom:-20px;margin-left:131px;">Search:</label>
						<input type="text" class="searchBox" id="searchBox"style="margin-left:205px;width: 203px;height: 25px;"> </input><br><br>
						</div>
          <div class="col-md-12">
              <table class="table  table-responsive" style="width: 100%">
                <thead>
                   <tr style="background-color:#26265f ;color:#FFF ">
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


          </div>
        </div>

				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<?php $this->view('profile_sidebar',$page); ?>

				</div>
			</div>
		</div>
	</div>
</main>
