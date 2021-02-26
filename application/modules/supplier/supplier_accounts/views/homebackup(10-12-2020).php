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
    border-color: #ffcc33;;
}
</style>
<head>
<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>
<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>ACCOUNTS</h2>
			</div>
			
			<div class="col-sm-11 col-xs-11 pull-right">
				<ul class="nav nav-tabs">
					<li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Invoices</a></li>
					<li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Payments</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Invoice No : INVOICE6554445</span>
										<h4> Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Invoice Short Discription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm"style="#1e315d" data-toggle="modal" data-target="#invoice">Generate Invoice</a>
										
										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Invoice No :INVOICE234445</span>
										<h4> Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Invoice Short Discription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;" >
										<a class="btn btn-primary btn-sm" href="#">Generate Invoice</a>
										
									</div>
								</div>

							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade <?php echo $tab ==2 ? "in active" : "" ?>">
			
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Payment No : PAY6554445</span>
										<h4> Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<!--<li><address>Invoice Short Discription</address></li>-->
										</ul>
									</div>
									 
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm"style="#1e315d" data-toggle="modal" data-target="#pay">Payment Receipt</a>
										
										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Payment No  :PAY234445</span>
										<h4> Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<!--<li><address>Invoice Short Discription</address></li>-->
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;" >
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
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
               
            
<div class="tab-content">
					<form action="showReceipt.php" method="POST">
<table >
<tr><td>Transaction ID <input type="text" name="txtID" value="PL-F2567890342"> <?php echo date("m / d / Y");?></td></tr>
<tr><td><h2>Your Order:</h2></td></tr><img src="<?php echo base_url();?>assets/logo2.png" alt="image description" width="30px"style="margin-top: -25px; margin-left: 385px;margin-bottom: -162px; width: 175px;">
<tr><td><input  type="checkbox"  name="cbItem[]" value=" LED"> LED</td> <td>Quantity <input type="text" value="1000" name="txtQty[]"></td></tr>
<tr><td><input  type="checkbox" name="cbItem[]" value="Bulb">Bulb</td> <td>Quantity <input type="text" value="500" name="txtQty[]"></td></tr>
<tr><td>Amount Given:<input type="text" name="txtAmount" value=" 10000"></td><td>
 <input type="file" style="width:47px;height:47px;margin-left:-1px;"name="fileToUpload" id="fileToUpload"><input style="margin-right:97px;" type="submit" name="btnGen" value="Generate Receipt">

</table>
</form>
	
  <div class="modal-footer" >

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>
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

                    <table id="questions" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Pay Amount</th>
								 <th scope="col">Order No</th>
								 <th scope="col">TransactionNo/Checkno</th>
                                <th scope="col">Quantity</th>
								 <th scope="col">Gst</th>
                                <th scope="col">Total Amount</th>
								
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>XX45677</td>
									<td>TXXX789900222</td>
                                    <td>500</td>
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
               
         
								
		
<script>
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
</script>
    