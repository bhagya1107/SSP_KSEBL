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
				<h2>WORK MEASUREMENT</h2>
			</div>
			
			<div class="col-sm-11 col-xs-11 pull-right">
				<ul class="nav nav-tabs">
					<li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home"> Work Measurement</a></li>
					<li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Accept</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">17<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">WORK CODE:CW GG2020201</span>
										<h4> NAME 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Measurement No:MSR2020/01</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm"style="#1e315d" data-toggle="modal" data-target="#invoice">More Details</a>
										
										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">31<span>Dec</span></time>
									<div class="tg-matchdetail">
									<span class="tg-theme-tag">WORK CODE:CW XDE2020201</span>
										<h4> NAME 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Measurement No:MSR45620/01</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm"style="#1e315d" data-toggle="modal" data-target="#invoice">More Details</a>
										
									</div>
								</div>

							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade <?php echo $tab ==2 ? "in active" : "" ?>">
			
						<div class="row" style="margin-top: 15px;">
							<div class="col-sm-11 col-xs-11 pull-right">
				
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr style="background-color:#26265f ;color:#FFF ">
									<th>Sl No</th>
									<th>WORK NAME</th>
									<th>WORK CODE</th>
									<th>MEASUREMENT NO</th>
									<th>MEASUREMENT DATE</th>
									<th>ACTION</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>WORK CHJS MEASUREMENT</td>
									<td>CW-6520 2021</td>
									<td>MSR56/098</td>
								  <td>26/08/2020</td>
	<td><button style="width:87px;height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" data-toggle="modal" data-target="#accept" class="btn btn-primary btn-xs">Acceptance</button></td>
</td>
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
		</div>
	</section>
</main>



<!------------------------Documents------------------------------------------------------->



<div class="modal fade" id="accept" style="padding-left: 0px !important;">

    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
               
            
	<div id="agreements" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
					<b>Measurement Certificates</b><br><br>
					*This claim preferred in thisbill has not preferred
					previously<br>
					*The work has been carried outfor the purpose of KSEBL_SSP
					
					<br>
					<br>
					<b>Measurement Acceptance</b><br>
					 <!--<label class="radio-inline">Mode of Acceptance:</label>
              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="signing">
            </label><br>-->
			 <label class="radio-inline">Action:</label>
              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Accept">Accept
             <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Accept">Reject
					 </div>
				 <div class="modal-footer" >
		<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>			

 
          
    </div>
</div>
</div>
</div>
<!-------------------------DocumentsEnd---------------------------------------------------->

            <!-- Modal footer -->
          
     
								
		
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
    