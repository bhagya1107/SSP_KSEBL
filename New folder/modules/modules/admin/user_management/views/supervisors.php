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
                  <h4>Supervisors</h4>
                  <span>Manage supervisors</span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">supervisors</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card">

                            <div class="card-block">
                                  <h4 class="sub-title">Create supervisors</h4>


                                <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Name <span class="star">*</span></label>
                                    <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter  name" maxlength="20" name="name" id="name" autocomplete="off">
                                  </div>

                                  </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter email" maxlength="40" name="email" id="email" autocomplete="off">
                                  </div>

                                  </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Mobile </label>
                                    <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter Mobile" maxlength="10" name="mobile" id="mobile" autocomplete="off">
                                  </div>

                                  </div>
                                </div>

                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>User Name <span class="star">*</span></label>
                                      <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter username" maxlength="20" name="username_get" id="username_get" autocomplete="off">
                                    </div>

                                    </div>
                                  </div>

                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>Password <span class="star">*</span></label>
                                      <input type="text" class="form-control form-control-sm thresold-i" placeholder="Enter password" maxlength="20" name="password_get" id="password_get" autocomplete="off">
                                    </div>

                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Active Status</label>
                                    <input type="checkbox" class="js-small" name="display_status" id="display_status" checked="">
                                  </div>
                                  <input type="hidden" name="hidid" id="hidid" value="0" />
                                  <hr />
                                  <div id="crude">
                                      <button class="btn btn-out-dashed btn-success btn-square" type="button" onclick="saveuser()">Save</button>
                                  </div>


                                </div>


                                <div>

                                </div>
                            </div>
  </div>
  <div class="col-md-8">

      <div class="card borderless-card">

    <!-- </div> -->

                            <div class="card">

                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                        <table id="dt-ajax-object" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Name</th>
                                                  <th>Mobile</th>
                                                  <th>Email</th>
                                                  <th>Username</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Vishnu Dev</td>
                                                <td>8887775550</td>
                                                <td>abc@gmail.com</td>
                                                <td>user1</td>
                                              </tr>
                                            </tbody>
                                            <tfoot>
                                              <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Username</th>

                                              </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>

  </div>
</div>
                </div>
                    <!-- Checkbox Tree card end -->
                    <!-- DATA TABLE -->


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
