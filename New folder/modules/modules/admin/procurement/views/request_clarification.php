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
                                            <h4>Suppliers</h4>
                                            <span>List of  suppliers who needs clarification in <b>Tender Name 2</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                                            </li>

                                            <li class="breadcrumb-item"><a href="<?php echo admin_url();?>procurement/tenders">Procurement</a>
                                            </li>
											  <li class="breadcrumb-item"><a href="#!">Clarifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card borderless-card">
                            <div class="card">

                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                        <table id="dt-ajax-object" class="table table-striped table-bordered " style="width:100%!important;">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Supplier Name</th>
                                                <th>Date</th>
                                                <th style="width:20px;">Clarification</th>
                                                <th>Reply</th>
                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Atandra Energy Pvt. Ltd.</td>
                                                <td>21/08/2020</td>
                                                <td style="width:20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s?</td>
                                                <td><button onclick="replyModal(event);" class="btn  btn-sm btn-out-dashed btn-success btn-square">Reply</button></td>
                                            </tr>
                                                
                                           
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                            
                                                    <th>#</th>
                                                    <th>Supplier Name</th>
                                                    <th>Date</th>
                                                    <th style="width:20px;">Clarification</th>
                                                    <th>Reply</th>
                                                
                                                </tr>
                                            
                                            </tfoot>
                                        </table>
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


<script>
table = $('#dt-ajax-object').removeAttr('width').DataTable({
    columnDefs: [
            { width: 200, targets: 3 }
        ],
        fixedColumns: true,
        scrollX:        false,
  });
</script>
<script>
function replyModal(e){

    e.preventDefault();

    $('#exampleModal').modal();

}

</script>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <label>Reply </label>
            <textarea class="form-control" cols="4" rows="5"></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<style>

th, td { white-space: normal; }
  
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>
