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
                                        <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?= admin_url('user_management/suppliers') ?>">Supplier</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Supplier Profile</a>
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
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Supplier Info</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Bank Details</a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Documents</a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Staff Details</a>
                                            <div class="slide"></div>
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
                                                <h5 class="card-header-text">About Supplier</h5>
                                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
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
                                                                                        <td><?php echo "$getuserdetails->name"?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Contact Perosn</th>
                                                                                        <td><?php echo "$getuserdetails->primary_contact_name"?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Registered Date</th>
                                                                                        <td><?php echo "$getuserdetails->created_date"?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <th scope="row">Address</th>
                                                                                      <td>Test Address</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <th scope="row">Type</th>
                                                                                      <td><?php echo "$getuserdetails->user_type"?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <th scope="row">User Name</th>
                                                                                      <td><?php echo "$getuserdetails->username"?></td>
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
                                                                                        <td><a href="#!"><span class="__cf_email__" data-cfemail="4206272f2d02273a232f322e276c212d2f">[email&#160;protected]</span></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Mobile Number</th>
                                                                                        <td>(0123) - 4567891</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <th scope="row">Website</th>
                                                                                        <td><a href="#!">www.demo.com</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Total Applied Tenders</th>
                                                                                        <td>2</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Selected Applications</th>
                                                                                        <td>1</td>
                                                                                    </tr>
                                                                                      <tr>
                                                                                        <th scope="row">Password</th>
                                                                                        <td ><?php echo "$getuserdetails->password"?></td>
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
                                                                  <td>SBI444457857444</td>
                                                                </tr>
                                                                  <tr>
                                                                      <th scope="row"> Bank Name</th>
                                                                      <td>SBI</td>
                                                                  </tr>
                                                                  <tr>
                                                                      <th scope="row">IFSC</th>
                                                                      <td>IFSC00s354</td>
                                                                  </tr>
                                                                  <tr>
                                                                      <th scope="row">BRANCH </th>
                                                                      <td>TVM</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">Manager Name</th>
                                                                    <td>Siva sankar</td>
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

                                        <!-- info card end -->
                                    </div>
                                    <!-- tab pane info end -->
                                    <!-- tab pane contact start -->
                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                        <div class="row">

                                            <div class="col-xl-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- contact data table card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Staff Details</h5>
                                                            </div>
                                                            <div class="card-block contact-details">
                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                    <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Staff Name</th>
                                                                                <th>Role</th>
                                                                                <th>Mobile no.</th>
                                                                                <th>Email</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Vishnu</td>
                                                                                <td>Accounts</td>
                                                                                <td>9989988988</td>
                                                                                <td>abc@gmail.com</td>
                                                                                <td class="dropdown">
                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Add Details</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete Visit</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Rajesh</td>
                                                                              <td>Manager</td>
                                                                              <td>9989988988</td>
                                                                              <td>abc@gmail.com</td>
                                                                              <td class="dropdown">
                                                                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                  <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                      <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Add Details</a>
                                                                                      <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete Visit</a>
                                                                                      <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>

                                                                                  </div>
                                                                              </td>
                                                                            </tr>


                                                                        </tbody>
                                                                        <tfoot>
                                                                          <tr>
                                                                              <th>Visit Date</th>
                                                                              <th>Contact Person</th>
                                                                              <th>Mobile no.</th>
                                                                              <th>Visit Details</th>
                                                                              <th>Action</th>
                                                                          </tr>
                                                                        </tfoot>
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
                                                        <th>Submited Date</th>
                                                        <th>Document View</th>


                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>

                                                                  <div class="d-inline-block align-middle">
                                                                      <h6>GST Document</h6>
                                                                      <p class="text-muted m-b-0">GST Details</p>
                                                                  </div>
                                                              </td>
                                                              <td>21/08/2020</td>
                                                              <td><button class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></button></td>


                                                          </tr>
                                                          <tr>
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


                                                          </tr>


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
