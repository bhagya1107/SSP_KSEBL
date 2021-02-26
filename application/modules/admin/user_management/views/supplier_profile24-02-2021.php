<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start --> 
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Supplier Profile</h4>
                                    <!-- <span>Supplier details</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo admin_url('user_management/dashboard');?>"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?= admin_url('user_management/suppliers') ?>">Supplier</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Supplier Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid" src="<?php echo base_url(); ?>assets/admin/files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius" src="<?php echo base_url(); ?>assets/admin/files\assets\images\social\profile.jpg" alt="user-img" style="width: 30%;">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2><?php echo "$getuserdetails->name"?></h2>
                                                            <span class="text-white">PAN Number : <?php echo "$getuserdetails->pannumber"?></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">  
                                        <li class="nav-item" style="width: 200px;">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Basic Info</a>
                                            <div class="slide" style="width: 200px;"></div>
                                        </li>
                                         <li class="nav-item"  style="width: 200px;<?php if($getuserdetails->user_type=="2") echo "display: none;" ?>" >
                                            <a class="nav-link" data-toggle="tab" href="#portfolio" role="tab" style="<?php if($getuserdetails->user_type=="2") echo "display: none;" ?>">Supplier Portfolio</a>
                                            <div class="slide" style="width: 200px;"></div>
                                        </li> 
                                        <li class="nav-item" style="width: 200px;">
                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Bank Details</a>
                                            <div class="slide" style="width: 200px;"></div>
                                        </li>

                                        <li class="nav-item" style="width: 200px;">
                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Documents</a>
                                            <div class="slide" style="width: 200px;"></div>
                                        </li>
                                        <!-- style="<?php if($getcompanypermissiondetails->purchase_order=='0') echo "display: none;" ?>" > -->

                                        <li class="nav-item" style="width: 200px;" >
                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab" style="<?php if($getuserdetails->user_type=="2") echo "display: none;" ?>" >Staff Details</a>
                                            <div class="slide" style="width: 200px;"></div>
                                        </li> 
                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <style type="text/css">
                                                    .style5:focus {     
                                                    background-color:blue;    
                                                }
                                                                                              
                                              </style>
                                                <h5 class="card-header-text">About Supplier</h5>
                                                <button id="editprofilefn"   type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right editbutton editprofilefn style5">
                                               <i class="icofont icofont-edit"></i>
                        </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
     <table class="table m-0">
        <tbody>
        <tr>
             <th scope="row"> Name</th>
             <input type="hidden" name="uid" id="uid"  value="<?php echo "$getuserdetails->uid"?>" >
             <td><input type="text" class="form-control showprofile" id="name" name="name" readonly 
                  value="<?php echo "$getuserdetails->name"?>"></td>
         
        </tr>
        <tr>
             <th scope="row">Contact Person</th>
             <td><input type="text" class="form-control showprofile" id="primary_contact_name" name="primary_contact_name" readonly 
                  value="<?php echo "$getuserdetails->primary_contact_name"?>"></td>
        </tr>
        <tr>
            <th scope="row">Registered Date</th>
             <td><input type="text" class="form-control showprofile" id="created_date" name="created_date" readonly 
                  value="<?php echo "$getuserdetails->created_date"?>"></td>
        </tr>
        <tr>
            <th scope="row">Address</th>
            <td><input type="text" class="form-control showprofile" id="address" name="address" readonly 
                  value="<?php echo "$getuserdetails->address"?>"></td>
        </tr>
        <tr>
            <th scope="row">Type</th>
            <td><input type="text" class="form-control showprofile" id="user_type" name="user_type" readonly 
                  value=" <?php if($getuserdetails->user_type=="1") 
                                                              { echo "Contractor,Supplier";
                                                              }
                                                              elseif($getuserdetails->user_type=="2"){
                                                                echo "Contractor";

                                                              } 
                                                              elseif($getuserdetails->user_type=="3")
                                                              {
                                                                 echo "Supplier"; 
                                                              } ?>">
            </td>
          
            </tr>
           
            </tbody>
    </table>
     </div>
    </div>
                                                                    <!-- end of table col-lg-6 -->

<div class="col-lg-12 col-xl-6">
    <div class="table-responsive">
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">Email</th>
                    <td>
                        <style type="text/css">
    .errspan {
       /* float: right;
        margin-right: 2px;
        margin-top: -10px;
        position: relative;
    
        color: red;*/
    }

</style>
                    <!-- <span class=" fa fa-eye errspan"> -->
    <!-- <i class="fa fa-eye"></i> --> <input type="password"  class="form-control showprofile" id="email" name="email" readonly  
                  value="<?php echo "$getuserdetails->email"?>" onclick="viewemail()">
</span>
    
    
                </tr>
                <tr>
                    <th scope="row">Mobile Number</th>
                        <td><input type="Number" class="form-control showprofile" id="mobile" pattern="[7896][0-9]{9}" name="mobile" readonly 
                  value="<?php echo "$getuserdetails->mobile"?>"></td>
                </tr>

                <tr>
                    <th scope="row">Website</th>
                    <td><input type="text" class="form-control showprofile" id="website" name="website" readonly 
                  value="<?php echo "$getuserdetails->website"?>"></td>
                   
                </tr>
               <!--  <tr>
                <th scope="row">Total Applied Tenders</th>
                    <td><input type="text" class="form-control showprofile" id="tender" name="created_date" readonly 
                  value="2"></td>
                </tr>
                <tr>
                   <th scope="row">Selected Applications</th>
                    <td><input type="text" class="form-control showprofile" id="application" name="created_date" readonly 
                  value="1"></td>
                </tr> -->
                 <tr>
                <th scope="row">User Name</th>
                <td><input type="text" class="form-control showprofile" id="username" name="created_date" readonly 
                  value="<?php echo "$getuserdetails->username"?>"></td>
            </tr>
                <tr>
                    <th scope="row">Password</th>

                    <td ><input type="password" class="form-control showprofile" id="password" name="created_date" readonly 
                  value="<?php echo "$getuserdetails->uid"?>" onclick="viewpassword()"></td>
                </tr>
                <tr>
                    <th></th>
                    <td > <div class="form-group"><button type="submit" class="btn btn-primary formdisplay form1"  onclick="save_profiledetails();" id="saveprofilefn"  data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"  ><span>Save</span></button>
                      <a href="<?php echo base_url('webuser/User_management/supplier_profile/'.$getuserdetails->uid)?>">  <button type="submit" class="btn btn-primary formdisplay form1 "   data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987" ><span>Cancel</span></button></a></div></td>

                     

                </tr>
            </tbody>
        </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of view-info -->

                                                <!-- end of edit-info -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>

                                        <!-- personal card end-->
                                    </div>
                                    <!-- tab pane personal end -->
                                    <!-- tab pane info start -->




                                      <div class="tab-pane" id="portfolio" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Supplier Portfolio</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">

                                                  <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">

                                                    <div class="card-block">
                                                      <div class="table-responsive">
                                                             
                                                        <table class="table m-0">
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row">Category Name  </th>
                                                                   <th scope="row">Product Name</th>
                                                                   <th scope="row">Material id</th>
                                                                  
                                                                </tr>
                                                                 <?php foreach ($supplierinfo as $key => $value) {

                       ?>
                                                                  <tr>
                                                                     <td><?php echo $value->categoryname;?></td>
                                                                      <td><?php echo $value->materialname;?></td>
                                                                     <td><?php echo $value->materialId;?></td>
                                                                  </tr>
                                                                   <?php } ?>
                                                              </tbody>
                                                          </table>
                                                  


                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- info card end -->
                                    </div>
                                    <!-- tab pane info end -->





                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Bank Details</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">

                                                  <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">

                                                    <div class="card-block">
                                                      <div class="table-responsive">
                                                          <table class="table m-0">
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row">Account No</th>
                                                                   <th scope="row"> Bank Name</th>
                                                                   <th scope="row">IFSC</th>
                                                                   <th scope="row">Branch </th>
                                                                   <th scope="row">Document </th>
                                                                </tr>
                                                                <?php foreach ($getbankdetails as $key => $value) {

                                                                     ?>
                                                                  <tr>
                                                                     <td><?php echo $value->accountno?></td>
                                                                      <td><?php echo $value->bankname?></td>
                                                                      <td><?php echo $value->ifsccode?></td> 
                                                                      <td><?php echo $value->branchname?></td>
             <td>  <?php if($value->document=='')
                                    { ?>
                                        <p>No Document</p>
                                  <?php   }
                                  else
                                  { ?>
                                   <a target="_blank" style="<?php if($value->document=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/bank_details/'.$value->document)?>"  ><i class="icofont icofont-eye-alt"></i>&nbsp;&nbsp;View </a>
                                 <?php  }
                                    ?>

               


             </td>
                                                                  </tr>
                                                                   <?php } ?>
                                                                <!--   <tr>
                                                                    <th scope="row">Manager Name</th>
                                                                    <td>Siva sankar</td>
                                                                  </tr> -->

                                                              </tbody>
                                                          </table>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- info card end -->
                                    </div>
                                    <!-- tab pane info end -->
                                    <!-- tab pane contact start -->
                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                        <div class="row">

                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- contact data table card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Staff Details</h5>
                                                            </div>
                                                            <div class="card-block contact-details">
                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                    <table id="simpletable" class="table  table-striped table-bordered nowrap" >
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Staff Name</th>
                                                                                <th>Role</th>
                                                                                <th>Mobile no.</th>
                                                                                <th>Email</th>
                                                                                <!-- <th>Action</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
       <?php foreach ($getstaffdetails as $key => $value) {

                       ?>
         <tr>
             <td><?php echo "$value->name"?>
            <!--     <input type="text" class="form-control showprofile1" id="staffname" name="staffname"  value="<?php echo "$value->name"?>" readonly> -->
              <input type="hidden" class="form-control showprofile1" id="id" name="id"  value="<?php echo "$value->id"?>" >
          </td> 
             <td>
                <?php if($value->usertype=='4') 
             {
             echo "Account Manager";
             }
             elseif($value->usertype=='5')
               {
             echo "Delivery Manager";
             }
              elseif($value->usertype=='6')
               {
             echo "Basic Manager ";
             }
           ?>
          <!--     <input type="text" class="form-control" id="mobile" name="created_date" readonly 
                  value="<?php if($value->usertype=='4') 
             {
             echo "Account Manager";
             }
             elseif($value->usertype=='5')
               {
             echo "Delivery Manager";
             }
              elseif($value->usertype=='6')
               {
             echo "Basic Manager ";
             }
           ?>"> -->
       </td>
              <td><?php echo "$value->mobilenum"?>
              <!--   <input type="text" class="form-control showprofile1" id="mobilenum1" name="mobilenum1" readonly 
                  value="<?php echo "$value->mobilenum"?>">
 -->              </td>
              <td><?php echo "$value->email"?>
               <!--  <input type="email" class="form-control showprofile1" id="email1" name="email1" readonly  value="<?php echo "$value->email"?>"> -->
            </td>



  <!-- ==========dont remove commented div need for future use ========== -->

               <!-- <td class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
              <div class="dropdown-menu dropdown-menu-right b-none contact-menu" >
                  <a class="dropdown-item" id="editprofilefn1"><i class="icofont icofont-edit"></i>Edit Details</a>
                  <a class="dropdown-item" id="delete_staffdetail" onclick="delete_staffdetails()"><i class="icofont icofont-ui-delete"></i>Delete Visit</a>
                 <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                 <a class="dropdown-item" onclick="save_staffdetails()"><i class="fa fa-check"></i>Submit</a>

             </div>
                </td>
                           -->                                                  </tr>
                                                                          <?php } ?>
                                                                            
                                                                        </tbody>
                                                                       <!--  <tfoot>
                                                                          <tr>
                                                                              <th>Staff Name</th>
                                                                              <th>Contact Person</th>
                                                                              <th>Mobile no.</th>
                                                                              <th>Visit Details</th>
                                                                              <th>Action</th>
                                                                          </tr>
                                                                        </tfoot> -->
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- contact data table card end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab pane contact end -->
                                    <div class="tab-pane" id="review" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Documents</h5>
                                            </div>
                                          <div class="card-block">
                                              <div class="table-responsive">
                                                  <table class="table table-hover  table-borderless">
                                                      <thead>
                                                        <tr>

                                                        <th>Doc</th>
                                                        <th>Submitted Date</th>
                                                        <th>Document View</th>


                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>

                                                                  <div class="d-inline-block align-middle">
                                                                      <h6><?php echo $getuserdetails->document?></h6>
                                                                      <p class="text-muted m-b-0"></p>
                                                                  </div> 
                                                              </td>
                                                              <td><?php echo $getuserdetails->document_submited_date?></td>
                                                              <td> <button class="btn btn-danger"> <a  href="<?php echo admin_url('uploads/Doc1.pdf')?>"  target="_blank"><i class="icofont icofont-eye-alt"></i> </a></button></td>


                                                          </tr>
                                                         <!--  <tr>
                                                              <td>

                                                                  <div class="d-inline-block align-middle">
                                                                      <h6>Autherized Person</h6>
                                                                      <p class="text-muted m-b-0">Cirtificate of autorized person</p>
                                                                  </div>
                                                              </td>
                                                              <td>21/08/2020</td>
                                                              <td>
                                                                <button class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></button>
                                                              </td>


                                                          </tr> -->


                                                      </tbody>
                                                  </table>
                                                  <div class="text-center">
                                                      <a href="#!" class=" btn btn-primary">VERIFY</a>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>

<script>
    $('#editprofilefn').click(function(){
      $('.showprofile').removeAttr('readonly');
      $('#editbutton').addClass('hide');
       $('.savebutton').removeClass('hide');
        $('.choose-file').removeClass('hide');
        $('.previewbutton').addClass('hide');
    });


 function save_profiledetails() {
    var uid = $("#uid").val();
    var name = $("#name").val();
    var primary_contact_name = $('#primary_contact_name').val();
     var created_date = $("#created_date").val();
     var username = $("#username").val();
     var password = $("#password").val();
     var address = $("#address").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
     var website = $("#website").val();
    var authorizedperson = $("#authorizedperson").val();
    
    $(".error_msg").remove();
    var flag = 0;


    if (name == '') {
        flag = 1;
        $("#name").append("<span class='error_msg'> Name Required</span>");
    }
 //     if (primary_contact_name == '') {
 //        flag = 1;
 //        $("#primary_contact_name").append("<span class='error_msg'>Required</span>");
 //    }
 //     if (email == '') {
 //        flag = 1;
 //        $("#email").append("<span class='error_msg'>Required</span>");
 //    }
 //     if (mobile == "") {
 //        flag = 1;
 //        $("#mobile").append("<span class='error_msg'>Mobile Required</span>");
 //    }

 //    if (created_date == '') {
 //        flag = 1;
 //        $("#created_date").append("<span class='error_msg'>Required</span>");
 //    }
 // if (username == '') {
 //        flag = 1;
 //        $("#username").append("<span class='error_msg'>Required</span>");
 //    }
 // if (password == '') {
 //        flag = 1;
 //        $("#password").append("<span class='error_msg'>Required</span>");
 //    }


  
if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo base_url('webuser/User_management/update_supplierprofile')?>", {
            suppplierid: uid,             
            name: name,
            primary_contact_name: primary_contact_name,
            created_date: created_date,
            username: username,
            password: password,
            mobile: mobile,
            email: email,
            website: website,
            address: address,
            authorizedperson: authorizedperson,
             beforeSend: function() {
        // setting a timeout
       $("#overlay").fadeIn();
    },
          
           
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, 

        function(data) {
             alert(data);

             $('#savemicro').removeAttr("disabled");
            window.location.reload();
        

        });


    }


}


</script>
<!-- ----------mask unmask password -->
<script>
function viewpassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function viewemail() {
  var y = document.getElementById("email");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
<!-- end mask unmask password -->


<!-- edit staff details -->


<script>
    $('#editprofilefn1').click(function(){
      $('.showprofile1').removeAttr('readonly');
      
    });
  


 function save_staffdetails() {
    var uid = $("#uid").val();
    var id = $("#id").val();
    var staffname = $("#staffname").val();
    var mobile = $("#mobilenum1").val();
    var email = $("#email1").val();

    
    $(".error_msg").remove();
    var flag = 0;


    if (staffname == '') {
        flag = 1;
        $("#staffname").append("<span class='error_msg'> Name Required</span>");
    }


  
if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo base_url('webuser/User_management/update_staffdetails')?>", {
            suppplierid: uid, 
            id: id,            
            staffname: staffname,
            mobile:mobile,
            email:email,
           
             beforeSend: function() {
        // setting a timeout
       $("#overlay").fadeIn();
    },
          
           
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, 

        function(data) {
             alert(data);

             $('#savemicro').removeAttr("disabled");
            window.location.reload();
        

        });


    }
}

// delete staff details

$(document).on('click', '#delete_staffdetail', function() {
        var cnf = confirm("Are you sure to delete?"); 
        if (cnf) {
            var id = $("#id").val();
            $.post("<?php echo site_url('webuser/User_management/delete_staffdetails')?>", {
                id: id,
                      beforeSend: function() {
                      // setting a timeout
                     $("#overlay").fadeIn();
                  },
                 
             <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
            }, function(data) {
                alert(data);
               window.location.reload();

            });
        }
    });


</script>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- ----------save cancel button hide -->
  <style type="text/css">
   

.formdisplay {

  display: none;
}

.formButton {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
  </style>
  <script type="text/javascript">
    $(document).ready(function() {
    $(".editprofilefn").click(function() {
    $(".form1").toggle();
  });
});
  </script>

  

