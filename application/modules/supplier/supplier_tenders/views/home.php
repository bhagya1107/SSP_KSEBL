<style>
    .btn-primary {
        color: #fff;
        background-color: #1e315d;
        border-color: #ffcc33;
        ;
    }

    small {
        font-size: 12px;
        margin-top: 0px;
        vertical-align: top;
    }

    .tg-matchdate {
        padding: 0px;
        font: 25px/25px 'Oswald', Arial, Helvetica, sans-serif;
    }

    .tg-matchdate_custom {
        padding: 13px !important;
        font: 36px/36px 'Oswald', Arial, Helvetica, sans-serif;
    }

    .alert {
        margin-left: 7% !important;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    #overlay {
        position: fixed;
        top: 0;
        z-index: 99999;
        width: 100%;
        height: 100%;
        display: none;
        background: rgba(0, 0, 0, 0.6);
    }

    .tg-matchmetadata {
        width:130%;
    }

    .tg-ticket h4 {
        font-size: 20px;
        width:195%;
    }
 .appliedbuttons{
    margin: 1%;
} 
.alert{
    margin-left:0% !important;
}

    /* #tendertabs{
        position:fixed;
        top: 0;
        z-index: 99999;
    } */
    /* #drag-2 {
        margin-top: 12%;
        width: 100%;
    } */
</style>

<head>
    <link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\supplier\styles\supplierloader.css">
    <!-- <script src="<?= base_url() ?>assets/supplier_portal/js/vendor/jquery-library.js"></script> -->
    <script src="<?= base_url() ?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>



</head>

<main id="tg-main" class="tg-main tg-haslayout">
    <section class="tg-main-section tg-haslayout">

        <div id="alltendercount" class="<?php echo $tab == 1 ? "" : "hide" ?>" style="text-align:center;">
        </div>
        <div id="favtendercount" class="<?php echo $tab == 2 ? "" : "hide" ?>" style="text-align:center;"><span><b>Total Favourites Tenders:<?php echo count($getfavtender); ?></b></span>
        </div>
        <div id="applytedercount" class="<?php echo $tab == 3 ? "" : "hide" ?>" style="text-align:center;"><span><b>Total Applied Tenders:<?php echo count($appliedtenderdetails); ?></b></span>
        </div>

        <div class="container">
            <?php
            $msg = $this->session->flashdata('msg');
            if ($msg) {
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
       
            <div class="tg-section-name">
                <h2>Tenders</h2>
            </div>

            <div class="col-sm-11 col-xs-11 pull-right" style="overflow-y:scroll; overflow-x:hidden;height:100vh" id="innerscroll">
                <div id="overlay">
                    <div class="cv-spinner">
                        <span class="spinner"></span>
                    </div>
                </div>
                <?php if($tender =="") { ?>
  <div class="alert alert-danger" role="alert">
  Connection to kseb.his.in is Interupted
</div> 
                <ul class="nav nav-tabs" id="tendertabs">

                    <li id="alltender" class="<?php echo $tab == 1 ? "active" : "" ?>"><a id="tender_tab" data-toggle="tab" href="#home">Tenders</a></li>
                    <!-- <li class="<?php echo $tab == 4 ? "active" : "" ?>"><a data-toggle="tab" href="#menu3">Tenders</a></li> -->
                    <li id="favtender" class="<?php echo $tab == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Favourite Tenders</a></li>
                    <li id="applytender" class="<?php echo $tab == 3 ? "active" : "" ?>"><a data-toggle="tab" href="#menu2">Applied Tenders</a></li>
                </ul>
                <?php }  else {?>
                    <ul class="nav nav-tabs" id="tendertabs">

<li id="alltender" class="<?php echo $tab == 1 ? "active" : "" ?>"><a id="tender_tab" data-toggle="tab" href="#home">Tenders</a></li>
<!-- <li class="<?php echo $tab == 4 ? "active" : "" ?>"><a data-toggle="tab" href="#menu3">Tenders</a></li> -->
<li id="favtender" class="<?php echo $tab == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Favourite Tenders</a></li>
<li id="applytender" class="<?php echo $tab == 3 ? "active" : "" ?>"><a data-toggle="tab" href="#menu2">Applied Tenders</a></li>
</ul>
           <div class="tab-content">
                    <input type="hidden" id="usertypeid" value="<?php echo $user_type; ?>">

                    <input type="hidden" id="mytenderproducts" value="<?php echo htmlentities(json_encode($mytenderproducts), ENT_QUOTES, 'UTF-8') ?>" />
                    <input type="hidden" id="mytenderservices" value="<?php echo htmlentities(json_encode($mytenderservices), ENT_QUOTES, 'UTF-8') ?>" />
                    <div id="home" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>">
                        <div class="row" style="margin-top: 15px;">
                            <div class="tg-tickets">
                                <div class="commonfilter" id="alltenderdetails">

                                </div>
                                <!--  <span class="no-tender-alltender hide">No tender available</span>-->

                            </div>

                        </div>
                    </div>


                    <!-- <div id="menu3" class="tab-pane fade  <?php echo $tab == 4 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
							
							

							</div>
						</div>
					</div> -->



                    <div id="menu1" class="tab-pane fade <?php echo $tab == 2 ? "in active" : "" ?>">
                        <div class="row" style="margin-top: 15px;">
                            <div class="tg-tickets commonfilter" id="favid">
                            <?php foreach ($getAllfavtender as $favten) { ?>
                                    <div class="tg-ticket">

                                        <time class="tg-matchdate"><small>Last date</small><br><?php
                                                                                                $time = strtotime($favten['tenderdate']);
                                                                                                echo date('j  ', $time); ?>
                                            <span><?php $time = strtotime($favten['tenderdate']);

                                                    echo date('M ', $time); ?></span></time>

                                        <div class="tg-matchdetail">
                                            <div class='hiddendate' hidden><?php echo $favten['tenderdate'] ?></div>
                                            <span class="tg-theme-tag"><?php echo $favten['tenderno'] ?></span>
                                            <h4> <?php echo $favten['tendername'] ?></h4>
                                            </h4>
                                            <ul class="tg-matchmetadata">
                                                <li>
                                                    <address>Tender Description:<?php echo $favten['tenderauthority'] ?></address>
                                                </li>
                                            </ul>
                                        </div>
                                      <div class="tg-btnsbox">
                                            <a class="btn btn-primary btn-sm tenderdetails" style="#1e315d" onclick="myfavtenderdetails(<?php echo htmlentities(json_encode($tender), ENT_QUOTES, 'UTF-8') ?>,<?php echo $favten['tenderid'] ?>);" data-tender="<?php echo htmlentities(json_encode($tender), ENT_QUOTES, 'UTF-8'); ?>" data-toggle="modal" data-target="#tendermore">Read More</a>
                                        <?php if($favten['is_applied']) { ?>
                                            <a class="btn btn-success btn-sm" href="#">Applied </a>
                                          <?php } else { ?>

                                            <?php
                                            // checking if questions are mapped for this tender
                                            $disabled='';
                                            if(!in_array($favten['tenderid'],$savedformengines)) { 
                                                $disabled='disabled';
                                            }
                                            ?>
                                            <a class="btn btn-primary btn-sm" <?= $disabled;?> href="<?php echo base_url("supplier/tenders/apply/" . $favten['tenderid']) ?>">Apply </a>
                                         
                                        <?php  } ?> 
                                        </div> 
                                    </div>

                                <?php } ?>

                            </div>

                            <span class="no-tender-fav hide">No tender available</span>
                        </div>
                        <!-- <span style="text-align:center;"> Total No of Favourite Tender count:<?php echo count($getfavtender); ?></span> -->

                    </div>
                    <div id="menu2" class="tab-pane fade <?php echo $tab == 3 ? "in active" : "" ?>">
                        <div class="row" style="margin-top: 15px;">
                            <div class="tg-tickets commonfilter" id="appliedtickets">
                                <?php foreach ($appliedtenderdetails as $appliedtenders) {
                                    
                                    // print_r($appliedtenders);exit;
                                    ?>
                                    <div class="tg-ticket">

                                        <time class="tg-matchdate"><small>Last date</small><br><?php
                                                                                                $time = strtotime($appliedtenders->tender_date);
                                                                                                echo date('j  ', $time); ?>
                                            <span><?php $time = strtotime($appliedtenders->tender_date);

                                                    echo date('M ', $time); ?></span></time>

                                        <div class="tg-matchdetail">
                                            <div class='hiddendate' hidden><?php echo $appliedtenders->tender_date ?></div>
                                            <span class="tg-theme-tag"><?php echo $appliedtenders->tender_num ?></span>
                                            <h4> <?php echo $appliedtenders->tender_title ?></h4>
                                            </h4>
                                            <ul class="tg-matchmetadata">
                                                <li>
                                                    <address>Tender Description:<?php echo $appliedtenders->tender_description; ?></address>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tg-btnsbox appliedbuttons">
                                            <a class="btn btn-primary btn-sm tenderdetails" style="#1e315d" onclick="myfavtenderdetails(<?php echo htmlentities(json_encode($tender), ENT_QUOTES, 'UTF-8') ?>,<?php echo $appliedtenders->id ?>);" data-tender="<?php echo htmlentities(json_encode($tender), ENT_QUOTES, 'UTF-8'); ?>" data-toggle="modal" data-target="#tendermore">Read More</a>
                                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tenderstatus" onclick="tenderstatus()" id="tender">Tender Status </a>
                                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#paymentstatus">Payment Status </a>
                                            <a class="btn btn-primary btn-sm" id="application_form" ids="<?= $appliedtenders->id; ?>">Application Form </a>
                                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#siteinspect">Factory Visit </a>

                                        </div>
                                    </div>

                                <?php } ?>
                                <div class="tg-btnsbox">

                                </div>
                            </div>


                        </div>
                        <span class="no-tender-apply hide">No tender available</span>
                    </div>

                </div>

            </div>



        </div>
        </div>

    </section>
</main>
<!-- <button id="buttonscroll" class="scroltop" onclick="window.scrollTo(0, 0);" style="display: inline-block;"><i class=" fa fa-arrow-up"></i></button> -->
<!-- Modal -->
<div class="modal fade" id="myModal" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clarifications</h4>
                <a href="#" class="gx-fab-btn gx-btn-primary position-absolute addButtonCustom" data-toggle="modal" id="add" data-target="#Service">
                    <i class="zmdi zmdi-plus-circle zmdi-hc-2x" style="margin-left:480px; border-color: #ffcc33;"></i>
                </a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="questions"></span></h4>
                <div class="table-responsive">

                    <table id="questions" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">questions</th>
                                <th scope="col">reply</th>
                                <th scope="col">status</th>
                                <th scope="col">Post Date</th>

                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Annual production rate</td>
                            <td></td>
                            <td>Pending</td>
                            <td>13-11-2020</td>


                        </tr>
                        </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>



<!------------------------Site Inspections------------------------------------------------------->

<div class="modal fade" id="siteinspect" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">PreDispatch Investigation</h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                <div class="table-responsive">

                    <table id="siteins" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Inspection Date</th>
                                <th scope="col">Inspection Fee</th>
                                <th scope="col">Pay Fee</th>


                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>13-11-2020</td>
                            <td>2500</td>
                            <td><button data-toggle="modal" data-target="#Payment" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">Pay</button></td>


                        </tr>
                        </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<!-------------------------SiteInspection End---------------------------------------------------->
<div class="modal fade" id="Payment">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Payment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Pay Amount</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="payamount" placeholder="Add fee amount">
                        </div>
                    </div>

                    <input type="hidden" name="pay" id="pay">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" style="margin-right: 252px;" class="btn btn-primary" onclick="tenderpayamount()">Submit</button>
            </div>

        </div>
    </div>
</div>
<!---------------------------------------tender status-------------------------------------------------->
<div class="modal fade" id="tenderstatus">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Tender Status</h4>
                <h4 class="modal-title" id="adding"></h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Your Tender Status is active on 17-11-2020
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>

<!-------------------------------tender status end------------------------------------------->
<!------------------------------Payment status---------------------------------------------->
<div class="modal fade" id="paymentstatus">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="payment">Payment Status</h4>
                <h4 class="modal-title" id="payment"></h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Your Payment Status is in Pending Process
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
<!------------------------------payment end------------------------------------------------>

<!--------------------------------------------------clarifications----------------------------------------->



<div class="modal fade" id="Servissce" style="z-index:999999!important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Clarifications</h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">


                    <div class="modal-body">
                        <form id="questions_form">
<!-- 
                            <div class="form-group row">
                                <label for="comment" class="col-md-2 col-sm-3 control-label">Questions</label>
                                <div class="col-md-10 col-sm-9" id="commentquestionid">
                                    <textarea class="form-control" id="questionidclarifictn" readonly value="Use of MRO Supply in Business Type?">Use of MRO Supply in Business Type?</textarea>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="comment" class="col-md-2 col-sm-3 control-label">Comment</label>
                                <div class="col-md-10 col-sm-9" id="commentques">
                                    <textarea class="form-control" id="questioncomment" cols="4" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="comment" class="col-md-2 col-sm-3 control-label">File Upload</label>
                                <div class="col-md-10 col-sm-9" id="commentfileupload">
                                    <input type="file" id="nofilequestion">
                                </div>
                            </div>

                            <input type="hidden" name="questionid" id="questionid">

                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="ClarificationsTender()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>

            </div>
        </div>
    </div>
</div>

<!---------------------------------------tender status-------------------------------------------------->
<div class="modal fade" id="tendermore">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="adding" style="color:navy;">Tender Details</h3>
                <h4 class="modal-title" id="adding"></h4>

            </div>

            <!-- Modal body -->

            <div class="modal-body" id="tenderdetails">

            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
            <!--<?php //} 
                ?>-->
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------->
<script>
    function myfavtenderdetails(tender, favtenderid) {

        var getfavdetails = tender.filter(function(obj) {
            if (obj.id == favtenderid) {
                return obj;
            }
        });
        mytenderdetails(getfavdetails[0]);
    }

    function tenderstatus(tender, favtenderid) {

        var getfavdetails = tender.filter(function(obj) {
            if (obj.id == favtenderid) {
                return obj;
            }
        });
       mytenderdetails(getfavdetails[0]);

    }



    function save_tenders(tenders) {
        //console.log(tenders);
        $.post("<?php echo site_url('supplier/tenders/insert_favtenders') ?>", {

            title: tenders.id,
            tender_date: tenders.tender_date,
            tender_num: tenders.tender_num,
            tendering_authority: tenders.tendering_authority,

            <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
        }, function(data) {
            //alert(data);
            window.location.reload();
        });
    }

    function mytenderdetails(tenderdetail) {

        // var tenderdetails =   Object.keys(tenderdetail); 
        // console.log("kkkk");
      //  console.log(tenderdetails);
        var tenderopendetails = tenderdetail.prc_tender_opening_dtls;
        var tenderprocurementprocess = tenderdetail.prc_procurement_process;
        var tenderschedules = tenderdetail.prc_tender_schedules;
        var tenderequestions = tenderdetail.prc_requestions;
        var tenderclosing = tenderdetail.prc_tender_closing;
        var tendertechnicalevaluations = tenderdetail.prc_tender_technical_evaluations;
        var corrigendumdocuments = tenderdetail.prc_corrigendum_documents;
        var tenderprocurementdetails = tenderdetail.prc_procurement_process_dtls;
        var tenderpricebidopenings = tenderdetail.prc_tender_price_bid_openings;
        var tenderpurchasedetails = tenderdetail.prc_purchase_orders;
        var tenderdeliverydetails = tenderdetail.prc_proposed_delivery_details;
        var tendermdcc = tenderdetail.prc_mdccs;

        var html = "<div id='prc_general_dtls'>";

        html += "<b><h5 style='color:orange;'>TENDER GENERAL DETAILS</h5><b>" +
            "<label>Bid Opening Date:" + tenderdetail.bid_opening_date + "</label>" +
            " <label>Bid Closing Date:" + tenderdetail.bid_closing_date + "</label>" +
            " <label>Bid Cost:" + tenderdetail.bid_cost + "</label>" +
            " <label>Bid Submission Fee:" + tenderdetail.bid_submision_fee + "</label>" +
            " <label>Bid Validity Period Days:" + tenderdetail.bid_validity_period_days + "</label>" +
            " <label>Emd Amount:" + tenderdetail.emd_amount + "</label>";

        html += "</div>";


        html += "<div id='basicprocurementprocess'>";

        html += "<b><h5 style='color:orange;'>TENDER PROCUREMENT PROCESS </h5><b>" +
            " <label>Job Assigned To:" + tenderprocurementprocess.job_assigned_to + "</label>" +
            " <label>Job Assigned Date:" + tenderprocurementprocess.job_assigned_date + "</label>";


        html += "</div>";

        html += "<div id='prc_procurement_process_dtls'>";
        tenderprocurementdetails.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER PROCUREMENT PROCESS DETAILS</h5><b>" +
                "<label>procurement process Id:" + item.prc_procurement_process_id + "</label>" +
                " <label>warranty period in month:" + item.warranty_period_in_month + "</label>" +
                " <label>Purchase quantity:" + item.purchase_quantity + "</label>";
        })
        html += "</div>";



        html += "<div id='basicprocessdetails'>";
        tenderschedules.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER SCHEDULE DETAILS</h5><b>" +
                " <label>Tender Uploading Date:" + item.proposed_tender_uploading_date + "</label>" +
                " <label>Tender Opening Date:" + item.proposed_tender_opening_date + "</label>" +
                " <label>Proposed Date:" + item.proposed_clarification_date + "</label>" +
                " <label>Proposed Note Date:" + item.proposed_pq_note_date + "</label>" +
                " <label>Proposed fa Date:" + item.proposed_note_to_fa_date + "</label>" +
                " <label>Price Bid Opening Date:" + item.proposed_price_bid_opening_date + "</label>" +
                " <label>Pc Note:" + item.proposed_pc_note + "</label>" +
                " <label>PO Date:" + item.proposed_po_date + "</label>" +
                " <label>Inspection Date:" + item.proposed_inspection_date + "</label>" +
                " <label>MDCC Date:" + item.proposed_mdcc_date + "</label>";

        })
        html += "</div>";

        html += "<div id='basicrequestions'>";
        tenderequestions.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER REQUESTIONS DETAILS</h5><b>" +
                " <label>Scheme Name:" + item.scheme_name + "</label>" +
                " <label>Scheme Id:" + item.mst_scheme_id + "</label>" +
                " <label>Fin Year Name:" + item.fin_year_name + "</label>" +
                " <label>Display Name:" + item.disp_name + "</label>" +
                " <label>Requestion Order Number:" + item.requesition_order_num + "</label>" +
                " <label>Requistion Authority:" + item.requisition_authority + "</label>" +
                " <label>Job Assigned To:" + item.job_assigned_to + "</label>" +
                " <label>Material Name:" + item.material_name + "</label>" +
                " <label>Total Quantity:" + item.total_quantity + "</label>" +
                " <label>Total PAC Amount:" + item.total_pac_amount + "</label>" +
                " <label>Procurement Office Id:" + item.point_of_procurement_office_id + "</label>" +
                " <label>Procurement Status Description:" + item.procurement_status_descr + "</label>";

        })
        html += "</div>";


        html += "<div id='basicopeningdetails'>";
        tenderopendetails.forEach(function(item, index) {
            html += "<b><h5 style='color:orange;'>TENDER OPENING DETAILS</h5><b>" +
                " <label>Tender Opening Id:" + item.prc_tender_opening_id + "</label>" +
                " <label>Vendor Name:" + item.vender_name + "</label>" +
                "<label>Vender Address:" + item.vender_address + "</label>" +
                "<label>Factory Inspection Flag:" + item.factory_inspection_flag + "</label>";

        })
        html += "</div>";



        html += "<div id='basicclosingdetails'>";
        tenderclosing.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER CLOSING DETAILS</h5><b>" +
                " <label>Tender Closing Type:" + item.tender_closing_type + "</label>" +
                " <label>Tender Closing Date:" + item.date_of_closing + "</label>"

            ;

        })
        html += "</div>";

        html += "<div id='basictechnicalevaluations'>";
        tendertechnicalevaluations.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER TECHNICAL EVALUATIONS</h5><b>" +
                " <label>Tender Opening Detail:" + item.prc_tender_opening_dtl_id + "</label>" +
                " <label>Is Qualified:" + item.is_qualified + "</label>"

            ;

        })
        html += "</div>";

        html += "<div id='basiccorrigendumdoc'>";
        corrigendumdocuments.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER CORRIGENDUM DOCUMENTS</h5><b>";

        })
        html += "</div>";


        html += "<div id='prc_mdcc_dtls'>";
        tendermdcc.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER MDCC DETAILS</h5><b>";

        })
        html += "</div>";

        html += "<div id='prc_tenderpricebidopenings'>";
        tenderpricebidopenings.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER PRICE BID OPENINGS</h5><b>" +
                "<label>Tender Id:" + item.prc_tender_id + "</label>" +
                " <label>Date Of Price Bid:" + item.date_of_price_bid_opening + "</label>" +
                " <label>Represented By:" + item.represented_by + "</label>" +
                " <label>Approved By:" + item.approved_by + "</label>" +
                " <label>Amount:" + item.amount + "</label>" +
                " <label>Deleted:" + item.deleted_at + "</label>";
        })
        html += "</div>";

        html += "<div id='prc_tenderpurchasedetails'>";
        tenderpurchasedetails.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER PURCHASE ORDERS</h5><b>" +
                "<label>Purchase Number:" + item.puchase_order_number + "</label>" +
                " <label>Purchase Area Type:" + item.purchase_area_type + "</label>" +
                " <label> Issue Ofc Code:" + item.issue_ofc_code + "</label>" +
                " <label>Surplus Purchase Percentage:" + item.surplus_purchase_percentage + "</label>" +
                " <label>Issue office id:" + item.issue_office_id + "</label>";

        })
        html += "</div>";

        html += "<div id='prc_tenderDeliverydetails'>";
        tenderdeliverydetails.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>TENDER DELIVERY DETAILS</h5><b>" +
                " <label>Material Id:" + item.mst_material_id + "</label>" +
                "<label>Material Name:" + item.material_name + "</label>" +
                " <label>Proposed Quantity:" + item.proposed_quantity + "</label>" +
                " <label> Description:" + item.description + "</label>" +
                " <label>Office code:" + item.office_code + "</label>";


        })
        html += "</div>";

        //console.log(html);
        $('#tenderdetails').html(html);
    }
</script>


<!-- km updates -->
<script>
    $(document).ready(function() {

        $('#application_form').click(function(e) {
            // alert();

            e.preventDefault();
            
            $tenderid=$(this).attr('ids');
            //formData = {tenderid : '8'};

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>supplier/tenders/getApplicationForm',
                data: {
                    "tenderid": $tenderid,
                },
                type: 'POST',
                // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                // processData: false, // NEEDED, DON'T OMIT THIS
                success: function(result) {
                   // console.log(result);
                    data = JSON.parse(result);
                    $('#dataAppend').html(data);
                    $('#preview_modal').modal();

                }
            });
        });
    });
</script>


<div class="modal fade" id="preview_modal">
    <div class="modal-dialog custom-modal">
        <div class="modal-content" style="overflow-y:auto">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="payment">Preview Of Application Form</h4>
                <h4 class="modal-title" id="payment"></h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body" style="padding:unset;overflow-wrap: break-word;"><br>
            <div style="margin:2%;"><b>TENDER NUM:<?php echo $appliedtenders->tender_num ?></b></div><br>
                <div id="dataAppend"></div>

            </div>

            <div class="clearfix" style="margin:13%;"></div>
            <hr>
            <div class="modal-footer" style="position:absolute;bottom:0px;float:right;right:0;border:none">
                <button type="button" class="btn btn-warning" id="clarificationmodal" data-toggle="modal" onclick="clarificationpopup()" data-target="#Servissce">Clarifications</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>



    </div>


</div>
<?php } ?>

<style>
    /* @media (min-width: 576px){
                 .modal-content  {
					max-width: 80%;
					margin: 1.875rem auto;
				}
				} */
</style>
<script>
    var usertype = $("#usertypeid").val();
    $(document).ready(function() {

        if (usertype == '2') {
            getMyservices(true);
        } else {
            getMytenders(true);
        }
        changeTenderTye(true);
        universaltendersearch();
        showcountnavbar();
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });

    function showcountnavbar() {
        $(".nav-tabs a").click(function() {
            var activetab = $(this).parent().attr('id');

            //console.log(activetab);
            if (activetab == 'favtender') {
                $('#favtendercount').removeClass('hide');
                $('#alltendercount').addClass('hide');
                $('#applytedercount').addClass('hide');
            } else if (activetab == 'applytender') {
                $('#applytedercount').removeClass('hide');
                $('#alltendercount').addClass('hide');
                $('#favtendercount').addClass('hide');
            } else {
                $('#alltendercount').removeClass('hide');
                $('#applytedercount').addClass('hide');
                $('#favtendercount').addClass('hide');
            }


        });
    }

    function universaltendersearch() {

        $("#keywordtender").on("keyup", function() {
            var activetab = $("#tendertabs li.active").attr('id');
            var tabcontentid = (activetab == 'favtender') ? 'favid' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
            //var tabcontentid = $("#alltenders");
            var value = $(this).val().toLowerCase();

            filtertenderdata(tabcontentid, value);

        });

    }

    function filtertenderdata(tabcontentid, value) {

        var activetab = $("#tendertabs li.active").attr('id');
        $(".commonfilter div[class!=tg-btnsbox]").filter(function() {

            var datetime1 = $(this).attr('datetime');
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });

        $('.hiddendate').addClass('hide');
        var spanid = (activetab == 'favtender') ? 'no-tender-fav' : (activetab == 'applytender') ? 'no-tender-apply' : 'no-tender-alltender'
        var activetab1 = $("#tendertabs li.active").length;
        var tenderlength = $("#"  + tabcontentid + " .tg-ticket[style!='display: none;']").length;
        favtender
        applytender
        console.log(tenderlength);
        var tendercountdiv = (activetab == 'favtender') ? 'favtendercount' : (activetab == 'applytender') ? 'applytedercount' : 'alltendercount'

        if (tenderlength == 0) {
            $('.' + spanid).removeClass('hide');
            span1 = "<span><b>No Tenders Available </b></span>";
            $("#" + tendercountdiv).html(span1);
        } else {
            $('.' + spanid).addClass('hide');
            span1 = "<span><b>Total Tenders:" + tenderlength +  "</b></span>";
            $("#" + tendercountdiv).html(span1);
        }

    }

    $(".filterclass").on("change", function() {

        var activetab = $("#tendertabs li.active").attr('id');
        var tabcontentid = (activetab == 'favtender') ? 'favid' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
        datefilters();
    });

    $("#datepicker").on("change", function() {
        var activetab = $("#tendertabs li.active").attr('id');
        var tabcontentid = (activetab == 'favtender') ? 'favid' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
        var value = $(this).val();
        filtertenderdata(tabcontentid, value);
    });

    $(function() {
        $('#datepicker').datepicker({
            autoSize: true,
            onSelect: function(dateText, inst) {
                $(this).parent('#datepicker').submit();
            }
        });
    });

    function changeTenderTye() {

        $('#tenderType').on('change', function() {
            var type = $('#tenderType').val();
            if (type == 'all') {
                $('#tender_tab').text('All Tenders');
                LoadAllTenders(true);
            } else if (type == 'products') {
                $('#tender_tab').text('Tenders');
                getMytenders(true);
            } else if (type == 'services') {
                $('#tender_tab').text('Tenders');
                getMyservices(true);
            }
            setTimeout(function() {
                var activetab = $("#tendertabs li.active").attr('id');
                var tabcontentid = (activetab == 'favtender') ? 'favid' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
                var value = $('#keywordtender').val().toLowerCase();
                datefilters();
                filtertenderdata(tabcontentid, value);
            }, 5500);

        });


    }

    function LoadAllTenders(overlay) {

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/tenders/getAAlltendersApi',
            type: 'POST',
            // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            // processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function() {
                if (overlay) {
                    // setting a timeout
                    $("#overlay").fadeIn();
                }
            },
            success: function(result) {

                datas = JSON.parse(result);
                var count = datas.length;
                if (count > 0) {
                    span1 = "<span><b>Total Tenders:" + count + "</b></span>";
                } else {
                    span1 = "<span>No Tender To Display </span>";
                }
                $('#alltendercount').html(span1);
                html = "";
                $.each(datas, function(i, data) {
                    //console.log(data.sorting);

                    html += "<div class='tg-ticket'><time class='tg-matchdate' ><small>Last date</small><br>";
                    var date1 = new Date(data.tender_date);
                    html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
                    html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data.tender_num + "</span><h4>" + data.tender_title + "</h4></h4>";
                    html += "<div class='hiddendate' hidden >" + data.tender_date + "</div>";
                    html += "<ul class='tg-matchmetadata'><li><address>Tender Description:" + data.tender_description + " </address></li></ul></div>";

                    html += "<div class='tg-btnsbox' style='margin-top:11px;'><a class='btn btn-primary btn-sm tenderdetails' style='#1e315d' onclick='mytenderdetails(" + JSON.stringify(data) + ")' data-tender='" + JSON.stringify(data) + "' data-toggle='modal' data-target='#tendermore'>Read More</a>";

                    if (data.sorting == 0) {
                        html += "<a class='btn btn-primary btn-sm' id='save_tenders' onclick='save_tenders(" + JSON.stringify(data) + ")'>Add to Favourites</a>";
                    } else {
                        html += "<a class='btn btn-success btn-sm' >Added to Favourites </a>";
                    }

                    html += "</div></div>";

                });
                $('#alltenderdetails').empty().append(html);
            },
            complete: function() {
                if (overlay) {
                    $("#overlay").fadeOut();
                }
            },
        });


    }
    <?php if($countpurchaseorder =="") { ?>
  <div class="alert alert-danger" role="alert">
  <?php echo api_error_message(); ?>
</div> 
<?php }  else {?> 
    function getMytenders(overlay) {


        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/tenders/getProductTender',
            type: 'POST',
            // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            // processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function() {
                // setting a timeout
                if (overlay) {
                    console.log(overlay);
                    $("#overlay").fadeIn();
                }
            },
            success: function(result) {
                datas = JSON.parse(result);
                var count = datas.length;
                if (count > 0) {
                    span1 = "<span><b>Total Tenders:" + count + "</b></span>";
                } else {
                    span1 = "<span>No Tender To Display </span>";
                }
                $('#alltendercount').html(span1);
                buildmytenders(datas);
            },
            complete: function() {
                if (overlay) {
                    $("#overlay").fadeOut();
                }
            },
        });
    }
    <?php }?>

    function datefilters() {
        var results = [];
        var fromDate = $("#datepickerfrom").val();
        var toDate = $("#datepickerto").val();
        if (fromDate || toDate) {
            console.log(fromDate);
            console.log(toDate);
            results = datas.filter(function(value, key) {
                if (toDate != '') {
                    if (value['tender_date'] >= fromDate && value['tender_date'] <= toDate) {
                        return value;
                    }
                } else {
                    if (value['tender_date'] == fromDate)
                        return value;

                }
            });

            buildmytenders(results);

        } else {
            buildmytenders(datas);
        }
        var activetab = $("#tendertabs li.active").attr('id');
                var tabcontentid = (activetab == 'favtender') ? 'favid' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
                var value = $('#keywordtender').val().toLowerCase();
                
                filtertenderdata(tabcontentid, value);
    }


    function buildmytenders(datas) {
        html = "";
        $.each(datas, function(i, data) {

            html += "<div class='tg-ticket'><time class='tg-matchdate' ><small>Last date</small><br>";
            var date1 = new Date(data.tender_date);
            html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
            html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data.tender_num + "</span><h4> " + data.tender_title + "</h4></h4>";
            html += "<div class='hiddendate' hidden >" + data.tender_date + "</div>";
            html += "<ul class='tg-matchmetadata'><li><address>Tender Description:" + data.tender_description + " </address></li></ul></div>";

            html += "<div class='tg-btnsbox' style='margin-top:11px;'><a class='btn btn-primary btn-sm tenderdetails' style='#1e315d' onclick='mytenderdetails(" + JSON.stringify(data) + ")' data-tender='" + JSON.stringify(data) + "' data-toggle='modal' data-target='#tendermore'>Read More</a>";

            if (data.sorting == 0) {
                html += "<a class='btn btn-primary btn-sm' id='save_tenders' onclick='save_tenders(" + JSON.stringify(data) + ")'>Add to Favourites</a>";
            } else {
                html += "<a class='btn btn-success btn-sm' >Added to Favourites </a>";
            }

            html += "</div></div>";
        });
        $('#alltenderdetails').empty().append(html);
    }



    function getMyservices(overlay) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/tenders/getProductServices',
            type: 'POST',
            // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            // processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function() {
                // setting a timeout
                if (overlay) {
                    $("#overlay").fadeIn();
                }
            },
            success: function(result) {

                datas = JSON.parse(result);
                var count = datas.length;
                console.log(datas);
                console.log(count);
                if (count > 0) {
                    span1 = "<span><b>Total Tenders:" + count + "</b></span>";

                } else {
                    span1 = "<span> No Tender To Display </span>";
                }
                $('#alltendercount').html(span1);

                html = "";

                // var mytenderservices = JSON.parse($('#mytenderservices').val());
                console.log(mytenderservices);
                $.each(datas, function(i, data) {
                    console.log(data);
                    html += "<div class='tg-ticket'><time class='tg-matchdate' ><small>Last date</small><br>";
                    var date1 = new Date(data.tender_date);
                    html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
                    html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data.tender_num + "</span><h4>TENDER " + data.tender_title + "</h4></h4>";
                    html += "<div class='hiddendate' hidden >" + data.tender_date + "</div>";
                    html += "<ul class='tg-matchmetadata'><li><address>Tender Description:" + data.tender_description + " </address></li></ul></div>";

                    html += "<div class='tg-btnsbox' style='margin-top:11px;'><a class='btn btn-primary btn-sm tenderdetails' style='#1e315d' onclick='mytenderdetails(" + JSON.stringify(data) + ")' data-tender='" + JSON.stringify(data) + "' data-toggle='modal' data-target='#tendermore'>Read More</a>";

                    if (data.sorting == 0) {
                        html += "<a class='btn btn-primary btn-sm' id='save_tenders' onclick='save_tenders(" + JSON.stringify(data) + ")'>Add to Favourites</a>";
                    } else {
                        html += "<a class='btn btn-success btn-sm' >Added to Favourites </a>";
                    }

                    html += "</div></div>";
                });
                $('#alltenderdetails').empty().append(html);
            },
            complete: function() {
                if (overlay) {
                    $("#overlay").fadeOut();
                }
            },
        });
    }


    setInterval(() => {
        var type = $('#tenderType').val();
        console.log('rintrval');
        console.log(type);
        if (type == 'all') {
            LoadAllTenders();
            console.log('reload api');
        } else if (type == 'products') {
            getMytenders(false);
            console.log('reload api');
        } else if (type == 'services') {
            getMyservices(false);
        }
    }, 10000000);


    function myFunction($month_dat) {
        var month = new Array();
        month[0] = "JAN";
        month[1] = "FEB";
        month[2] = "MAR";
        month[3] = "APR";
        month[4] = "MAY";
        month[5] = "JUN";
        month[6] = "JUL";
        month[7] = "AUG";
        month[8] = "SEP";
        month[9] = "OCT";
        month[10] = "NOV";
        month[11] = "DEC";

        var d = new Date();
        return month[$month_dat];
        //document.getElementById("demo").innerHTML = n;
    }

    function tenderpayamount() {
       
    var payamount = $("#payamount").val();
    $(".error_msg").remove();
    var flag = 0;

    if (payamount == '') {
        flag = 1;
        $("#payamount").append("<span class='error_msg'>Pay Amount Required</span>"); 
    }
	
    if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo site_url('supplier/tenders/post_payAmount')?>", { 

            payamount: payamount,
            tenderId: tenderId,
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, function(data) {
			 // alert(data);
             $('#savemicro').removeAttr("disabled");
			window.location.reload();

        });

    }
}

function ClarificationsTender() {
       
       var questionidclarifictn = $("#questionidclarifictn").val();
       var filequestion = $("#nofilequestion").val();
       var questioncomment = $("#questioncomment").val();
       $(".error_msg").remove();
       var flag = 0;
    
       if (flag == 0) {
   
           $("#savemicro").prop("disabled", true);
           var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
               csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
   
           $(".ajaxLoader").css("display", "block");
           $.post("<?php echo site_url('supplier/tenders/post_clarifications')?>", { 
   
            questionidclarifictn: questionidclarifictn,
            filequestion: filequestion,
            questioncomment: questioncomment,
               <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
           }, function(data) {
                // alert(data);
                $('#savemicro').removeAttr("disabled");
               window.location.reload();
   
           });
   
       }
   }
 
function clarificationpopup()
{

    $('#preview_modal').modal('hide');  
}

</script>

