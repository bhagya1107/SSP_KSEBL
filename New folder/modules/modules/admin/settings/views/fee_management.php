                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-12">
                                                <div class="page-header-title1">
                                                    <div class="d-inline1 row">
                                                        <div class="col-lg-6"><h4>Fee Management</h4></div>
                                                        
                                                        <div class="col-lg-6">
                                                        </div>

                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                              
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card querycard">
                                                    <div class="card-header">
                                                        <h4>Fee Management</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form id="tg-commentform" class="tg-commentform" method="POST"  action="<?php echo admin_url("settings/save_feemanagement") ?>">
                                                                <fieldset>
                                                                    <div class="form-group">
                                                                        <label>Select Type</label>
                                                                            <select class="form-control">
                                                                                    <option>Registration Fees</option>
                                                                                    <option>Renewal Fees</option>
                                                                            </select> 
                                                                     </div>
                                                                     <div class="form-group">
                                                                        <label>Fee in Amount</label>
                                                                           <input type="text" name="" class="form-control">
                                                                     </div><div class="form-group">
                                                                        <label>Tenure in months</label>
                                                                            <input type="text" name="" class="form-control">
                                                                     </div>
																	<div>
																	<label>Notification</label><br>
  <input type="radio" id="huey" name="drone" value="huey"
         checked>
  <label for="huey">Active</label>
</div>

<div>
  <input type="radio" id="dewey" name="drone" value="dewey">
  <label for="dewey">Inactive</label>
</div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-6">
                                                <div class="card querycard">
                                                    <div class="card-header">
                                                        <h4> View Fee Management</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                          <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SL.NO</th>
                                                                        <th>Fee Type</th>
                                                                        <th>Fee Amount</th>
                                                                        <th>Tenure</th>
																		<th>Status</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Registration Fee</td>
                                                                        <td>5000</td>
                                                                        <td>3 months</td>
																		<td>Active</td>
                                                                        <td><button class="btn  btn-sm btn-out-dashed btn-success btn-square">Edit</button></td>
                                                                        <td><button class="btn  btn-sm btn-out-dashed btn-danger btn-square">Delete</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Renewal Fee</td>
                                                                        <td>1000</td>
                                                                        <td>6 months</td>
																		 <td>Inactive</td>
                                                                        <td><button class="btn  btn-sm btn-out-dashed btn-success btn-square">Edit</button></td>
                                                                        <td><button class="btn  btn-sm btn-out-dashed btn-danger btn-square">Delete</button></td>
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
                    </div>
                </div>