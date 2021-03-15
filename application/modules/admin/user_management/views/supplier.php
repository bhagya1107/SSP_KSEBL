<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<style type="text/css">
  .tbllength {
    max-width: 160px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap; 
  }
</style> 
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
                   <a data-toggle="modal" data-target="#importfile"><input type="button" style="background-color: #0e214c"  class="btn  btn-sm btn-out-dashed btn-success btn-square" value="IMPORT " /></a>
                 </div>
               </div>


               <div class="col-lg-4" style="margin-left: 700px;">
                <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                    </li>

                    <li class="breadcrumb-item" ><a href="<?= admin_url('user_management/suppliers') ?>">Suppliers</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <script> 
        setTimeout(function() {
            $('#mydivss').hide('fast');
        }, 10000);
    </script>
          <?php 
          $msg=$this->session->flashdata('msg'); 
          if($msg)
          {
            ?>

            <div class="alert alert-success" id="mydivss">
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
           <?php 
          $dmsg=$this->session->flashdata('dmsg'); 
          if($dmsg)
          {
            ?>

            <div class="alert  alert-danger" id="mydivss">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?php
              echo $dmsg;
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
                        <th >Name</th>
                        <th>Registered Date</th>
                        <th>Pan No</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Source</th>
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


                        <td class="tbllength"><?php echo $value->name;?></td>
                        <!-- <td>Atandra Energy Pvt. Ltd.</td> -->

                        <td><?php echo $value->created_date;?></td>
                        <td><?php echo $value->pannumber;?></td>
                        
                        <td><?php echo $value->mobile;?></td>
                        <td><?php echo $value->email;?></td>

                        <td>
                          <?php if($value->user_type=="1") 
                          { echo "Contractor,Supplier";
                        }
                        elseif($value->user_type=="2"){
                          echo "Contractor";
 
                        } 
                        elseif($value->user_type=="3")
                        {
                         echo "Supplier"; 
                       } ?></td>
                       <td><?php echo $value->source;?></td>
                       <td><a >Not Active</a></td>
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
    <div class="modal-content" style="width:383px;height:200px; ">
      <!-- Modal Header -->
      <div class="modal-header ">
        <div class="tab-content">
           <form method="post" id="import_form" enctype="multipart/form-data" class="form">
             <div class="frame1">
              	<div class="center1">
		              <div class="title">
			             <h1>Drop Supplier list to upload</h1>
		              </div>
                   <p style="color: black;" id="p">Select Excel file up to 10MB</p>
		                <div class="dropzone">  
   
			                  <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			                   <input type="file" onclick="myFunction1()" class="upload-input"  name="file" id="file" accept=".xls, .xlsx" required />
      

		                </div>  

		                    <button type="submit" id="submitb" onclick="myFunction()" class="btn1" name="uploadbutton">Upload file</button>

                 	</div>
               </div>
            </form>     
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>

       //alert
      $(document).on("click", "a.deleteText", function() {
    if (confirm('Are you sure ?')) {
        $(this).prev('span.text').remove();
    }
});
      //alert ent
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
        $("#overlay").fadeIn();
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
        $("#overlay").fadeOut();
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
        $("#overlay").fadeIn();
      },


     
      success:function(result)
      {
        var tab='';
        var j=1;

        $.each( result, function(i, data){
          var activateString='';
          if(data.active_status==0){
            var url='<?php echo base_url()?>'+"webuser/User_management/activate_account/"+data.uid;
            activateString='<a >Not Active</a>';
          } else {
            activateString='<a >Active</a>';
          }
          var data1='';
          if(data.user_type==1){
            data1="Supplier,Contractor";
          }else if(data.user_type==2){
            data1="Contractor";
          }else if(data.user_type==3){
            data1="Supplier";
          }
          tab=tab+'<tr> <td>'+j+'</td> <td class="tbllength">'+data.name+'</td> <td>'+data.created_date+'</td> <td>'+data.pannumber+'</td> <td>'+data.mobile+'</td>  <td>'+data.email+'</td> <td>'+data1+'</td> <td>'+data.source+'</td> <td>';
          tab=tab+activateString;

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
        $("#overlay").fadeOut();
      },
    });
      }
    </script>



    <!-- /////////////////////import file///////////////// -->
    <script type="text/javascript">
	$(document).ready(function(){
  $('form input').change(function () {
    // $('form p').text("1 file selected");
    // $('form p').text("1 file selected");
    //  $('#p').css('display','block');
    
  });
});


function myFunction() {
  document.getElementById("p").style.display = "none";

  // $('#submitb').css('display','none');
}

function myFunction1() {
  // document.getElementById("p").style.display = "none";

  // $('#submitb').css('display','none');
}
	
</script>
<style type="text/css">


.frame1 {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 550px;
	height: 250px;
	margin-top: -100px;
	margin-left: -200px;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	background: linear-gradient(to top right, #0e214c 0%, hotpink 100%);
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center1 {
  border: 1px dashed black;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 550px;
	height: 250px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn1 {
	display: block;
	width: 140px;
	height: 40px;
	background: #0e214c;
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 hotpink;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}

.btn1:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}
</style>



