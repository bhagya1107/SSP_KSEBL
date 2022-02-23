<script src="<?= base_url() ?>assets/supplier_portal/js/vendor/jquery-library.js"></script>
<script src="<?= base_url() ?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>
<link rel="stylesheet" href="collapsible.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="collapsible.js"></script>
<script src="<?php echo base_url(); ?>DataTables-1.10.21/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>DataTables-1.10.21/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\supplier\styles\supplierloader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css " rel="stylesheet">
<link href="<?php echo base_url(); ?>DataTables-1.10.21/css/dataTables.bootstrap4.css" rel="stylesheet">
<style>
    /* horizondal scroll bar */
    @media screen and (max-width: 767px) {
        div.scrollmenu {

            overflow: auto;
            white-space: nowrap;
        }

        .tg-tickets {
            width: 250%;
            float: left;
        }

        .tg-ticket {
            width: 250%;
            float: left;
            padding: 20px;
            background: #f7f7f7;
            /* km */
            box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
            border-color: rgba(223, 225, 229, 0);
        }
    }

    /* horizondal scroll bar end */
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
        padding: 17px;
        font: 25px/25px 'Oswald', Arial, Helvetica, sans-serif;
    }

    .tg-matchdate_custom {
        padding: 13px !important;
        font: 36px/36px 'Oswald', Arial, Helvetica, sans-serif;
    }

    .alert {
        margin-left: 10% !important;
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

    .tg-btn {
        left: 45%;
    }

    .tg-tickets h4 {
        width: 180%;
    }

    .tg-ticket h4 {
        width: 180%;
    }

    /* #tg-main{
        margin-top: 12%;
     }  */

    .maintable>tbody>tr>td {
        border: none !important;
        text-align: left;
    }

    .widthAdjust {
        max-width: 1000px;
        width: 100%;
    }

    .splitbutton {
        background-color: #1f4056;
    }

    .dropbtn {
        background-color: #4465bf;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        margin-left: 179px;
    }



    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .mydropdown {
        color: aqua;
    }


    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #4465bf;
    }

    .show {
        display: block;
    }

    /* .collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
} */

    .active,
    .collapsible:hover {
        /* background-color: #555; */
    }

    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }

    .fa-print,
    .fa-download,
    .fa-file-o,
    .fa-file {
        color: #504c7e;
    }

    .fa-print:hover,
    .fa-download:hover,
    .fa-file-o:hover,
    .fa-file:hover {
        color: #9089e2 !important;
    }
</style>

<main id="tg-main" class="tg-main tg-haslayout">
    <section class="tg-main-section tg-haslayout">
        <?php if ($purchaseorder == "") { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo api_error_message(); ?>
                <!-- Connection to kseb.his.in is Interupted -->
            </div>
            <div id="allpurchasecount" style="text-align:center;">
            </div>
            <div id="acceptedpurchasecount" class="hide" style="text-align:center;">
            </div>

            <div id="workpurchasecount" class="hide" style="text-align:center;">
            </div>
            <div class="container">
                <div class="tg-section-name">
                    <h2>Purchase Orders</h2>
                </div>

                <?php $user_type = $this->session->userdata('user_type'); ?>
                <div class="col-sm-11 col-xs-11 pull-right scrollmenu" style="overflow-y:scroll; " id="innerscroll">


                    <ul class="nav nav-tabs" id="purchasetabs">
                        <li id="allpurchaseorder" style="<?php if ($user_type == '2') echo "display: none;" ?>" class="<?php echo $tab == 1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Purchase Orders</a></li>
                        <li id="acceptedpurchaseorder" style="<?php if ($user_type == '2') echo "display: none;" ?>" class="<?php echo $tab == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Accepted Purchase Orders</a></li>
                        <li id="workorders" style="<?php if ($user_type == '3') echo "display: none;" ?>" class="<?php echo $user_type == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#workhome">Work Orders</a></li>
                    </ul>
                   
                    </div>
                    </div>
    </section>
</main>
<?php } else { ?>

    <div id="allpurchasecount" style="text-align:center;">
    </div>
    <div id="acceptedpurchasecount" class="hide" style="text-align:center;">
    </div>

    <div id="workpurchasecount" class="hide" style="text-align:center;">
    </div>
    <div class="container">
        <div class="tg-section-name">
            <h2>Purchase Orders</h2>
        </div>

        <?php $user_type = $this->session->userdata('user_type'); ?>
        <div class="col-sm-11 col-xs-11 pull-right scrollmenu" style="overflow-y:scroll; height:50vh;" id="innerscroll">

            <div id="overlay">
                <div class="cv-spinner">
                    <span class="spinner"></span>
                </div>
            </div>

            <ul class="nav nav-tabs" id="purchasetabs">
                <li id="allpurchaseorder" style="<?php if ($user_type == '2') echo "display: none;" ?>" class="<?php echo $tab == 1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Purchase Orders</a></li>
                <li id="acceptedpurchaseorder" style="<?php if ($user_type == '2') echo "display: none;" ?>" class="<?php echo $tab == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Accepted Purchase Orders</a></li>
                <li id="workorders" style="<?php if ($user_type == '3') echo "display: none;" ?>" class="<?php echo $user_type == 2 ? "active" : "" ?>"><a data-toggle="tab" href="#workhome">Work Orders</a></li>
            </ul>


            <div class="tab-content">
                <div id="home" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>">
                    <div class="row">
                        <div class="tg-tickets">
                            <div class="commonfilter" id="allpurchasedetails"></div>

                        </div>


                    </div>
                </div>

                <div id="workhome" class="tab-pane fade  <?php echo $user_type == 2 ? "in active" : "" ?>">
                    <div class="row">
                        <div class="tg-tickets">
                            <div class="tg-tickets commonfilter" id="worktickets">

                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu1" class="tab-pane fade  <?php echo $tab == 2 ? "in active" : "" ?>">
                    <div class="row">
                        <div class="tg-tickets">
                            <div class="tg-tickets commonfilter" id="acceptedtickets">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    </section>
    </main>

    <div id="myModalpurchase" class="modal fade" role="dialog">
        <div class="modal-dialog widthAdjust">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Purchase order details</h4>
                </div>
                <div class="modal-body" id="modalpurchase" style="margin-left:15px;">

                </div>


                <div class="modal-footer" style="text-align: center;">
                    <div>
                        <button type="button" class="btn btn-warning changereq-view">Change Request</button>

                        <button type="button" class="btn btn-primary">View & Download Pdf</button>

                        <button type="button" class="btn btn-success loa-view">Letter of Acceptance</button>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="myModal_Loa" class="modal fade" role="dialog">
        <div class="modal-dialog widthAdjust">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Letter of Acceptance</h4>
                </div>
                <div class="modal-body">
                    <table style="width:100%" class="maintable">

                        <tr>
                            <td>Tender Name:</td>
                            <td>TNDR#0001</td>
                        </tr>
                        <tr>
                            <td> Tender Date:</td>
                            <td><?php echo  $dates = date_formate('18-03-2020'); ?></td>
                        </tr>
                        <tr>
                            <td>Last Date of acceptance:</td>
                            <td><?php echo  $dates = date_formate('01-01-2021'); ?></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox">&nbsp;&nbsp;
                                <a href="<?php echo base_url(); ?>assets\supplier\terms_and_conditions.pdf" target="_blank"> Agree to the terms & conditions
                            </td></a>
                        </tr>


                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="acceptloa()" data-dismiss="modal">Accept</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <div id="myModal_changereq" class="modal fade" role="dialog">
        <div class="modal-dialog widthAdjust">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change request </h4>
                </div>
                <div class="modal-body">
                    <label>Comment</label>
                    <textarea class="form-control" name="commentrequest" id="commentrequest"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="changerequest()" data-dismiss="modal">Save</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!------------------------Purchase Details------------------------------------------------------->

    <div class="modal fade" id="purchasdetails" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content" style="width:750px;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Purchase Details</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h4 class="modal-title"><span id="inspect"></span></h4>
                    <div class="table-responsive">

                        <table id="siteins" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">sl no</th>
                                    <th scope="col">Purchase Order No</th>
                                    <th scope="col">Tender Name</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tr>
                                <!-- <td>1</td>
                            <td>PC088944556</td>
                            <td>Tender name1</td>
                            <td><?php echo  $dates = date_formate('27-11-2020'); ?></td>
                            <td>
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="pull-center dropbtn">Action</button>
                                    <div id="myDropdown" style="width:179px;margin-top:-50px;" class=" pull-right dropdown-content">
                                        <a data-toggle="modal" data-target="#myModal_vmi">VMI</a>
                                        <a data-toggle="modal" data-target="#dispatch">PreDispatch Inspection</a>
                                        <a data-toggle="modal" data-target="#mdcc">MDCC</a>
                                        <a data-toggle="modal" data-target="#shipment">Delivery Schedule</a>


                                    </div>
                                </div>
                            </td> -->

                            </tr>


                            </tbody>


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


    <!-------------------------Purchase DetailsEnd---------------------------------------------------->


    <!------------------------Terms and Condition------------------------------------------------------->

    <div class="modal fade" id="termsconditions" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Terms and Conditions</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h4 class="modal-title"><span id="inspect"></span></h4>
                    THIS Terms and Condition is entered into on this date by and between a registered company
                    WHEREAS, the Client desires to hire the services of the Company to render services to ;<br>

                    NOW, THEREFORE, for and in consideration of the mutual covenants made by the parties hereto, the Parties to this agreement agree as follows:<br><br>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    </div>
    <!-------------------------terms andconditionEnd---------------------------------------------------->


    <!------------------------Terms and Condition------------------------------------------------------->
    <div class="modal fade" id="delivery_schedule" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delivery Schedule</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="tg-ticket">

                        <h4 class="modal-title"><span id="inspect"></span></h4>
                        <p><b>Purchase Date</b>:<?php echo  $dates = date_formate('11-02-2020'); ?><br>
                            <b>Order No</b>:#1145677<br>
                            <b>Destination</b>:TVM<br>
                            <b>Status</b>:Estimated time delivery on time<br>
                            <b>Delivery Date</b>:29 November 2020<br>
                            <b>Performance</b>:<span class="score">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:88%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="tg-btnsbox"><a class="btn btn-primary btn-sm" href="<?php echo base_url("supplier/delivery") ?>" style="margin-top:-207px;">View Calender</a></div>
                    </div>
                    </p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top:8px;">Close</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-------------------------terms andconditionEnd---------------------------------------------------->


    <!------------------------Documents------------------------------------------------------->



    <div class="modal fade" id="documents" style="padding-left: 0px !important;">

        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <ul class="nav nav-tabs">
                        <li class="<?php echo $tab == 4 ? "active" : "" ?>"><a href="#agreements" data-toggle="tab">Agreements</a></li>
                        <li class="<?php echo $tab == 5 ? "active" : "" ?>"><a href="#banks" data-toggle="tab">Bank Guarantee</a></li>

                    </ul>


                    <div class="tab-content">
                        <div id="agreements" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>" style="color: black;background-color: white;">
                            THIS AGREEMENT is entered into on this date by and between a registered company
                            WHEREAS, the Client desires to hire the services of the Company to render services to ;<br>

                            NOW, THEREFORE, for and in consideration of the mutual covenants made by the parties hereto, the Parties to this agreement agree as follows:<br>

                            The Services

                            The Consultant agrees that it shall render services to the Client on matters pertaining to (the “Services”).

                            Compensation and Payment

                            The Client shall provide payment to the Consultant at the amount of paid on every , beginning the next month of the commencement of this Agreement.
                            <br><br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
                        </div>
                        <div id="banks" class="tab-pane fade  <?php echo $tab == 2 ? "in active" : "" ?>" style="color: black;background-color: white;">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                Copy of Bank Guarantee:
                                <br> <br>
                                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                <input type="submit" value="Upload" name="submit">
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------DocumentsEnd---------------------------------------------------->
    <!------------------------------shipment--------------------------------------------------------->
    <div class="modal fade" id="shipment" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delivery</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table id="siteins" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">OrderNo</th>
                                <th scope="col">Material</th>
                                <th scope="col">Quantity </th>
                                <th scope="col">Action</th>
                                <th scope="col">#</th>


                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>PCO88944556</td>
                            <td>LED</td>
                            <td>1000</td>
                            <td><input type="button" value="shipment" data-toggle="modal" data-target="#shipment" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;"></td>
                            <td><a href="<?php echo base_url("supplier/delivery") ?>" class="button">View More</a></td>
                        </tr>

                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>


                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    </div>
    <!-------------------------shipment End---------------------------------------------------->


    <!------------------------Split Shipment------------------------------------------------------->

    <div class="modal fade" id="splitshipment" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Split</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class=<h4 class="modal-title"><span id="inspect"></span></h4>
                        <div class="split left">
                            <div class="centered">
                                <div class="container">
                                    <div class="panel panel-default">
                                        <!-- <div class="panel-heading"></div>-->
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="title">Select Product:</label>
                                                <select name="state" class="form-control">
                                                    <option value="0">LED</option>
                                                    <option value="0">Bulb</option>

                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="title">Quantity:</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity">
                                            </div>

                                            <div class="form-group">
                                                <button type="button" id="splitbutton " class="btn btn-primary" data-dismiss="modal">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="split horizontal">
                            <div class="centered">
                                <div class="container">
                                    <div class="panel panel-default">
                                        <!-- <div class="panel-heading"></div>-->
                                        <div class="panel-body">
                                            <table id="siteins" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">sl no</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Quantity</th>



                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LED</td>
                                                    <td>500</td>



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
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div id="myModal_vmi" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Vendor managed Inventory</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Product Name</th>
                                <th>Max Capacity</th>
                                <th>Min Capacity</th>
                                <th>On Hand</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PO/AEE-E-SCM-1/2021-22/00071</td>
                                <td>CONDUCTOR ACSR  WEASEL</td>
                                <td>5000.000</td>
                                <td>0</td>
                                <td>0</td>

                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal_VMI" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Vendor managed Inventory</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Product Name</th>
                                <th>Max Capacity</th>
                                <th>Min Capacity</th>
                                <th>On Hand</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PCO8895544</td>
                                <td>LED</td>
                                <td>1000</td>
                                <td>150</td>
                                <td>600</td>

                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="dispatch" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">List Of Inspections</h4>
                    <a href="#" class="gx-fab-btn gx-btn-primary position-absolute addButtonCustom" data-toggle="modal" id="modal" data-target="#modal_rew">
                        <i class="zmdi zmdi-plus-circle zmdi-hc-2x" style="margin-left:480px; border-color: #ffcc33;"></i>
                    </a>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h4 class="modal-title"></h4>
                    <div class="table-responsive">

                        <table id="predispatchlist" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">sl no</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">status</th>
                                    <th scope="col">#</th>


                                </tr>
                            </thead>



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

    <div id="modal_rew" class="modal fade" role="dialog">
        <div class="modal-dialog widthAdjust">

            <!-- Modal content-->
            <div class="modal-content" style="margin-left: 200px;width: 606px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Serial N.o Uploader </h4>
                </div><br>
                <div class="form-group row">
                    <label for="subject" class="col-md-3 col-sm-3 control-label">Serial N.o From:</label>
                    <div class="col-md-6 col-sm-6" id="ques_group">
                        <input type="text" name="serialfrom" class="form-control" id="serialfrom" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-md-3 col-sm-3 control-label">Serial N.o To:</label>
                    <div class="col-md-6 col-sm-6" id="ques_group">
                        <input type="text" name="serialto" class="form-control" id="serialto" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-md-3 col-sm-3 control-label">Quantity:</label>
                    <div class="col-md-6 col-sm-6" id="ques_group">
                        <input type="text" name="quantitypdi" class="form-control" id="quantitypdi" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-md-3 col-sm-3 control-label">Visit Request Date:</label>
                    <div class="col-md-6 col-sm-6" id="ques_group">
                        <input type="date" name="visitdate" class="form-control" id="visitdate" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="subject" class="col-md-3 col-sm-3 control-label">Serial Upload file:</label>
                    <div class="col-md-6 col-sm-6" id="ques_group">
                        <input type="file" name="fileToUpload" name="fileToUpload" id="fileToUpload"><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="requestdata()" data-dismiss="modal">Request</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <div class="modal fade" id="PaymentPDI">
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
                                <input type="text" class="form-control" id="subject" placeholder="Add fee amount">
                            </div>
                        </div>

                        <input type="hidden" name="pay" id="pay">

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <button type="button" style="margin-right: 252px;" class="btn btn-primary" onclick="">Submit</button>
                </div>

            </div>
        </div>
    </div>

    <div id="mdcc" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">MDCC list</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Consignee</th>

                                <th>Quantity(Nos)</th>
                                <th>Serial Number of Units</th>
                                <!--<th>Scheduled</th>-->
                                <th>Scheduled date of delivery</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Executive Engineer Thirumala,TMR Divison,Thirumala</td>
                                <td>1000</td>
                                <td>4456788-4588880</td>
                                <td>20-01-2021</td>

                                <!--<td><input type="button"  data-toggle="modal" data-target="#schedule" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" value="Schedule"></td>-->
                                <td><a href="#" id="" value="">View Pdf</a></td>

                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="shipment1" style="padding-left: 0px !important;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delivery Schedule</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table id="siteins" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">OrderNo</th>
                                <th scope="col">Material</th>
                                <th scope="col">Quantity </th>
                                <th scope="col">Action Request</th>


                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>PCO88944556</td>
                            <td>Bulb</td>
                            <td>1000</td>
                            <td><input type="button" class="btn" data-toggle="modal" data-target="#schedule" style="width:70%;color: #fff;background-color: #1e315d; border-color: #ffcc33;" value="Schedule"></td>
                            <!--<td ><a href="<?php echo base_url("supplier/delivery") ?>" class="button">View More</a></td>-->
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="schedule">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="adding">Add Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="questions_form">
                        <div class="form-group row">
                            <label for="subject" class="col-md-2 col-sm-3 control-label">Product</label>
                            <div class="col-md-10 col-sm-9" id="ques_group">
                                <input type="text" class="form-control" name="productdelivery" id="productdelivery" placeholder="Add Product">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-2 col-sm-3 control-label">Quantity</label>
                            <div class="col-md-10 col-sm-9" id="ques_group">
                                <input type="text" class="form-control" name="quantitydelivery" id="quantitydelivery" placeholder="Add Quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-2 col-sm-3 control-label">Schedule date</label>
                            <div class="col-md-5 col-sm-5" id="ques_group">
                                <input type="date" class="form-control" id="deliverydate" name="deliverydate" placeholder="Schedule date">
                            </div>
                        </div>

                        <input type="hidden" name="pay" id="pay">

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="addscheduleddelivery()">Save</button>
                    <button type="button" style="margin-right: 252px;" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

<?php } ?>

<!-------------------------Split shipment End---------------------------------------------------->


<script>
    $(document).ready(function() {
        $('.modal-view').click(function(e) {
            e.preventDefault();

            $('#myModal').modal();
        });
        $('.loa-view').click(function(e) {
            e.preventDefault();

            $('#myModal_Loa').modal();
        });

        $('.changereq-view').click(function(e) {
            e.preventDefault();

            $('#myModal_changereq').modal();
        });

    });

    function initcollapsible() {
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

    }
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    console.log(jQuery.fn.jquery);
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }

    function mypurchasedetails(purchasedetail) {

        var purchaseopendetails = purchasedetail['purchase_basic_details'];
        var purchasevendordetails = purchasedetail.vendor_name;
        var purchasematerialdetails = purchasedetail.prc_purchase_order_item_dtl;
        var purchaseSchemedetails = purchasedetail['purchase_scheme_details'];

        var html = "<div id='basicpurchasevendordetails'>";

        html += "<b><h5 style='color:orange;'>PURCHASE VENDOR DETAILS</h5><b>" +
            " <label>Vendor Name:" + purchasevendordetails + "</label>" +
            " <label>General Desc:" + purchasedetail.general_desc + "</label>" +
            "<label>Registered Office Address:" + purchasedetail.registered_office_address + "</label>";


        html += "</div>";


        html += "<div id='basicpurchaseopendetails'>";
        purchaseopendetails.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>PURCHASE BASIC DETAILS</h5><b>" +
                // " <label>Purchase Order Id:" + purchasedetail.vendor_managed_details['purchaseorderId'] + "</label>" +
                // "<label>Purchase Price Type:" + purchasedetail.purchase_price_type + "</label>" +
                // "<label>Purchase Order Type:" + purchasedetail.purchase_order_type + "</label>" +
                // "<label>Purchase Area Type:" + purchasedetail.purchase_area_type + "</label>" +
                // "<label>Purchase Area Type:" + purchasedetail.purchase_value + "</label>" +
                " <label>Material Code:" + item.material_code + "</label>" +
                " <label>Material Name:" + item.material_name + "</label>" +
                "<label>Material Description:" + item['material_description'] + "</label>" +
                " <label>Quantity:" + item.quantity + "</label>" +
                "<label>Basic Price:" + item['basic_price'] + "</label>" +
                "<label>Total Price:" + item['total_price'] + "</label>" +
                "<label>Offer Valid Upto:" + item['offer_valid_upto'] + "</label>" +
                "<label>Start Date:" + item['start_date'] + "</label>"
            "<label>End Date:" + item['end_date'] + "</label>";

        })

        html += "</div>";

        html += "<div id='basicpurchaseschemedetails'>";
        // purchaseSchemedetails.forEach(function(item, index) {

            html += "<b><h5 style='color:orange;'>PURCHASE SCHEME DETAILS</h5><b>" +
                " <label>Scheme Code:" + purchaseSchemedetails.scheme_code + "</label>" +
                " <label>Scheme Name:" + purchaseSchemedetails.scheme_name + "</label>";

            html += "</div>";

        // })

        console.log(html);
        $('#modalpurchase').html(html);
    }



    $(document).ready(function() {
        LoadAllPurchaseOrders();
        LoadAllWorkOrders();
        //  LoadAllAcceptedOrders();
        universalpurchasesearch();
        showcountnavbar();
    });

    setInterval(() => {
        LoadAllPurchaseOrders();
        //  LoadAllAcceptedOrders();
        LoadAllWorkOrders();
    }, 10000000);

    function showcountnavbar() {

        $(".nav-tabs a").click(function() {
            var activetab = $(this).parent().attr('id');
            if (activetab == 'acceptedpurchaseorder') {
                $('#acceptedpurchasecount').removeClass('hide');
                $('#allpurchasecount').addClass('hide');
                $('#workpurchasecount').addClass('hide');
            } else if (activetab == 'workorders') {
                $('#workpurchasecount').removeClass('hide');
                $('#allpurchasecount').addClass('hide');
                $('#acceptedpurchasecount').addClass('hide');
            } else {
                $('#allpurchasecount').removeClass('hide');
                $('#acceptedpurchasecount').addClass('hide');
                $('#workpurchasecount').addClass('hide');
            }


        });
    }



    function universalpurchasesearch() {


        $("#keywordpurchaseorder").on("keyup", function() {

            var activetab = $("#purchasetabs li.active").attr('id');

            var tabcontentid = (activetab == 'acceptedpurchaseorder') ? 'acceptedtickets' : (activetab == 'workorders') ? 'worktickets' : 'allpurchasedetails'
            var value = $(this).val().toLowerCase();
            filterpurchasedata(tabcontentid, value);

        });

    }

    function filterpurchasedata(tabcontentid, value) {

        var activetab = $("#purchasetabs li.active").attr('id');

        // $(".commonfilter div[class!=tg-btnsbox]").filter(function() {
        $(".commonfilter").filter(function() {
            if ($(this).is('.tg-btnsbox *')) {
                return;
            }
            var text = $(this).text().toLowerCase();
            $(this).toggle(text.indexOf(value) > -1)

        });

        $('.hiddendate').addClass('hide');
        var spanid = (activetab == 'acceptedpurchaseorder') ? 'acceptedtickets' : (activetab == 'workorders') ? 'worktickets' : 'allpurchaseorder'
        var purchaselength = $("#" + tabcontentid + " .tg-ticket[style!='display: none;']").length;
        var purchasescountdiv = (activetab == 'favtender') ? 'acceptedpurchasecount' : (activetab == 'workorders') ? 'workorders' : 'allpurchasecount'

        if (purchaselength == 0) {
            $('.' + spanid).removeClass('hide');
            span1 = "<span><b>No Purchase Orders Available </b></span>";
            $("#" + purchasescountdiv).html(span1);
        } else {
            $('.' + spanid).addClass('hide');
            span1 = "<span><b>Total PurchaseOrders:" + purchaselength + "</b></span>";
            $("#" + purchasescountdiv).html(span1);
        }

    }


    $("#purchaseordernum").on("change", function() {

        var activetab = $("#purchasetabs li.active").attr('id');
        var tabcontentid = (activetab == 'acceptedpurchaseorder') ? 'acceptedtickets' : (activetab == 'workorders') ? 'worktickets' : 'allpurchasedetails'
        var value = $(this).val().toLowerCase();
        datefilters();
        filterpurchasedata(tabcontentid, value);

    });

    $(".filterclass").on("change", function() {

        var activetab = $("#purchasetabs li.active").attr('id');
        var tabcontentid = (activetab == 'acceptedpurchaseorder') ? 'acceptedtickets' : (activetab == 'workorders') ? 'worktickets' : 'allpurchasedetails'
        datefilters();
        datefilterswork();
        filterpurchasedata(tabcontentid, value);
    });

    function datefilters() {
        var results = [];
        var fromDate = $("#datepickerpurchasefrom").val();
        var toDate = $("#datepickerpurchaseto").val();
        if (fromDate || toDate) {
       
            results = datas.filter(function(value, key) {
                if (toDate != '') {
                    if (value['purchase_order_date'] >= fromDate && value['purchase_order_date'] <= toDate) {
                        return value;
                    }
                } else {
                    if (value['purchase_order_date'] == fromDate)
                        return value;

                }
            });

            buildpurchaseorders(results);

        } else {
            buildpurchaseorders(datas);
        }
    }

    function datefilterswork() {
        var results = [];
        var fromDate = $("#datepickerpurchasefrom").val();
        var toDate = $("#datepickerpurchaseto").val();
        if (fromDate || toDate) {
           
            results = datas.filter(function(value, key) {
                if (toDate != '') {
                    if (value['purchase_order_date'] >= fromDate && value['purchase_order_date'] <= toDate) {
                        return value;
                    }
                } else {
                    if (value['purchase_order_date'] == fromDate)
                        return value;

                }
            });

            buildpurchaseorderswork(results);

        } else {
            buildpurchaseorderswork(datas);
        }
    }




    function LoadAllPurchaseOrders() {

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/purchase_order/getAllpurchasesApi',
            data: {
                "purchaseid": 8,
            },
            type: 'POST',
            // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            // processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function() {
                // setting a timeout
                $("#overlay").fadeIn();
            },
            success: function(result) {
               
                if (result != "null") {
                    datas = JSON.parse(result);
                    var count = datas.length;
                    if (count > 0) {
                        span1 = "<span><b>Total Purchase Orders:" + count + "</b></span>";
                    } else {
                        span1 = "<span>No Purchase To Display </span>";
                    }
                    $('#allpurchasecount').html(span1);
                    buildpurchaseorders(datas);
                    buildAcceptedpurchaseorders(datas);
                    initcollapsible();
                }
            },

            complete: function() {
                $("#overlay").fadeOut();
            },
        });


    }

    function buildpurchaseorders(datas) {

        var allpurchaseordersData = datas.filter(function(val) {
            if (val['letter of acceptance status'] !== 'pending') {
                return val;
            }
        });
         //console.log(allpurchaseordersData);
        html = "";
        $.each(allpurchaseordersData, function(i, data) {

            //$.each(data['tender_details'], function(i, datadetail) {
               
                html += "<div class='tg-ticket'><time class='tg-matchdate' >";
                var date1 = new Date(data.purchase_order_date);
                var tenderTitle = (data.tender_details.tender_title != null) ? data.tender_details.tender_title : '';
                html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
                // html +=  "<span></span></time>";
                html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data.puchase_no + "</span><h4> " + data.tender_details.tender_description+ "</h4></h4>";
                html += "<div class='hiddendate' hidden >" + data.vendor_name + "</div>";
                html += "<ul class='tg-matchmetadata'><li><address>PURCHASE CATEGORY:" + data.purchase_order_category + "</address></li></ul></div>";

                html += "<div class='tg-btn' onclick='mypurchasedetails(" + JSON.stringify(data) + ")' data-toggle='modal' data-target='#myModalpurchase' ><a class='modal-view pullright' style='color:white;'>View</a>";

                html += "</div></div>";
           // });

        });
        $('#allpurchasedetails').empty().append(html);
    }

    function buildAcceptedpurchaseorders(datas) {
      
        var acceptedData = datas.filter(function(val) {
            if (val['letter_of_acceptance_status'] == 'accepted') { //bl changes(25-06-2021)
                return val;
            }
        });
       
        count = acceptedData.length;
        if (count > 0) {
            span1 = "<span><b>Total Accepted Purchase Orders:" + count + "</b></span>";
        } else {
            span1 = "<span><b>No Accepted Purchase Orders To Display </b></span>";
        }
        $('#acceptedpurchasecount').html(span1);
        html = "";

        $.each(acceptedData, function(i, data) {

            // $.each(data['tender details'], function(i, datadetail) {
                html += "<div class='tg-ticket'><time class='tg-matchdate' >";
                var date1 = new Date(data.purchase_order_date);
                var tenderTitle = (data.tender_details.tender_title != null) ?data.tender_details.tender_title : '';
                html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
                // html +=  "<span></span></time>";
                html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data.puchase_no + "</span><h4> " + data.tender_details.tender_description + "</h4></h4>";
                html += "<div class='hiddendate' hidden >" + data.vendor_name + "</div>";
                html += "<ul class='tg-matchmetadata'><li><address>PURCHASE CATEGORY:" + data.purchase_order_category + "</address></li></ul></div>";
                html += "  <div class='tg-btnsbox'>"

                    +
                    "<button type='button' class='collapsible btn btn-primary '>View Purchase Details</button>" +
                    "<div class='content'>" +
                    "<div class='table-responsive'>" +
                    "<div class='tg-ticket' style='color:black;background-color:white;'>" +
                    "<div class='tg-matchdetail'>"

                    +
                    " <h4>OrderNo:PO/AEE-E-SCM-1/2021-22/00071</h4>" +
                    "<ul class='tg-matchmetadata'>"

                    +
                    "<address>Description:Text</address>" +
                    "</li>" +
                    " </ul>" +
                    "</div>" +
                    "<div class='tg-btnsbox'>" +
                    "<div class='dropdown'>" +
                    "<div id='myDropdown' class='pull-right dropdown-content'>" +
                    // "<a data-toggle='modal' data-target='#myModal_vmi'>VMI</a>" +
                    // " <a data-toggle='modal' data-target='#mdcc'>MDCC</a>" +
                    // " <a data-toggle='modal' data-target='#shipment'>Shipments</a>" +
                    "</div>" +
                    " </div>" +
                    " </div>"

                    +
                    "<table id='siteins' cellpadding='0'   class='table table-striped table-bordered table-hover' class='display' style='width:100%;border:0;'>" +
                    " <thead>" +
                    " <tr>" +
                    " <th scope='col'>sl no</th>" +
                    "<th scope='col'>Order No</th>" +
                    "<th scope='col'>Product Name</th>" +
                    " <th scope='col'>Purchase Date</th>" +
                    " <th scope='col'>Action</th>"

                    +
                    "</tr>" +
                    " </thead>" +
                    "  <tbody>" +
                    " <tr>" +
                    " <td>1</td>" +
                    "<td>PO/AEE-E-SCM-1/2021-22/00071</td>" +
                    "<td>CONDUCTOR ACSR WEASEL</td>" +
                    "<td><?php echo  $dates = date_formate('27-05-2020'); ?></td>"


                    +
                    "<td style='width: 40%;'>" +
                    "  <button class='btn' data-toggle='modal' data-target='#myModal_vmi' style='width:20%;color: #fff;background-color: green; border-color: green;'>VMI</button>" +
                    " </td>"

                    +
                    "</td>"

                    +
                    "</tr>"

                    +
                    " <tr>" +
                    "<td>2</td>" +
                    "  <td>PO/AEE-E-SCM-1/2021-22/00071</td>" +
                    " <td>CONDUCTOR ACSR WEASEL</td>" +
                    " <td><?php echo  $dates = date_formate('27-05-2020'); ?></td>"

                    +
                    " <td style='width:370px;'>" +
                    " <button type='button' class='btn' data-toggle='modal' data-target='#dispatch' style='width:20%;color: #fff;background-color: orange; border-color: orange;'>PDI</button>" +
                    "<button type='button' data-toggle='modal' data-target='#mdcc' class='btn' style='color: #fff;background-color: red; border-color: red;'>MDCC</button> <button class='btn' data-toggle='modal' data-target='#shipment1' style='color: #fff;background-color: blue; border-color: blue;'>Delivery</button>"

                    +
                    "  </td>"


                    +
                    "</tr>"


                    +
                    " </tbody>"


                    +
                    "</table>"

                    +
                    "</div>" +
                    "</div>" +
                    "</div>"

                    +
                    "</div>" +
                    "  <div class='tg-btnsbox'>" +
                    "<div class='tg-btnsbox' style='margin-left:20px;'>" +
                    " <a class='fa  fa-print iconpo' title='print' style='font-size:24px' data-toggle='modal' data-target='#tenderstatus'> </a>&nbsp" +
                    "<a class='fa  fa-download iconpo' title='download' style='font-size:24px' data-toggle='modal' data-target='#tenderstatus'> </a>&nbsp" +
                    "<a class='fa fa-file-o iconpo' title='document' style='font-size:24px' data-toggle='modal' data-target='#documents'> </a>&nbsp" +
                    "<a class='fa  fa-file iconpo' title='terms and conditions' style='font-size:24px' data-toggle='modal' data-target='#termsconditions'> </a>&nbsp" +
                    "</div>" +
                    "</div>";
                html += "</div></div>";

            // });

        });
        //  console.log(html);

        $('#acceptedtickets').empty().append(html);
    }



    //  function LoadAllAcceptedOrders() {

    //      $.ajax({
    //          type: "POST",
    //          url: '<?php echo base_url() ?>supplier/purchase_order/getAllpurchasesApi',
    //          data: {
    //              "purchaseid": 8,
    //          },
    //          type: 'POST',
    //          beforeSend: function() {
    //              // setting a timeout
    //              $("#overlay").fadeIn();
    //          },
    //          success: function(result) {
    //              console.log(typeof result);
    //              if (result != "null") {
    //                  datas = JSON.parse(result);
    //                  var count = datas.length;
    //                  if (count > 0) {
    //                      span1 = "<span><b>Total Accepted Purchase Orders:" + count + "</b></span>";
    //                  } else {
    //                      span1 = "<span>No Purchase To Display </span>";
    //                  }
    //                  $('#acceptedpurchasecount').html(span1);
    //                  buildAcceptedpurchaseorders(datas);

    //              }
    //          },

    //          complete: function() {
    //              $("#overlay").fadeOut();
    //          },
    //      });


    //  }


    function LoadAllWorkOrders() {

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>supplier/purchase_order/getAllpurchasesApi',
            data: {
                "purchaseid": 8,
            },
            type: 'POST',
            // contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            // processData: false, // NEEDED, DON'T OMIT THIS
            beforeSend: function() {
                // setting a timeout
                $("#overlay").fadeIn();
            },
            success: function(result) {
                if (result != "null") {
                    datas = JSON.parse(result);
                    var count = datas.length;
                    if (count > 0) {
                        span1 = "<span><b>Total Work Orders:" + count + "</b></span>";
                    } else {
                        span1 = "<span>No Works To Display </span>";
                    }
                    $('#workpurchasecount').html(span1);
                    buildpurchaseorderswork(datas);
                }
            },
            complete: function() {
                $("#overlay").fadeOut();
            },
        });


    }


    dispatch_table = $('#predispatchlist').DataTable({


        'ajax': {
            url: '<?php echo site_url("supplier/purchase_order/getpredispatchData"); ?>',

            "scrollX": true,
            type: 'POST',
            "data": function(d) {
                d.<?= $this->security->get_csrf_token_name(); ?> =
                    "<?= $this->security->get_csrf_hash() ?>";

                // d.districtid = distval;
                //d.blockid = block;
                // d.cdsid = cds;
                //d.adsid = ads;
                // d.typeid = typeid;
            }
        },


        "buttons": [],
        "columns": [{
                "data": "slno"

            },
            {
                "data": "date"
            },

            {
                "data": "status"
            },
            {
                "data": "button"
            },





        ],


        "drawCallback": function(settings) {

            $(".ajaxLoader").css("display", "none");
        },

    });




    function buildpurchaseorderswork(datas) {
        html = "";

        $.each(datas, function(i, data) {

            $.each(data['tender details'], function(i, datadetail) {
                html += "<div class='tg-ticket'><time class='tg-matchdate' >";
                var date1 = new Date(data.purchase_order_date);
                var tenderTitle = (datadetail.tender_title != null) ? datadetail.tender_title : '';
                html += date1.getDate() + "<span>" + myFunction(date1.getMonth()) + "</span></span></time>";
                html += "<div class='tg-matchdetail'><span class='tg-theme-tag'>" + data['purchase no'] + "</span><h4> " + tenderTitle + "</h4></h4>";
                html += "<div class='hiddendate' hidden >" + data.vendorname + "</div>";
                html += "<ul class='tg-matchmetadata'><li><address>PURCHASE CATEGORY:" + data.purchase_order_category + " </address></li></ul></div>";

                html += "<div class='tg-btn' onclick='mypurchasedetails(" + JSON.stringify(data) + ")' data-toggle='modal' data-target='#myModalpurchase' ><a class='modal-view pullright' style='color:white;'>View</a>";

                html += "</div></div>";
            });

        });

        $('#worktickets').empty().append(html);
    }



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


    function requestdata() {

        var serialfrom = $("#serialfrom").val();
        var serialto = $('#serialto').val();
        var quantitypdi = $("#quantitypdi").val();
        var visitdate = $("#visitdate").val();
        var fileToUpload = $("#fileToUpload").val();

        $(".error_msg").remove();
        var flag = 0;


        if (serialfrom == '') {
            flag = 1;
            $("#serialfrom").append("<span class='error_msg'>serialfrom Required</span>");
        }

        if (serialto == '') {
            flag = 1;
            $("#serialto").append("<span class='error_msg'>serialto Required</span>");
        }

        if (quantity == "") {
            flag = 1;
            $("#quantity").append("<span class='error_msg'>quantity Required</span>");
        }

        if (visitdate == "") {
            flag = 1;
            $("#visitdate").append("<span class='error_msg'>Visit Date Required</span>");
        }

        if (flag == 0) {

            $("#savemicro").prop("disabled", true);
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $(".ajaxLoader").css("display", "block");
            $.post("<?php echo site_url('supplier/purchase_order/insert_predispatch') ?>", {

                serialfrom: serialfrom,
                serialto: serialto,
                quantitypdi: quantitypdi,
                visitdate: visitdate,
                fileToUpload: fileToUpload,


                <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
            }, function(data) {
                alert("Request Successfully sent");
                $('#savemicro').removeAttr("disabled");
                window.location.reload();

            });

        }


    }

    function addscheduleddelivery() {

        var productdelivery = $("#productdelivery").val();
        var quantitydelivery = $('#quantitydelivery').val();
        var deliverydate = $("#deliverydate").val();

        $(".error_msg").remove();
        var flag = 0;


        if (productdelivery == '') {
            flag = 1;
            $("#productdelivery").append("<span class='error_msg'>Product Required</span>");
        }

        if (quantitydelivery == '') {
            flag = 1;
            $("#serialto").append("<span class='error_msg'>quantity Required</span>");
        }

        if (deliverydate == "") {
            flag = 1;
            $("#deliverydate").append("<span class='error_msg'>quantity Required</span>");
        }



        if (flag == 0) {

            $("#savemicro").prop("disabled", true);
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $(".ajaxLoader").css("display", "block");
            $.post("<?php echo site_url('supplier/purchase_order/insert_deliveryschedule') ?>", {

                productdelivery: productdelivery,
                quantitydelivery: quantitydelivery,
                deliverydate: deliverydate,

                <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
            }, function(data) {
                // alert(data);
                $('#savemicro').removeAttr("disabled");
                window.location.reload();

            });

        }


    }

    function changerequest() {

        var commentrequest = $("#commentrequest").val();
        $(".error_msg").remove();
        var flag = 0;

        if (commentrequest == '') {
            flag = 1;
            $("#commentrequest").append("<span class='error_msg'>Comment Required</span>");
        }

        if (flag == 0) {

            $("#savemicro").prop("disabled", true);
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $(".ajaxLoader").css("display", "block");
            $.post("<?php echo site_url('supplier/purchase_order/post_changerequest') ?>", {

                commentrequest: commentrequest,

                <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
            }, function(data) {
                // alert(data);
                $('#savemicro').removeAttr("disabled");
                window.location.reload();

            });

        }

    }

    function acceptloa() {

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo site_url('supplier/purchase_order/post_changerequest') ?>", {

            <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
        }, function(data) {
            // alert(data);
            $('#savemicro').removeAttr("disabled");
            window.location.reload();

        });

    }
</script>