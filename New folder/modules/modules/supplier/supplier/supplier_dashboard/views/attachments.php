
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

            <div class="row">
                <div class="col-md-5" style="border: 1px solid #CCC;">
                  <br />
                   <div class="form-group">
                     <label>Select Attachment Type </label>
                     <select class="form-control">
                     <option value="0">
                     Incorporation certificate
                       </option> <option value="0">
                       GST
                       </option> <option value="0">
                         PAN
                       </option>
                       
                     </select>
                   </div>

                   <div class="form-group">
                     <label>Upload file</label>
                     <input type="file" class="form-control" />
                   </div>

                  
                  
                   <div class="form-group">
                     <button type="submit" class="tg-btn pull-right" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                   </div>
                </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr style="background-color:#26265f ;color:#FFF ">
                            <th>Sl No</th>
                            <th>Attachment Type</th>
                            <th>File</th>
                            <th>Delete</th>
                           
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>PAN</td>
                            <td><a target="_blank" href="">View File</a></td>
                           
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
