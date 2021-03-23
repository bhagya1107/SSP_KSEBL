
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
					<h1>Procurement Plan</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Procurement Plan</li>
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

<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>Procurement Plan</h2>
			</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<div class="row">
				        <div class="form-group">
                 <!-- <div class="row">
                    <div class="col-md-4">
                      <select class="form-control">
                      <option value="">
                        Select Product
                      </option>
                    </select>
                  </div>
									<div class="col-md-4">
									<a class="tg-btn" href="#">Show All</a>
									</div>

                  </div>-->
                </div>
			</div>


					<div class="table-responsive" style="overflow-y:scroll; height:400px;">
						<table class="table table-bordered table-hover">
							<thead>
								<tr style="background-color:#26265f ;color:#FFF ">
									<th>Sl No</th>
									<th>Product</th>
									<th>Scheme</th>
									<th>Plan Duration</th>
									<th>Plan Start Date</th>
									<th>Expected Quantity</th>
									<th>Procured so far</th>
								</tr>
							</thead>
							<tbody id="myTable">
								<tr>
									<td>1</td>
									<td>Bulb</td>
									<td>KSEB 20-21</td>
									<td>120 Days</td>
								  <td>26-08-2020</td>
									<td><a href='#' data-toggle="modal" data-target="#myModal">1200</a></td>
									<td><a href='#' data-toggle="modal" data-target="#myModal2">200</a></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>

<!-- <button id="buttonscroll" class="scroltop" onclick="window.scrollTo(0, 0);" style="display: inline-block;"><i class=" fa fa-arrow-up"></i></button> -->

<!----------------------modal starts----------------------------------------->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Expected Quantity</h4>
      </div>
      <div class="modal-body">
        <table class="table">
			<thead>
				<tr>
					<th>Place</th>
					<th>Quantity</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Thiruvananthapuram</td>
					<td>300</td>
				
				</tr>
				<tr>
					<td>Palakkad</td>
					<td>400</td>
				
				</tr>
				<tr>
					<td>Thrissur</td>
					<td>200</td>
				
				</tr>
				<tr>
					<td>Pathanamthitta</td>
					<td>300</td>
				
				</tr>
				<tr style="background-color:#55555573">
					<td>Total</td>
					<td>1200</td>
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



<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Procruded so far</h4>
      </div>
      <div class="modal-body">
        <table class="table">
			<thead>
				<tr>
					<th>Place</th>
					<th>Quantity</th>
					<th>Date</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Thiruvananthapuram</td>
					<td>300</td>
					<td>10-10-2020</td>
				
				</tr>
				<tr>
					<td>Palakkad</td>
					<td>400</td>
					<td>12-10-2020</td>
				
				</tr>
				<tr>
					<td>Thrissur</td>
					<td>200</td>
					<td>12-10-2020</td>
				
				</tr>
				<tr>
					<td>Pathanamthitta</td>
					<td>300</td>
					<td>14-10-2020</td>
				
				</tr>
				<tr style="background-color:#55555573">
					<td>Total</td>
					<td>1200</td>
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

<script>
     $(document).ready(function() {


						universalprocurementsearch();
         $('#datepicker').datepicker({
             dateFormat: 'yy-mm-dd'
         });
     });

     function universalprocurementsearch() {

       
  $("#keywordprocurement").on("keyup", function() {
		//	console.log("bbbb");
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

     }


     $("#procurementdate").on("change", function() {
         //var activetab = $("#deliverytabs li.active").attr('id');
         var value = $(this).val();
         filterdeliverydata(value);
     });

					function filterdeliverydata(value) {

$("#myTable tr").filter(function() {

				var datetime1 = $(this).attr('datetime');
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});

$('.hiddendate').addClass('hide');
var tenderlength = $(".commonfilter .tg-ticket [style='display: block;']").length;
console.log(tenderlength);

}

					</script>