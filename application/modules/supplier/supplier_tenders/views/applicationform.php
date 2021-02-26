<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<!-- <div class="tg-section-name">
				<h2>Apply</h2>
      </div> -->
          <div class="col-lg-12" style="float-right">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title" style="float:right">
                        <li class="breadcrumb-item">
                          <a href="index-1.htm"><a href="<?php echo supplier_url("tenders") ?>">My Tenders </a><i class="fa fa-angle-double-right"></i>
                          </li>

                          <li class="breadcrumb-item"><a href="#">Form</a>
                          <!-- <?php echo supplier_url("tenders/apply/$tenderId") ?> -->
                          </li>
                    </ul>
                </div>
            </div><br>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            
          
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
             
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <!-- <h6 class="m-0">Account Details</h6> -->
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        
                             
                                 <div class="modal-body">
                <form id="questions_form">
				 <div class=" row">
                        <p>Tender No:TDR00186</p><br>
						<p>Tender Name:TEST</p><br>
						<p>Tender Date:30-11-2020</p><br>
                    </div><table>
                    <div class="form-group row">
                        <label for="subject" class="col-md-6 col-sm-6 control-label">Type of Business?</label>
                        <div>MRO Supply</div>
                           
                    </div>
                    <div class="form-group row">
                      <label for="subject" class="col-md-6 col-sm-6 control-label">Company Establishment Date?</label>
                        <div>30-11-2020</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Ownership Classification?</label>
                          <div>Large Business</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Annual Production?</label>
                          <div>2</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Change of Ownership in the past 3 yrs?</label>
                          <div>Yes</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Third Party Certification?</label>
                          <div>Association For Service Disabled Veterans</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Is GST Applicable?</label>
                          <div>Yes</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Company Turnover?</label>
                          <div>200000</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Incorporation Certificate?</label>
                          <div><a href="xx"></a>img.doc</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">TurnOver Slab?</label>
                          <div>10L-20L</div>
                    </div>
					</table>
                    <input type="hidden" name="questionid" id="questionid">

                </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
</div>
</section>
</main>

<!-------modal---------------->

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
                <h4 class="modal-title" id="adding">Clarifications</h4>
                
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
					
					<div class="modal-body">
                <form id="questions_form">
                   
                   
					<div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">Comment</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                            <input type="description" class="form-control" id="description" placeholder="Add Comment">
                        </div>
                    </div>
					
					 <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">FileUpload:</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
 <input type="file" style=""name="fileToUpload" id="fileToUpload">                        </div>
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
<!------------modal end-------------------->




<style>
.list-group-item{
    border:none!important;
    box-shadow: 0 1px 6px rgba(32,33,36,.28);
    border-color: rgba(223,225,229,0);
}
.col{
    padding:15px;
}


</style>