<form name="frm" action="" name="frm" id="frm" enctype="multipart/form-data" method="post">
<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <div class="main-body">
          <div class="page-wrapper">
              <div class="page-body">
                <div class="row">


  <div class="col-md-12">

<div class="page-header">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <div class="d-inline">
                  <h4>Quotations</h4>
                  <span>Manage Quotations here</span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">Quotations</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>



  <div class="card borderless-card">

<!-- </div> -->

                        <div class="card">

                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dt-ajax-object" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Quotation Name</th>
                                              <th>Publish Date</th>
                                              <th>Application End date</th>
                                              <th>View Applications</th>
                                              <th>Edit</th>
                                              <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Quotation Name 1</td>
                                            <td>20/08/2020</td>
                                            <td>10/02/2021</td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="VIEW" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square" value="EDIT" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-danger btn-square" value="DELETE" /></td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Tender Name 2</td>
                                            <td>20/08/2020</td>
                                            <td>10/02/2021</td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="VIEW" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square" value="EDIT" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-danger btn-square" value="DELETE" /></td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Tender Name 3</td>
                                            <td>01/08/2020</td>
                                            <td>20/02/2021</td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="VIEW" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-info btn-square" value="EDIT" /></td>
                                            <td><input type="button" class="btn  btn-sm btn-out-dashed btn-danger btn-square" value="DELETE" /></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                          <th>#</th>
                                          <th>Quotation Name</th>
                                          <th>Publish Date</th>
                                          <th>Application End date</th>
                                          <th>View Applications</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                        </tfoot>
                                    </table>
                                    <input type="button" class="btn  btn-sm btn-out-dashed btn-primary btn-square" value="CREATE NEW QUOTATION" style="width:100%" data-toggle="modal" data-target="#default-Modal" />
                                </div>
                            </div>
                        </div>
                      </div>

                </div>
                    <!-- Checkbox Tree card end -->
                    <!-- DATA TABLE -->

                    <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Manage Quotation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-md-12">
                                             <label>Quotation Name</label>
                                             <input type="text" class="form-control form-control-sm" />
                                           </div>
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-md-6">
                                             <label>Product Category</label>
                                             <select class="form-control form-control-sm" />
                                              <option value="0">Select Category </option>
                                            </select>
                                           </div>
                                           <div class="col-md-6">
                                             <label>Select Product</label>
                                             <select class="form-control form-control-sm" />
                                              <option value="0">Select Product </option>
                                            </select>
                                           </div>
                                         </div>
                                    </div>


                                      <div class="form-group">
                                          <div class="row">
                                             <div class="col-md-6">
                                               <label>Required Qty</label>
                                               <input type="text" class="form-control form-control-sm" />
                                             </div>
                                             <div class="col-md-6">
                                               <label>Quotation End Date</label>

                                                <input type="text" class="form-control form-control-sm" />
                                      
                                             </div>
                                           </div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DATA TABLE END  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>

    <?php   $this->view('template/admin/dataTable.php');  ?>

<!-- <script>
$( document ).ajaxStart(function() {
	$('#loader').show();
});
$( document ).ajaxStop(function() {
	$('#loader').hide();
});
</script> -->
<script>
table = $('#dt-ajax-object').DataTable({
  });
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>
