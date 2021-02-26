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
				<h2>Tenders</h2>
			</div>
			
		<div class="form-group row form_filter" style="display: flex;   align-items: center;">
 										<!-- <label class="col-sm-12 col-lg-5">District</label> -->
 										<div class="col-sm-12 col-lg-12">
										<select class="select2 form-control"  style="margin-left: 77px; width: 187px; height: 38px;" placeholder="Select a Tender Id">
                            <option value="0">
                                TDR001860
                            </option> 
							<option value="0">
                               TDR001862
							   </option> 
							   <option value="0">
                               TDR001889</option>
								</select>
 										</div>	
										<div class="col-sm-12 col-lg-12">
 											<input type="date" class="select2 form-control" id="district" name="group_flat__id"
 												style="margin-left: -14px; width: 187px; height: 38px;" placeholder="Select a date" >
 										</div>
										<div class="col-sm-12 col-lg-12">
										<select class="select2 form-control"  style="margin-left:-32px;width: 187px; height: 38px;" placeholder="Select a location/purchaser">
                            <option value="0">
                                 TVM TEST
                            </option> 
							<option value="0">
                               KTM 11
							   </option> 
							   <option value="0">
                              EKM 89</option>
								</select>
 											
 										</div>
											<div class="col-sm-12 col-lg-12">
 											<button style="height: 38px;width: 103px;margin-left: -12px; color: #fff;background-color: #1e315d; border-color: #ffcc33;" >SEARCH</button>
 										</div>
										
 									</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<ul class="nav nav-tabs">
					<li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Tenders</a></li>
					<li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">My Tenders</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001860</span>
										<h4>Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:-36px;">
										<a class="btn btn-primary btn-sm"style="#1e315d" href="#">Read More</a>
										<a class="btn btn-primary btn-sm" href="<?php echo base_url("supplier/tenders/apply/1") ?>">Apply </a>
										<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>
										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001862</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:-36px;" >
										<a class="btn btn-primary btn-sm" href="#">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Apply </a>
										<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001889</span>
										<h4>Tender Name 3</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:-36px;" >
										<a class="btn btn-primary btn-sm" href="#">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Apply </a>
										<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>
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
										<span class="tg-theme-tag">My Tender No : TDR001860</span>
										<h4>My Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="btn btn-primary btn-sm" href="#">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#siteinspect" >Site Inspections </a>
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">My Tender No : TDR001862</span>
										<h4>My Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="btn btn-primary btn-sm" href="#">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#siteinspect" >Site Inspections </a>
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
<!-- Modal -->
<div class="modal fade" id="myModal" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clarifications</h4>
                 <a href="#" class="gx-fab-btn gx-btn-primary position-absolute addButtonCustom"
                            data-toggle="modal" id="add" data-target="#Service">
                           <i class="zmdi zmdi-plus-circle zmdi-hc-2x" style="margin-left:480px; border-color: #ffcc33;"></i>
                        </a>
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
                                <th scope="col">questions</th>
                                <th scope="col">reply</th>
                                <th scope="col">status</th>
								<th scope="col">Post Date</th>
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>Annual production rate</td>
                                    <td></td>
                                    <td>Pending</td>
                                    <td>13-11-2020</td>
                                   

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
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="Service">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Questions</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Subject</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="subject" placeholder="Add Subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-sm-3 control-label">Description</label>
                        <div class="col-md-10 col-sm-9" id="ques_des_group">
                            <input type="description" class="form-control" id="description" placeholder=" Add Description">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">Comment</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                            <input type="description" class="form-control" id="description" placeholder="Add Comment">
                        </div>
                    </div>
                    <input type="hidden" name="questionid" id="questionid">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="">Submit</button>
            </div>

        </div>
    </div>
</div>

<!------------------------Site Inspections------------------------------------------------------->

<div class="modal fade" id="siteinspect" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Site Inpections</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                <div class="table-responsive">

                    <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Inspection Date</th>
                                <th scope="col">Inspection Fee</th>
                                <th scope="col">Pay Fee</th>
								
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>13-11-2020</td>
                                    <td>2500</td>
                                    <td><button  data-toggle="modal" data-target="#Payment" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">Pay</button></td>
                                    

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
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<!-------------------------SiteInspection End---------------------------------------------------->
<div class="modal fade" id="Payment">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Payment</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Pay Amount</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="subject" placeholder="Add fee amount">
                        </div>
                    </div>
                   
                    <input type="hidden" name="pay" id="pay">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
               
                <button type="button" style="margin-right: 252px;" class="btn btn-primary" onclick="">Submit</button>
            </div>

        </div>
    </div>
</div>



