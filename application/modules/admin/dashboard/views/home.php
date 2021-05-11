
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">

<<<<<<< HEAD

											<div class="col-xl-3 col-md-6" >
													<div class="card bg-c-green text-white" style="height :125px;">
                                                    <a href="<?php echo base_url('webuser/user_management/approved_suppliers');?>" style="color: white;">	<div class="card-block">
=======
                    <div class="col-xl-3 col-md-6" >
												<div class="card bg-c-green text-white" style="height :125px;">
                                                    <a href="<?php echo base_url('webuser/user_management/Pending_approvals');?>" style="color: white;">	
                                                    <div class="card-block">
>>>>>>> 8877153 (dashboard reg cards)
																	<div class="row align-items-center">
																			<div class="col">
																					<?php // $hic=getAfield('count(uid)',"web_users","where user_type=4 AND is_deleted=0 and river_id>0",'hcount'); ?>
																				<p class="m-b-6" style="display: inline-block; white-space: nowrap;overflow-x: auto; overflow-y: hidden;">Pending Approvals</p>
																					<h4 class="m-b-0"><?php echo $Pending_approvals; ?></h4>
																			</div>
																			<div class=" text-right">
																					<i class="feather icon-user f-50 text-c-green"></i>
																			</div>
																	</div>
															</div></a>
													</div>
											</div>

											<div class="col-xl-3 col-md-6" >
													<div class="card bg-c-green text-white" style="height :125px;">
                                                    <a href="<?php echo base_url('webuser/user_management/approved_registrations');?>" style="color: white;">	
                                                    <div class="card-block">
																	<div class="row align-items-center">
																			<div class="col">
																					<?php // $hic=getAfield('count(uid)',"web_users","where user_type=4 AND is_deleted=0 and river_id>0",'hcount'); ?>
																				<p class="m-b-6" style="display: inline-block; white-space: nowrap;overflow-x: auto; overflow-y: hidden;">Approved Registrations</p>
																					<h4 class="m-b-0"><?php echo $total_suppliers; ?></h4>
																			</div>
				 															<div class=" text-right">
																					<i class="feather icon-user f-50 text-c-green"></i>
																			</div>
																	</div>
															</div></a>
													</div>
											</div>
                                            





                                            <div class="col-xl-3 col-md-6" >
												<div class="card bg-c-green text-white" style="height :125px;">
                                                    <a href="<?php echo base_url('webuser/user_management/approved_suppliers');?>" style="color: white;">	
                                                    <div class="card-block">
																	<div class="row align-items-center">
																			<div class="col">
																					<?php // $hic=getAfield('count(uid)',"web_users","where user_type=4 AND is_deleted=0 and river_id>0",'hcount'); ?>
																				<p class="m-b-6" style="display: inline-block; white-space: nowrap;overflow-x: auto; overflow-y: hidden;">Approved Suppliers </p>
																					<h4 class="m-b-0"><?php echo $approved_suppliers; ?></h4>
																			</div>
																			<div class=" text-right">
																					<i class="feather icon-user f-50 text-c-green"></i>
																			</div>
																	</div>
															</div></a>
													</div>
											</div>
                                            <div class="col-xl-3 col-md-6" >
												<div class="card bg-c-green text-white" style="height :125px;">
                                                    <a href="<?php echo base_url('webuser/user_management/approved_contractors');?>" style="color: white;">	
                                                    <div class="card-block">
																	<div class="row align-items-center">
																			<div class="col">
																					<?php // $hic=getAfield('count(uid)',"web_users","where user_type=4 AND is_deleted=0 and river_id>0",'hcount'); ?>
																				<p class="m-b-6" style="display: inline-block; white-space: nowrap;overflow-x: auto; overflow-y: hidden;">Approved Contractors</p>
																					<h4 class="m-b-0"><?php echo $approved_contractors; ?></h4>
																			</div>
																			<div class=" text-right">
																					<i class="feather icon-user f-50 text-c-green"></i>
																			</div>
																	</div>
															</div></a>
													</div>
											</div>


                        <div class="col-xl-3 col-md-6"  >
                            <div class="card bg-c-yellow text-white " style="height :125px;">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                          <?php //$stations=getAfield('count(sid)',"station_master","where is_deleted=0",'stcount'); ?>
                                            <p class="m-b-5">Total Tenders</p>
                                            <h4 class="m-b-0"><?php echo $total_tenders; ?></h4>
                                        </div>
                                        <!-- <div class="col col-auto text-right"> -->
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-credit-card f-50 text-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink text-white" style="height :125px;">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <?php //$user=getAfield('count(uid)',"web_users","where uid>1 and user_type<4 AND is_deleted=0",'usersc'); ?>
                                            <p class="m-b-5">Active Tenders</p>
                                            <h4 class="m-b-0"><?php echo $active_tenders=$total_tenders-$completed_tenders; ?></h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-book f-50 text-c-pink"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-blue text-white " style="height :125px;" >
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Closed Tenders</p>


                                            <h4 class="m-b-0"><?php echo $completed_tenders; ?></h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-book f-50 text-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6"  >
                            <div class="card bg-c-yellow text-white " style="height :125px;">
                            <a href="<?php echo base_url('webuser/procurement/tenders');?>" style="color: white;">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                          <?php //$stations=getAfield('count(sid)',"station_master","where is_deleted=0",'stcount'); ?>
                                            <p class="m-b-5">Applied Tenders</p>
                                            <h4 class="m-b-0"><?php echo $total_tenders; ?></h4>
                                        </div>
                                        <!-- <div class="col col-auto text-right"> -->
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-credit-card f-50 text-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>



                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink text-white" style="height :125px;">
                            <a href="<?php echo base_url('webuser/procurement/tenders');?>" style="color: white;">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <?php //$user=getAfield('count(uid)',"web_users","where uid>1 and user_type<4 AND is_deleted=0",'usersc'); ?>
                                            <p class="m-b-5">Accepted PO </p>
                                            <h4 class="m-b-0"><?php echo $active_tenders=$total_tenders-$completed_tenders; ?></h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-book f-50 text-c-pink"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink text-white" style="height :125px;">
                            <a href="<?php echo base_url('webuser/procurement/tenders');?>" style="color: white;">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <?php //$user=getAfield('count(uid)',"web_users","where uid>1 and user_type<4 AND is_deleted=0",'usersc'); ?>
                                            <p class="m-b-5">Cancelled PO</p>
                                            <h4 class="m-b-0"><?php echo $active_tenders=$total_tenders-$completed_tenders; ?></h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-book f-50 text-c-pink"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>


<!-- new--------------------- -->
                                        <!-- new end------------------------------------- -->
           <!-- latest activity end -->
                    </div>
                </div>
            </div>

            <!--<div id="styleSelector">
              ENABLE IF WANT SELECION SETTINGS
            </div> -->
        </div>
    </div>
</div>
<!-- <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCO2SWfZY3BXBl9G53FgEXDkcjudJrdU&callback=initMap">
</script> -->
