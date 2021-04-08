<!--************************************
		Banner Start
*************************************-->
<style>

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

</style>
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Delivery</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Delivery</li>
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
<div style="margin-left: 326px;">
		 <label style="margin-bottom:-20px;margin-left:131px;">Search:</label>
						<input type="text" class="searchBox" id="searchBox"style="margin-left:205px;width: 203px;height: 25px;"> </input><br><br>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr style="background-color:#26265f ;color:#FFF ">
										<th>Sl No</th>
										<th>Tender No</th>
										<th>Product Name</th>
										<th>Qty</th>
										<th>Delivery Date</th>
										<th>Status	</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>TDR8944566</td>
										<td>Led Lights</td>
										<td>1200</td>
										<td><?php echo  $dates=date_formate('27-05-2020');?></td>
										<td>Waiting for dispatch</td>
									</tr>
								</tbody>
							</table>
						</div>

				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<aside id="tg-sidebar" class="tg-sidebar">

						<div class="tg-widget tg-catagories-widget">
							<h3>Manage Delivery</h3>
							<ul>
								<li><a href="#"><em>Dispatch</em></a></li>
								<li><a href="#"><em>Check Points</em><i></i></a></li>
								<li><a href="#"><em>Shipment</em><i></i></a></li>
								<li><a href="#"><em>Order Tracking</em><i></i></a></li>
								<li><a href="#"><em>Delivery Confirmation</em><i></i></a></li>
							</ul>
						</div>


					</aside>
				</div>
			</div>
		</div>
	</div>
</main>
