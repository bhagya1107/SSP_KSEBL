 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="collapsible.css">
 <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript" src="collapsible.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

 <style>
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
     .tg-section-name:after {
   display:none;
}
     /* #tg-main{
         margin-top:12%;
     }
    
     .tg-section-name {
         top:27%;
     } */
 </style>


 <main id="tg-main" class="tg-main tg-haslayout">

    <!-- <section class="tg-main-section tg-haslayout">-->
     <div id="applydelivery" class ="" style="text-align:center;"><span><b>Total  Delivery Orders:2</b></span>
        </div>

         <div class="container">
             <div class="tg-section-name">
                 <h2>Delivery Orders</h2>
             </div>
             <div class="page-header-breadcrumb" style="margin-top:-11px;">
                 <ul class="breadcrumb-title" style="margin-left:85%;">

                     <li class="breadcrumb-item">
                         <h3><a href="<?php echo base_url("supplier/delivery/delivery_module") ?>">View Calender</a></h3>
                     </li>
                 </ul>
             </div>
             <div class="col-sm-11 col-xs-11 pull-right" style="overflow-y:scroll; height:400px;">
                 <ul class="nav nav-tabs" id="deliverytabs">
                     <li class="<?php echo $tab == 1 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">Delivery Orders</a></li>
                 </ul>
                 <div class="tab-content">


                     <div id="menu1" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>">
                         <div class="row">
                             <div class="tg-tickets commonfilter" id="deliveryorder">
                                 <div class="tg-ticket">
                                     <time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
                                     <div class="tg-matchdetail">
                                         <span class="tg-theme-tag">Order No : PCO88944556</span>
                                         <h4>Tender Name 1</h4>
                                         </h4>
                                         <ul class="tg-matchmetadata">
                                             <li>
                                                 <address>Tender Short DIscription</address>
                                             </li>
                                         </ul>
                                     </div>
                                     <a class="btn btn-primary btn-sm" style="#1e315d" data-toggle="modal" data-target="#invoice">Invoice Status</a>


                                     <!--<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Dropdown header 1</li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>-->
                                     <div class="tg-btnsbox">





                                         <button type="button" class="collapsible btn btn-primary">View Purchase Details</button>

                                         <div class="content">
                                             <div class="table-responsive">
                                                 <div class="tg-ticket" style="color:black;background-color:white;">
                                                     <!--<time class="tg-matchdate" datetime="2016-05-03">02<span>Dec</span></time>-->
                                                     <div class="tg-matchdetail">
                                                         <!--<span class="tg-theme-tag"></span>-->
                                                         <h4>OrderNo:#45666666</h4>
                                                         <ul class="tg-matchmetadata">
                                                             <li>
                                                                 <address></address>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                     <div class="tg-btnsbox">
                                                         <div class="dropdown">
                                                             <!--<button onclick="myFunction()" style="margin-bottom: -39px;" class="pull-right dropbtn">Return</button>-->
                                                             <div id="myDropdown" class=" pull-right dropdown-content">
                                                                 <a data-toggle="modal" data-target="#myModal_vmi">VMI</a>
                                                                 <!--<a data-toggle="modal" data-target="#dispatch">PreDispatch Inspection</a>-->
                                                                 <a data-toggle="modal" data-target="#mdcc">MDCC</a>
                                                                 <a data-toggle="modal" data-target="#shipment">Shipments</a>
                                                                 <!--<a data-toggle="modal" data-target="#shipment">Delivery Schedule</a>
											
										</div>-->
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <table id="siteins" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                                                         <thead>
                                                             <tr>
                                                                 <th scope="col">sl no</th>
                                                                 <th scope="col">Status</th>
                                                                 <th scope="col">Destination</th>
                                                                 <th scope="col">Delivery Date</th>
                                                                 <th scope="col">Performance</th>
                                                                 <th scope="col">Action</th>

                                                             </tr>
                                                         </thead>
                                                         <tr>
                                                             <td>1</td>
                                                             <td>Estimated Delivery On Time</td>
                                                             <td>TVM</td>
                                                             <td><?php echo  $dates=date_formate('27-05-2020');?></td>
                                                             <td>
                                                                 <div class="score-wrap">
                                                                     <span class="stars-active" style="width:88%">
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                     </span>
                                                                 </div>
                                                             </td>
                                                             <td><button data-toggle="modal" data-target="#" class="btn btn-primary">Reschedule</button>
                                                                 <!-- <button  data-toggle="modal" data-target="#dispatch" style="width:80px; height:29px; color: #fff;background-color: orange; border-color: orange;">GRN</button> 
 <!--<button  data-toggle="modal" data-target="#mdcc" style="width:80px; height:29px; color: #fff;background-color: red; border-color: red;">MDCC</button> <button  data-toggle="modal" data-target="#shipment1" style="width:80px; height:29px; color: #fff;background-color: blue; border-color: blue;">Delivery</button>-->
                                                             </td>

                                                             </td>

                                                             <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
                                                         </tr>

                                                         <tr>
                                                             <td>2</td>
                                                             <td>Delivered</td>
                                                             <td>KOLLAM</td>
                                                             <td><?php echo  $dates=date_formate('27-12-2020');?></td>
                                                             <td>
                                                                 <div class="score-wrap">
                                                                     <span class="stars-active" style="width:88%">
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                     </span>
                                                                 </div>
                                                             </td>
                                                             <td><button data-toggle="modal" data-target="#" class="btn btn-info">Return</button><button data-toggle="modal" data-target="#dispatch" class="btn btn-warning">GRN</button> </td>
                                                             <!--<button  data-toggle="modal" data-target="#dispatch" style="width:80px; height:29px; color: #fff;background-color: orange; border-color: orange;">Inspection</button> <button  data-toggle="modal" data-target="#mdcc" style="width:80px; height:29px; color: #fff;background-color: red; border-color: red;">MDCC</button> <button  data-toggle="modal" data-target="#shipment1" style="width:80px; height:29px; color: #fff;background-color: blue; border-color: blue;">Delivery</button></td>
-->


                                                             <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
                                                         </tr>

                                                         <tr>
                                                             <td>3</td>
                                                             <td>Overdue</td>
                                                             <td>PATTOM</td>
                                                             <td><?php echo  $dates=date_formate('12-05-2020');?></td>
                                                             <td>
                                                                 <div class="score-wrap">
                                                                     <span class="stars-active" style="width:88%">
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                     </span>
                                                                 </div>
                                                             </td>
                                                             <td><button data-toggle="modal" data-target="#" class="btn btn-danger">Overdue</button>
                                                                 <button data-toggle="modal" data-target="#" class="btn btn-primary">Reschedule</button> <button data-toggle="modal" data-target="#mdcc" class="btn btn-success">Deliver</button>
                                                             </td>
                                                             <!-- <button  data-toggle="modal" data-target="#shipment1" style="width:80px; height:29px; color: #fff;background-color: blue; border-color: blue;">Delivery</button></td>
-->


                                                             <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
                                                         </tr>


                                                         </tbody>


                                                     </table>

                                                 </div>
                                             </div>
                                         </div>

                                         <!--<a class="fa  fa-eye"   title="view Details" style="font-size:24px" data-toggle="modal" data-target="#"> </a>&nbsp;-->

                                     </div>
                                 </div>
                             </div>


                             <div class="tg-ticket">
                                 <time class="tg-matchdate" datetime="2016-05-03">20<span>JAN</span></time>
                                 <div class="tg-matchdetail">
                                     <span class="tg-theme-tag">Order No : PCO8895544</span>
                                     <h4>Tender Name 2</h4>
                                     </h4>
                                     <ul class="tg-matchmetadata">
                                         <li>
                                             <address>Tender Short DIscription</address>
                                         </li>
                                     </ul>
                                 </div>
                                 <a class="btn btn-primary btn-sm" style="#1e315d" data-toggle="modal" data-target="#invoice">Invoice Status</a>

                                 <div class="tg-btnsbox">





                                     <button type="button" class="collapsible btn btn-primary">View Purchase Details</button>
                                     <div class="content">
                                         <div class="table-responsive">
                                             <div class="tg-ticket" style="color:black;background-color:white;">
                                                 <!--<time class="tg-matchdate" datetime="2016-05-03">02<span>Dec</span></time>-->
                                                 <div class="tg-matchdetail">
                                                     <!--<span class="tg-theme-tag"></span>-->
                                                     <h4>OrderNo:#22222</h4>
                                                     <ul class="tg-matchmetadata">
                                                         <li>
                                                             <address></address>
                                                         </li>
                                                     </ul>
                                                 </div>
                                                 <div class="tg-btnsbox">
                                                     <div class="dropdown">
                                                         <!--<button onclick="myFunction()" style="margin-bottom: -39px;" class="pull-right dropbtn">Return</button>-->
                                                         <div id="myDropdown" class=" pull-right dropdown-content">
                                                             <!--<a data-toggle="modal" data-target="#myModal_vmi">VMI</a>-->
                                                             <a data-toggle="modal" data-target="#dispatch">PreDispatch Inspection</a>
                                                             <a data-toggle="modal" data-target="#mdcc">MDCC</a>
                                                             <a data-toggle="modal" data-target="#shipment">Shipments</a>
                                                             <!--<a data-toggle="modal" data-target="#shipment">Delivery Schedule</a>
											
										</div>-->
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <table id="siteins" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                                                     <thead>
                                                         <tr>
                                                             <th scope="col">sl no</th>
                                                             <th scope="col">Status</th>
                                                             <th scope="col">Destination</th>
                                                             <th scope="col">Delivery Date</th>
                                                             <th scope="col">Performance</th>
                                                             <th scope="col">Action</th>

                                                         </tr>
                                                     </thead>
                                                     <tr>
                                                         <td>1</td>
                                                         <td>Shipped</td>
                                                         <td>TVM</td>
                                                         <td><?php echo  $dates=date_formate('21-01-2020');?></td>
                                                         <td>
                                                             <div class="score-wrap">
                                                                 <span class="stars-active" style="width:88%">
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                 </span>
                                                             </div>
                                                         </td>
                                                         <td><button data-toggle="modal" data-target="#" class="btn" style="color: #fff;background-color: blue;">Shipment Tracking</button>
                                                             <!--<button  data-toggle="modal" data-target="#mdcc" style="width:80px; height:29px; color: #fff;background-color: red; border-color: red;">MDCC</button> <button  data-toggle="modal" data-target="#shipment1" style="width:80px; height:29px; color: #fff;background-color: blue; border-color: blue;">Delivery</button>-->
                                                         </td>

                                                         </td>

                                                         <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
                                                     </tr>

                                                     <tr>
                                                         <td>2</td>
                                                         <td>Overdue</td>
                                                         <td>KOLLAM</td>
                                                         <td><?php echo  $dates=date_formate('21-05-2020');?></td>
                                                         <td>
                                                             <div class="score-wrap">
                                                                 <span class="stars-active" style="width:88%">
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                     <i class="fa fa-star" aria-hidden="true"></i>
                                                                 </span>
                                                             </div>
                                                         </td>
                                                         <td><button data-toggle="modal" data-target="#" class="btn btn-danger">Overdue</button>
                                                             <button data-toggle="modal" data-target="#" class="btn btn-primary">Reschedule</button> <button data-toggle="modal" data-target="#" class="btn btn-success">Deliver</button>
                                                             <!--<button  data-toggle="modal" data-target="#delivery_schedule" style="width:80px; height:29px; color: #fff;background-color: blue; border-color: blue;">Delivery</button>-->
                                                         </td>

                                                         </td>

                                                         <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
                                                     </tr>


                                                     </tbody>


                                                 </table>

                                             </div>
                                         </div>
                                     </div>

                                     <!--<a class="fa  fa-eye"   title="view Details" style="font-size:24px" data-toggle="modal" data-target="#"> </a>&nbsp;-->

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


             </div>
         </div>
         

    <!-- </section>-->
 </main>

 <!-- <button id="buttonscroll" class="scroltop" onclick="window.scrollTo(0, 0);" style="display: inline-block;"><i class=" fa fa-arrow-up"></i></button> -->


 <div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog widthAdjust">

         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Purchase order details</h4>
             </div>
             <div class="modal-body">
                 <table style="width:100%" class="maintable">
                     <tr>
                         <td>Vendor:</td>
                         <td>ABCD XYZ</td>
                     </tr>
                     <tr>
                         <td>Tender Name:</td>
                         <td>TNDR#0001</td>
                     </tr>
                     <tr>
                         <td>Date:</td>
                         <td>18-03-2020</td>
                     </tr>
                     <tr>
                         <td>PAC Amount:</td>
                         <td>25000</td>
                     </tr>
                     <tr>
                         <td>Amount:</td>
                         <td>25000</td>
                     </tr>
                     <tr>
                         <td>PAC Amount:</td>
                         <td>25000</td>
                     </tr>
                     <tr>
                         <td>Security Deposit:</td>
                         <td>2000</td>
                     </tr>
                     <table class="table">
                         <tr>
                             <th>Material</th>
                             <th>Basic Price</th>
                             <th>Freight Charges</th>
                             <th>Quantity</th>
                             <th>Unit price</th>
                             <th>Total</th>

                         </tr>
                         <tr>
                             <td>LED</td>
                             <td>1001</td>
                             <td>0.00</td>
                             <td>2</td>
                             <td>100</td>
                             <td>200</td>
                         </tr>

                     </table>
                 </table>
                 <div>
                     <button type="button" class="btn btn-primary changereq-view">View</button>
                     <button type="button" class="btn btn-success loa-view">Accept</button>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                         <td><?php echo  $dates=date_formate('18-03-2020');?></td>
                     </tr>
                     <tr>
                         <td>Last Date of acceptance:</td>
                         <td><?php echo  $dates=date_formate('01-01-2021');?></td>
                     </tr>
                     <tr>
                         <td><input type="checkbox"><a href="#">Agree to the terms & conditions</a></td>
                     </tr>


                 </table>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>

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
                 <textarea class="form-control"></textarea>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>

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
                             <td>1</td>
                             <td>PC088944556</td>
                             <td>Tender name1</td>
                             <td><?php echo  $dates=date_formate('27-11-2020');?></td>
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
                             </td>

                             <!--<div class="col-md-2 col-sm-3"><button  data-toggle="modal" data-target="#myModal_vmi" style="width:122px; height:33px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">VMI</button>
                                  <button  data-toggle="modal" data-target="#dispatch" style="width:122px; height:38px; color: #fff;background-color: green; border-color: green;">Predispatch Inspection</button>
                                  <button  data-toggle="modal" data-target="#mdcc" style="width:122px; height:33px; color: #fff;background-color: orange; border-color: orange;">MDCC</button>
                                  <button  data-toggle="modal" data-target="#delivery_schedule" style="width:122px; color: #fff;background-color: red; border-color: Red;">Delivery Schedule</button></td>

									</div>-->
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
                     <p><b>Purchase Date</b>:<?php echo  $dates=date_formate('11-02-2020');?><br>
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
                 <!-- <div class="table-responsive">

                    <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Purchase Order No</th>
                                <th scope="col">Status</th>
                                <th scope="col">Purchase Date</th>
								 <th scope="col">Destination</th>
								 <th scope="col">Performance</th>
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>PC088944556</td>
                                    <td>Estimate time on delivery</td>
                                    <td>27-11-2020</td>
                                    <td>TVM</td>
									<td><span class="score">
    <div class="score-wrap">
        <span class="stars-active" style="width:88%">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </span></td>
                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                 <!--</tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>-->

                 <!-- Modal footer -->
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
                     <li class="<?php echo $tab == 1 ? "active" : "" ?>"><a href="#agreements" data-toggle="tab">Agreements</a></li>
                     <li class="<?php echo $tab == 2 ? "active" : "" ?>"><a href="#banks" data-toggle="tab">Bank Gurantee</a></li>

                 </ul>


                 <div class="tab-content">
                     <div id="agreements" class="tab-pane fade  <?php echo $tab == 1 ? "in active" : "" ?>">
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
                     <div id="banks" class="tab-pane fade  <?php echo $tab == 2 ? "in active" : "" ?>">
                         <form action="upload.php" method="post" enctype="multipart/form-data">
                             Copy of Bank Gurantee:
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
                             <td>PCO88944556</td>
                             <td>Bulb</td>
                             <td>3000</td>
                             <td>200</td>
                             <td>400</td>

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
                 <h4 class="modal-title"><span id="questions"></span></h4>
                 <div class="table-responsive">

                     <table id="questions" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                         <thead>
                             <tr>
                                 <th scope="col">sl no</th>
                                 <th scope="col">status</th>
                                 <th scope="col">#</th>


                             </tr>
                         </thead>
                         <tr>
                             <td>1</td>
                             <td>Approved for inspection</td>
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





 <div id="modal_rew" class="modal fade" role="dialog">
     <div class="modal-dialog widthAdjust">

         <!-- Modal content-->
         <div class="modal-content" style="margin-left: -9px;width: 606px;">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Serial No Uploader </h4>
             </div><br>
             <div class="form-group row">
                 <label for="subject" class="col-md-3 col-sm-3 control-label">Serial No From:</label>
                 <div class="col-md-6 col-sm-6" id="ques_group">
                     <input type="text" class="form-control" id="subject" placeholder="">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="subject" class="col-md-3 col-sm-3 control-label">Serial No To:</label>
                 <div class="col-md-6 col-sm-6" id="ques_group">
                     <input type="text" class="form-control" id="subject" placeholder="">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="subject" class="col-md-3 col-sm-3 control-label">Visit Date:</label>
                 <div class="col-md-6 col-sm-6" id="ques_group">
                     <input type="date" class="form-control" id="subject" placeholder="">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="subject" class="col-md-3 col-sm-3 control-label">Inspection Date:</label>
                 <div class="col-md-6 col-sm-6" id="ques_group">
                     <input type="date" class="form-control" id="subject" placeholder="">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="subject" class="col-md-3 col-sm-3 control-label">Serial Upload file:</label>
                 <div class="col-md-6 col-sm-6" id="ques_group">
                     <input type="file" name="fileToUpload" id="fileToUpload"><br>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Request</button>

                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
         </div>

     </div>
 </div>

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
                     <p><b>Purchase Date</b>:11-02-2020<br>
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
                 <!-- <div class="table-responsive">

                    <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Purchase Order No</th>
                                <th scope="col">Status</th>
                                <th scope="col">Purchase Date</th>
								 <th scope="col">Destination</th>
								 <th scope="col">Performance</th>
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>PC088944556</td>
                                    <td>Estimate time on delivery</td>
                                    <td>27-11-2020</td>
                                    <td>TVM</td>
									<td><span class="score">
    <div class="score-wrap">
        <span class="stars-active" style="width:88%">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </span></td>
                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                 <!--</tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>-->

                 <!-- Modal footer -->
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top:8px;">Close</button>
                 </div>


             </div>
         </div>
     </div>
 </div>


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
                             <th>Location</th>
                             <th>Product</th>
                             <th>Quantity</th>
                             <th>Comments</th>
                             <!--<th>Scheduled</th>-->
                             <th>Remarks</th>

                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>Tvm</td>
                             <td>Bulb</td>
                             <td>1000</td>
                             <td>Clearance</td>
                             <!--<td><input type="button"  data-toggle="modal" data-target="#schedule" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" value="Schedule"></td>-->
                             <td>SerialNo Issued</td>

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
                         <td>LED</td>
                         <td>1000</td>
                         <td><input type="button" data-toggle="modal" data-target="#schedule" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" value="Schedule"></td>
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
                             <input type="text" class="form-control" id="subject" placeholder="Add Product">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="subject" class="col-md-2 col-sm-3 control-label">Quantity</label>
                         <div class="col-md-10 col-sm-9" id="ques_group">
                             <input type="text" class="form-control" id="subject" placeholder="Add Quantity">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="subject" class="col-md-2 col-sm-3 control-label">Schedule date</label>
                         <div class="col-md-5 col-sm-5" id="ques_group">
                             <input type="date" class="form-control" id="subject" placeholder="Schedule date">
                         </div>
                     </div>

                     <input type="hidden" name="pay" id="pay">

                 </form>
             </div>

             <!-- Modal footer -->
             <div class="modal-footer">

                 <button type="button" class="btn btn-primary" onclick="">Save</button>
                 <button type="button" style="margin-right: 252px;" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>


 <!-------------------------Split shipment End---------------------------------------------------->

 <!----------------------------invoice modal------------------------------>

 <div class="modal fade" id="invoice" style="padding-left: 0px !important;">

     <div class="modal-dialog">
         <div class="modal-content" style="width:775px;">

             <!-- Modal Header -->

             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Invoices</h4>
             </div>
             <div class="modal-body">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Consignee</th>

                             <th>Quantity(Nos)</th>
                             <th>Serial Number of Units</th>

                             <!--<th>Scheduled date of delivery</th>-->
                             <th>penality</th>
                             <th>TDS</th>
                             <th>Deductions</th>
                             <th>Amount</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td><input type="checkbox" name="product" value="25160" data-penality="100" data-tds="100" data-deductions="10" onclick="totalIt()"> </td>
                             <td>Executive Engineer Thirumala,TMR Divison,Thirumala</td>
                             <td>1000</td>
                             <td>4456788-4588880</td>
                             <!--<td>20-01-2021</td>-->
                             <!--<td><input type="button" value="Submit Invoice"></td>-->
                             <td>100.00</td>
                             <td>50.00</td>
                             <td>10.00</td>
                             <td>25000</td>
                         </tr>

                         <tr>
                             <td><input type="checkbox" name="product" value="5110" data-penality="0.00" data-tds="50" data-deductions="10" onclick="totalIt()"></td>
                             <td>Executive Engineer Kovalam,TMR Divison,Kovalam</td>
                             <td>500</td>
                             <td>4588880-46789090</td>
                             <!--<td>27-01-2021</td>-->
                             <!--<td><input type="button" value="Submit Invoice"></td>-->
                             <td>0.00</td>
                             <td>50.00</td>
                             <td>10.00</td>
                             <td>5000</td>
                         </tr>

                     </tbody>
                 </table>
                 <div class="modal-body">
                     <label>
                         Invoice File Upload: <input value="" type="file" id="invoicefile" />

                     </label>
                 </div>
                 <div class="modal-body">
                     <label>
                         PenalityAmount :
                         <input value="0.00" readonly="readonly" type="text" id="penality" />
                     </label>
                     <label>
                         DeductsAmount:
                         <input value="0.00" readonly="readonly" type="text" id="deductions" />
                     </label>
                     <label style="margin-left:22px;">
                         TDS Amount:
                         <input value="0.00" readonly="readonly" type="text" id="tds" />
                     </label>
                 </div>

                 <label style="margin-left:20px;">
                     <b>Total Amount:</b>
                     <input value="0.00" readonly="readonly" type="text" id="total" />
                 </label>

                 <div class="modal-body">
                     <td><input type="button" value="Submit Invoice"></td>
                 </div>
             </div>
             <!--<div class="tab-content">
					<form action="showReceipt.php" method="POST">
<table >
<tr><td>Transaction ID <input type="text" name="txtID" value="PL-F2567890342"> <?php echo date("m / d / Y"); ?></td></tr>
<tr><td><h2>Your Order:</h2></td></tr><img src="<?php echo base_url(); ?>assets/logo2.png" alt="image description" width="30px"style="margin-top: -25px; margin-left: 385px;margin-bottom: -162px; width: 175px;">
<tr><td><input  type="checkbox"  name="cbItem[]" value=" LED"> LED</td> <td>Quantity <input type="text" value="1000" name="txtQty[]"></td></tr>
<tr><td><input  type="checkbox" name="cbItem[]" value="Bulb">Bulb</td> <td>Quantity <input type="text" value="500" name="txtQty[]"></td></tr>
<tr><td>Amount Given:<input type="text" name="txtAmount" value=" 10000"></td><td>
 <input type="file" style="width:47px;height:47px;margin-left:-1px;"name="fileToUpload" id="fileToUpload"><input style="margin-right:97px;" type="submit" name="btnGen" value="Generate Receipt">

</table>
</form>
	
  <div class="modal-footer" >

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>-->
         </div>
     </div>
 </div>
 </div>
 <!-------------------------------END------------------------------------------->

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
 </script>





 <style>
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


     .collapsible {
         /* background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px; */
     }

     /* .active, .collapsible:hover {
  /* background-color: #555; */
     }

     */ .content {
         padding: 0 18px;
         display: none;
         overflow: hidden;
         background-color: #f1f1f1;
     }
 </style>

 <script>
     $(document).ready(function() {


        universaldeliverysearch();
         $('#datepicker').datepicker({
             dateFormat: 'yy-mm-dd'
         });
     });

     function universaldeliverysearch() {

         $("#keyworddelivery").on("keyup", function() {
             var activetab = $("#deliverytabs li.active").attr('id');
             // var tabcontentid = (activetab == 'favtender') ? 'deliveryorder' : (activetab == 'applytender') ? 'appliedtickets' : 'alltenderdetails'
             var value = $(this).val().toLowerCase();
             filterdeliverydata(value);

         });

     }

     function filterdeliverydata(value) {

         $(".commonfilter div[class!=tg-btnsbox]").filter(function() {

             var datetime1 = $(this).attr('datetime');
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });

         $('.hiddendate').addClass('hide');
         var tenderlength = $(".commonfilter .tg-ticket [style='display: block;']").length;
         console.log(tenderlength);

     }

     $("#delivery_date").on("change", function() {
         var activetab = $("#deliverytabs li.active").attr('id');
         var value = $(this).val();
         filterdeliverydata(value);
     });


     $(function() {

         $(document).trigger("enhance");
     });
 </script>
 <script>
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
 </script>
 <script>
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

     function totalIt() {

         var input = document.getElementsByName("product");
         var total = 0;
         var penality = 0;
         var tds = 0;
         var deductions = 0;
         //var sum=penality+ total
         for (var i = 0; i < input.length; i++) {
             if (input[i].checked) {
                 total += parseFloat(input[i].value);
                 penality += parseFloat(input[i].getAttribute('data-penality'));
                 tds += parseFloat(input[i].getAttribute("data-tds"));
                 deductions += parseFloat(input[i].getAttribute("data-deductions"));

             }
         }
         document.getElementById("penality").value = "" + penality.toFixed(2);
         document.getElementById("tds").value = "" + tds.toFixed(2);
         document.getElementById("deductions").value = "" + deductions.toFixed(2);
         document.getElementById("total").value = "" + total.toFixed(2);
     }
 </script>