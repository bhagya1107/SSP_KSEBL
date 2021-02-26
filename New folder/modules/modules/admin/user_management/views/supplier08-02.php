<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<form name="frm" action="" name="frm" id="frm" enctype="multipart/form-data" method="post">
  <div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">
          <div class="page-body">
            <div class="row"> 


              <div class="col-md-12">

                <div class="page-header" >
                  <div class="row align-items-end" >
                    <div class="col-lg-3">
                      <div class="page-header-title">
                        <div class="d-inline">
                          <h4>Suppliers</h4>
                          <span>List of registerd suppliers</span>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3">
                      <div class="form-group row form_filter"  >
                       <label class="col-sm-5 col-lg-3">Status</label>
                       <div class="col-sm-7 col-lg-9" id="div1">
                        <select class="select2-placeholer form-control" data-placeholder="Select a status" name="status_type" id="status_type"  >
                          <option value="0"   >To Approve</option>
                          <option value="1"  > Approved</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                   <div class="form-group row form_filter"  >
                     <label class="col-sm-5 col-lg-3" >User&nbsp;Type</label>

                     <div class="col-sm-7 col-lg-9" >
                      <select style="margin-left: 10px;" class="select2-placeholer form-control" data-placeholder="Select a status" name="user_type" id="user_type">
                        <option value="" >All</option>
                        <option value="2"  > Contractors</option>
                        <option value="3"  > Suppliers</option>
                        <option value="1"   >Both</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="form-group row form_filter"  >
                 <!-- <label class="col-sm-5 col-lg-3">Status</label> -->
                 <div class="col-sm-7 col-lg-9" style="margin-left: 150px;">
                   <a data-toggle="modal" data-target="#importfile"><input type="button" style="background-color: #0e214c"  class="btn  btn-sm btn-out-dashed btn-success btn-square" value="IMPORT FILE" /></a>
                 </div>
               </div>


               <div class="col-lg-4" style="margin-left: 700px;">
                <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                    </li>

                    <li class="breadcrumb-item" ><a href="#!">Suppliers</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
             <?php 
        $msg=$this->session->flashdata('msg'); 
        if($msg)
        {
          ?>
          
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?php
           echo $msg;
            ?>
          </div>
        
        <?php 
        }
        ?>
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
                        <th>Registered Date</th>
                        <th>Pan No</th>
                       
                        <th>Mobile</th>
                        <th>Email</th>
                         <th>User Type</th>
                        <th>Status</th>
                        <th>View Profile</th>
                      </tr>
                    </thead>
                    <tbody id="div2">
                      <?php $i=1; ?>
                      <?php foreach ($getuserdetails as $key => $value) {

                       ?>
                       <tr>
                        <td><?php echo $i;?></td>

                        <td><?php echo $value->name;?></td>
                        <!-- <td>Atandra Energy Pvt. Ltd.</td> -->

                        <td><?php echo $value->created_date;?></td>
                        <td><?php echo $value->pannumber;?></td>
                        
                        <td><?php echo $value->mobile;?></td>
                        <td><?php echo $value->email;?></td>
                        <td><?php echo $value->user_type;?></td>
                        <td><a href="<?php echo base_url('webuser/User_management/activate_account/'.$value->uid)?>" ><input type="button"   class="btn  btn-sm btn-out-dashed btn-success btn-square" value="Activate"  onclick="confirm('are you sure')" /></a></td>
                        <td>
                          <a href="<?= admin_url('user_management/supplier_profile/'.$value->uid) ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" style="background-color: #0e214c"value="VIEW PROFILE"></a>
                        </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                                  <!--       <tfoot>
                                          <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
                                            <th>Registered Date</th>
                                            <th>Pan No</th>
                                            <th>Contact Person</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>View Profile</th>
                                          </tr>
                                        </tfoot> -->
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

<!-- <script>
$( document ).ajaxStart(function() {
	$('#loader').show();
});
$( document ).ajaxStop(function() {
	$('#loader').hide();
});
</script> -->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>


<!-- -------------------------------------------------------------------------------- -->



<!-- ------------------------------import file------------------------------- -->



<div class="modal fade" id="importfile" style="padding-left: 0px !important;">

  <div class="modal-dialog">
    <div class="modal-content" style="width:583px;height:200px;">

      <!-- Modal Header -->
      <div class="modal-header">


        <div class="tab-content">
          <form  method="post" id="import_form" enctype="multipart/form-data"><button type="button" class="btn btn-danger" data-dismiss="modal"style="margin-left: 500px;" >X</button>
            <h4 >IMPORT SUPPLIERS LIST</h4>
            <table style="margin-top: 40px;" >
              <th></th>
              <th><input type="file"  name="file" id="file" accept=".xls, .xlsx" /></th>

              <td></td>
              <td> <button type="Submit" name="import" value="Import" class="btn btn-primary" >Submit</button></td>


            </table>
          </form>

 <!--  <div class="modal-footer" >
 
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>  -->       
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      table = $('#dt-ajax-object').DataTable({});
      $(document).ready(function(){

 $("#status_type").on('change',function() 
    {
     refreshTable();
   });
    $("#user_type").on('change',function() 
    {
      refreshTable();
    });

        $('#import_form').on('submit', function(event){
          event.preventDefault();
          $.ajax({
            url:"<?php echo base_url(); ?>webuser/User_management/import",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
             dataType: 'json',
            beforeSend: function() {
        // setting a timeout
        $("#overlay").fadeIn(300);
    },
            success:function(data){
              $('#file').val('');
              alert(data.msg);
              if(data.status=='sucess'){
              refreshTable();
              $('#importfile').modal('hide');
              }

            },
             complete: function() {
        $("#overlay").fadeOut(300);
    },
          })
        });

      });

  function refreshTable(){
    var statusType=$('#status_type').val();
    var userType=$('#user_type').val();
    $.ajax({

      type:'post',
      url:"<?php echo base_url('webuser/User_management/getdetails')?>", 
      data:{
        status_type: statusType,
        user_type:userType
      },
      dataType: 'json',
        beforeSend: function() {
        // setting a timeout
       $("#overlay").fadeIn(300);
    },
      success:function(result)
      {
        var tab='';
        var j=1;
        $.each( result, function(i, data){
          tab=tab+'<tr> <td>'+j+'</td> <td>'+data.name+'</td> <td>'+data.created_date+'</td> <td>'+data.pannumber+'</td> <td>'+data.primary_contact_name+'</td> <td>'+data.mobile+'</td> <td>'+data.email+'</td> <td>';
       
          if(data.active_status==0){
            var url='<?php echo base_url()?>'+"webuser/User_management/activate_account/"+data.uid;
           
            tab=tab+'<a  class="btn  btn-sm btn-out-dashed btn-success btn-square" href="'+url+'">Activate</a>';
          }
          else
          {
            tab=tab+'<a >Active</a>';
          }

var url1='<?php echo base_url()?>'+"webuser/User_management/supplier_profile/"+data.uid;
tab=tab+' </td> <td><a href="'+url1+'"><input type="button" style="background-color: #0e214c" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="VIEW PROFILE"></a></td> </tr>';

j++;
});
        if ($.fn.DataTable.isDataTable("#dt-ajax-object")) {
          $('#dt-ajax-object').DataTable().clear().destroy();
        }
        $('#div2').html(tab);
        table = $('#dt-ajax-object').DataTable({
        });
      },
       complete: function() {
          $("#overlay").fadeOut(300);
    },
    });
  }
    </script>


