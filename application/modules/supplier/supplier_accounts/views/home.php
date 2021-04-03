<!--************************************
		Banner Start
*************************************-->
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Tenders</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="<?= $indexurl ?>">Home</a></li>
					<li class="active">Tenders</li>
				</ol>
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
<style>
	.btn-primary {
		color: #fff;
		background-color: #1e315d;
		border-color: #ffcc33;
	}
	#invoice{
		overflow:auto;
		height:80eh;
	}
	/* #fixedaccounts{
		margin-top:12%;
	} */
</style>

<head>
	<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>
<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout" id="fixedaccounts">
		<div id="acceptedpurchasecount" class ="" style="text-align:center;"><span><b>Total Acounts:2</b></span>
        </div>
		<div class="container">
			<div class="tg-section-name">
				<h2>ACCOUNTS</h2>
			</div>

			<div class="col-sm-11 col-xs-11 pull-right" style="overflow-y:scroll; height:400px;">
				<ul class="nav nav-tabs" id="accountstab">
					<li class="<?php echo $tab == 1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Invoices</a></li>
					<li class="<?php echo $tab == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Payments</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets commonfilter">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Invoice No : INVOICE6554445</span>
										<h4> Name 1</h4>
										</h4>
										<ul class="tg-matchmetadata">
											<li>
												<address>Invoice Short Discription</address>
											</li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm" style="#1e315d" data-toggle="modal" data-target="#invoice">Submit Invoice</a>

										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Invoice No :INVOICE234445</span>
										<h4> Name 2</h4>
										</h4>
										<ul class="tg-matchmetadata">
											<li>
												<address>Invoice Short Discription</address>
											</li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm" href="#">Submit Invoice</a>

									</div>
								</div>

							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade <?php echo $tab == 2 ? "in active" : "" ?>">

						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets commonfilter">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Payment No : PAY6554445</span>
										<h4> Name 1</h4>
										</h4>
										<ul class="tg-matchmetadata">
											<!--<li><address>Invoice Short Discription</address></li>-->
										</ul>
									</div>

									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm" style="#1e315d" data-toggle="modal" data-target="#pay">Payment Receipt</a>

										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Payment No :PAY234445</span>
										<h4> Name 2</h4>
										</h4>
										<ul class="tg-matchmetadata">
											<!--<li><address>Invoice Short Discription</address></li>-->
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm" href="#">Payment Receipt</a>

									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>



		</div>
		</div>
		
	</section>
</main>



<!------------------------Documents------------------------------------------------------->



<div class="modal fade" id="invoice" style="padding-left: 0px !important;">

	<div class="modal-dialog">
		<div class="modal-content" style="width:775px;">

			<!-- Modal Header -->

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Invoices</h4>
			</div>
			<div class="modal-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Consignee</th>

							<th>Quantity(Nos)</th>
							<th>Serial Number of Units</th>

							<!--<th>Scheduled date of delivery</th>-->
							<th>penality</th>
							<th>TDS</th>
							<th>Deductions</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox" name="product" value="25160" data-penality="100" data-tds="100" data-deductions="10" onclick="totalIt()"> </td>
							<td>Executive Engineer Thirumala,TMR Divison,Thirumala</td>
							<td>1000</td>
							<td>4456788-4588880</td>
							<!--<td>20-01-2021</td>-->
							<!--<td><input type="button" value="Submit Invoice"></td>-->
							<td>100.00</td>
							<td>50.00</td>
							<td>10.00</td>
							<td>25000</td>
						</tr>

						<tr>
							<td><input type="checkbox" name="product" value="5110" data-penality="0.00" data-tds="50" data-deductions="10" onclick="totalIt()"></td>
							<td>Executive Engineer Kovalam,TMR Divison,Kovalam</td>
							<td>500</td>
							<td>4588880-46789090</td>
							<!--<td>27-01-2021</td>-->
							<!--<td><input type="button" value="Submit Invoice"></td>-->
							<td>0.00</td>
							<td>50.00</td>
							<td>10.00</td>
							<td>5000</td>
						</tr>

					</tbody>
				</table>
				<div class="modal-body">
					<label>
						Invoice File Upload: <input value="" type="file" id="invoicefile" />

					</label>
				</div>
				<div class="modal-body">
					<label>
						PenalityAmount :
						<input value="0.00" readonly="readonly" type="text" id="penality" />
					</label>
					<label>
						DeductsAmount:
						<input value="0.00" readonly="readonly" type="text" id="deductions" />
					</label>
					<label style="margin-left:22px;">
						TDS Amount:
						<input value="0.00" readonly="readonly" type="text" id="tds" />
					</label>
				</div>

				<label style="margin-left:20px;">
					<b>Total Amount:</b>
					<input value="0.00" readonly="readonly" type="text" id="total" />
				</label>

				<div class="modal-body">
					<td><input type="button" value="Submit Invoice"></td>
				</div>
			</div>
			<!--<div class="tab-content">
					<form action="showReceipt.php" method="POST">
<table >
<tr><td>Transaction ID <input type="text" name="txtID" value="PL-F2567890342"> <?php echo date("m / d / Y"); ?></td></tr>
<tr><td><h2>Your Order:</h2></td></tr><img src="<?php echo base_url(); ?>assets/logo2.png" alt="image description" width="30px"style="margin-top: -25px; margin-left: 385px;margin-bottom: -162px; width: 175px;">
<tr><td><input  type="checkbox"  name="cbItem[]" value=" LED"> LED</td> <td>Quantity <input type="text" value="1000" name="txtQty[]"></td></tr>
<tr><td><input  type="checkbox" name="cbItem[]" value="Bulb">Bulb</td> <td>Quantity <input type="text" value="500" name="txtQty[]"></td></tr>
<tr><td>Amount Given:<input type="text" name="txtAmount" value=" 10000"></td><td>
 <input type="file" style="width:47px;height:47px;margin-left:-1px;"name="fileToUpload" id="fileToUpload"><input style="margin-right:97px;" type="submit" name="btnGen" value="Generate Receipt">

</table>
</form>
	
  <div class="modal-footer" >

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>-->
		</div>
	</div>
</div>
</div>
<!-------------------------DocumentsEnd---------------------------------------------------->
<!-- Modal -->
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

					<table id="questions" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
						<thead>
							<tr>
								<th scope="col">sl no</th>
								<th scope="col">Pay Amount</th>
								<th scope="col">Order No</th>
								<th scope="col">Orders</th>
								<th scope="col">Date</th>
								<th scope="col">TransactionNo/Cheque No</th>
								<th scope="col">Deductions</th>
								<th scope="col">TDS</th>
								<th scope="col">Penality</th>
								<th scope="col">Quantity</th>

								<th scope="col">Total Amount</th>

							</tr>
						</thead>
						<tr>
							<td>1</td>
							<td>10000</td>
							<td>XX45677</td>
							<td>LED</td>
							<td>20/12/2020</td>
							<td>TXXX789900222</td>
							<td>100</td>
							<td>50</td>
							<td>10</td>
							<td>500</td>
							<td>23550.00</td>

						</tr>

						<tr>
							<td>2</td>
							<td>20000</td>
							<td>XX45653</td>
							<td>BULB</td>
							<td>30/12/2021</td>
							<td>TXXX789900222</td>
							<td>50</td>
							<td>50</td>
							<td>10</td>
							<td>800</td>
							<td>15550.00</td>

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




<script>
	$(document).ready(function() {


		universalaccountsearch();
		$('#datepicker').datepicker({
			dateFormat: 'yy-mm-dd'
		});
	});

	function universalaccountsearch() {

		$("#keywordaccounts").on("keyup", function() {
			var activetab = $("#accountstab li.active").attr('id');
			// var tabcontentid = (activetab == 'favtender') ? 'deliveryorder' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
			var value = $(this).val().toLowerCase();
			filteraccountdata(value);

		});

	}

	function filteraccountdata(value) {

		$(".commonfilter div[class!=tg-btnsbox]").filter(function() {
			var datetime1 = $(this).attr('datetime');
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});

		$('.hiddendate').addClass('hide');
		var tenderlength = $(".commonfilter .tg-ticket [style='display: block;']").length;
		console.log(tenderlength);

	}

	$("#accountdate").on("change", function() {
		var activetab = $("#accountstab li.active").attr('id');
		var value = $(this).val();
		filteraccountdata(value);
	});


	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}

	function totalIt() {

		var input = document.getElementsByName("product");
		var total = 0;
		var penality = 0;
		var tds = 0;
		var deductions = 0;
		//var sum=penality+ total
		for (var i = 0; i < input.length; i++) {
			if (input[i].checked) {
				total += parseFloat(input[i].value);
				penality += parseFloat(input[i].getAttribute('data-penality'));
				tds += parseFloat(input[i].getAttribute("data-tds"));
				deductions += parseFloat(input[i].getAttribute("data-deductions"));

			}
		}
		document.getElementById("penality").value = "" + penality.toFixed(2);
		document.getElementById("tds").value = "" + tds.toFixed(2);
		document.getElementById("deductions").value = "" + deductions.toFixed(2);
		document.getElementById("total").value = "" + total.toFixed(2);
	}
</script>