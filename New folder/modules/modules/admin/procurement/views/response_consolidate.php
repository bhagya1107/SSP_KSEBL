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
                  <h4>Response Consolidate</h4>
                  <!-- <span>Manage Procurement here</span> -->
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item"><a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo admin_url();?>procurement/tenders">Procurement</a> </li>
                  <li class="breadcrumb-item"><a href="#!">Response Consolidate</a> </li> 
              </ul>
          </div>
      </div>
  </div>
</div>


                    <div class="card borderless-card">
                        <div class="card">

                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                <button class="btn btn-primary btn-sm btn-out-dashe">Export as Excel</button>
                                <div style="margin:10px"></div>
                                    <table id="dt-ajax-object" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Query</th>
                                              <th>Kiefner & Associates</th>
                                              <th>Lorem Ipsum Associates</th>
                                              <th>Tincidunt Ltd</th>
                                              <th>NAM LLP</th>
                                              <th>Test</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Type of Business ?</td>
                                            <td>Fleet Supply</td>
                                            <td>Office Supply</td>
                                            <td>MRO Supply</td>
                                            <td>Office Supply</td>
                                            <td>Office Supply</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Company Establishment date ?</td>
                                            <td>20/08/2020</td>
                                            <td>10/02/2014</td>
                                            <td>25/08/2000</td>
                                            <td>10/02/1994</td>
                                            <td>01/01/1890</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Change of ownership in the past 3 years ?</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>NO</td>
                                            <td>NO</td>
                                            <td>NO</td>
                                          </tr>

                                          <tr>
                                            <td>3</td>
                                            <td>Third Party Certification ?</td>
                                            <td>National Minority Supplier Development Council (NMSDC)</td>
                                            <td>NIL</td>
                                            <td>NIL</td>
                                            <td>Women Business Enterprise National Council (WBENC)</td>
                                            <td>NIL</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>	Submit a brief statement of supply and service delivery methods and procedures the firm proposes/plans to
use to execute the contract.?</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</td>
                                            <td>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                            <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</td>
                                            <td>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</td>
                                            <td>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </td>
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                                <th>#</th>
                                              <th>Query</th>
                                              <th>Kiefner & Associates</th>
                                              <th>Lorem Ipsum Associates</th>
                                              <th>Tincidunt Ltd</th>
                                              <th>NAM LLP</th>
                                              <th>Test</th>

                                          </tr>
                                        </tfoot>
                                    </table>
                                    <!-- <input type="button" class="btn  btn-sm btn-out-dashed btn-primary btn-square" value="CREATE NEW PROCUREMENT" style="width:100%" /> -->
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

<style>

td{
    white-space: normal;

}
</style>
