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
				<h2>Notifications</h2>
			</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<div class="row">
				        <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <select class="form-control">
                      <option value="">
                        Select Subject 
                      </option>
                    </select>
                  </div>
									<div class="col-md-4">
									<a class="tg-btn" href="#">Search</a>
									</div>
									
									<div style="margin-left: 326px;">
		  <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title" style="">
                  <li class="breadcrumb-item">
				  <i class="fa fa-home"></i><a href="#!"></a>
                      
                  </li>

                  <li class="breadcrumb-item"><a href="#!">/Notifcations</a>
                  </li>
              </ul>
          </div>
		  </div>

                  </div>
                </div>
			</div>


					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr style="background-color:#26265f ;color:#FFF ">
									<th>Sl No</th>
									<th>Subject</th>
									<th style="width:50%;">Description</th>
									<th>Date Posted</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>test</td>
									<td>testing</td>
								  <td>26/08/2020</td>
									<td>
									 <button style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" data-toggle="modal" data-target="#notification" class="btn btn-primary btn-xs">Reply</button></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>


					<!---------------------------------Notification modal-------------------------------------------->
<div class="modal fade" id="notification">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Comment</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">subject:</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="subject" placeholder="Add subject">
                        </div>
                    </div>
					
					 <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Comment:</label>
                         <textarea class="form-control" cols="5" rows="5"></textarea>
                    </div>
                   
                    <input type="hidden" name="pay" id="pay">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
               
                <button type="button"  style="margin-right: 252px;" class="btn btn-primary" onclick="">Submit</button>
            </div>

        </div>
    </div>
</div>