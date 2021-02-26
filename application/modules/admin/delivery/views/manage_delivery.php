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
                                      <h4>Delivery Module</h4>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                  <ul class="breadcrumb-title">
                                      <li class="breadcrumb-item">
                                          <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                                      </li>

                                      <li class="breadcrumb-item"><a href="#!">Delivery</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="card borderless-card">
                        <div class="card">

                            <div class="card-block">
                              <div id='calendar'></div>
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



<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>



<div id="myModal_overdue" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Overdue</h4>
      </div>
      <form>
        <div class="modal-body">
        
           
            <!-- <button type="button" class="btn btn-success " >Start shipment</button> -->
        
        </div>
       
      </form>
    </div>

  </div>
</div>





<div id="myModal_reschedule" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reschedule</h4>
      </div>
      <form>
        <div class="modal-body">

            <label>Reschedule Date:</label>
			&nbsp
            <label>23-01-2021</label>
        <br><br>
           
            <button type="button" class="btn btn-success " >Approve</button>
        
        </div>
       
      </form>
    </div>

  </div>
</div>

<script>


function modal_reschedule(e){
    e.preventDefault();
    $('#myModal_reschedule').modal();
}

function modal_asn(){

    $('#myModal_asn').modal();
}

function modal_overdue(){
   // $('#myModal_overdue').modal();
}

</script>

<link rel="stylesheet" href="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/fullcalendar.min.css" />
<script src="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/fullcalendar.min.js"></script>



<script>

$(document).ready(function(){

var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();

$('#calendar').fullCalendar({               
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            eventRender: function( event, element, view ) {
                //console.log(view);
                // $(document).find(".fc-right").empty().append("<span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star'></span><span class='fa fa-star'></span>");

                // add status flag in events,loop condition based on flag also
                var title = event.title;
                var status =event.status;
                var today= new Date(y, m, d);
                var description = event.description;
                var statustext = event.statustext;
                var suppliername= event.suppliername;

                if(event.start > today){
                    // future delivery
                    // 1,2,5
                    var buttons =title;
                   

                    if(status ==5){
                          buttons +=" <div class='fl-r'><button class='btn btn-info'>Shipment Tracking</button><br>";
                    }else{
                        
                       buttons +="<div class='fl-r'><button class='btn btn-primary' onclick='modal_reschedule(event)'>Reschedule Request</button><br></div>";
                    }
                   
                }
              
                
                if(event.start < today){
                    if(event.start < today && status==3){
                        // past delivery & delivered
                        
                        var buttons =title ;
                      buttons += "<div class='fl-r'> <button class='btn btn-success'>Delivery Confirmation</button><br><button class='btn btn-primary'>Return</button><br><button class='btn btn-success'>Receipt</button><br></div>";
                    }
                    else if(event.start < today && status==4){
                        // past delivery & not-delivered
                        
                        var buttons =title +" <div class='fl-r'><button class='btn btn-danger' onclick='modal_overdue()'>Overdue</button><br>";
                        buttons += " <button class='btn btn-primary' onclick='modal_reschedule(event)>Reschedule Request</button><br></div>";
                        // <button class='btn btn-success'>Deliver</button><br></div>";
                    }
                   

                }

            
               
                element.find('.fc-list-item-title').html(buttons);
               element.find('.fc-list-item-title').append('<br />Supplier :'+suppliername);
                element.find('.fc-list-item-title').append('<br />'+description);
                element.find('.fc-list-item-title').append('<br />Status:'+statustext);

            
            },
        

            defaultView: 'listWeek',
            defaultDate: date,
            eventLimit: true, // allow "more" link when too many events
            initialView: 'listWeek',
            plugins: [ 'dayGrid', 'list', 'googleCalendar' ],
            displayEventTime: false,

            // fetch from db
            allDayText:"",
            events: [
                {
                    title: "Order No #1234",
                    start: new Date(y, m, d),
                    status:1,
                    description:"",
                    statustext :  "Shipped,Estimated delivery on time",
                    suppliername :"ABCD",

                
                },
                {
                    title: 'Order No #123567',
                    start: '2020-11-07',
                    status:3,
                    description :"Delivered 2020-11-07",
                    statustext :  "Delivered",
                    suppliername :"BEN JOE",
                    
                },
                {
                    id: 999,
                    title: 'Order No #24324',
                    start: '2020-11-09',
                    status:4,
                    description:"Estimated delivery on 2020-11-09",
                    statustext :  "Overdue",
                    suppliername :"XYZZ",
                },
                
                {
                    title: 'Order No #7568768',
                    start: '2020-12-11',
                    status: 1,
                    description:"",
                    statustext : "Estimated Delivery on time",
                    suppliername :"TEST",
                    
                },
                {
                    title: 'Order No #9876',
                    start: '2020-12-11',
                    status: 2,
                    description:"",
                    statustext :  "Estimated Delivery on time",
                    suppliername :"ARNAV",
                    
                },
                {
                    title: 'Order No #9876',
                    start: '2020-12-11',
                    status:5,
                    description:"",
                    statustext : "Shipped",
                    suppliername :"ABCDEFG",
                    
                },
                {
                    title: 'Order No #9876',
                    start: '2020-11-30',
                    status:5,
                    description:"",
                    statustext : "Shipped",
                    suppliername :"TESTT",

                    
                },
                {
                    title: 'Order No #12345678',
                    start: '2020-11-11',
                    status:3,
                    description :"Delivered 2020-11-12",
                    statustext : "Delivered",
                    suppliername :"ATENAJS",

                
                },
                {
                    title: 'Order No #123567FE654',
                    start: '2020-11-13',
                    status:4,
                    description:"Estimated delivery on 2020-11-13",
                    statustext : "Overdue",
                    suppliername :"TEST TEST",

                },
                {
                    title: 'Order No #ER543123567',
                    start: '2020-11-12',
                    status: 3,
                    description :"Delivered 2020-11-12",
                    statustext : "Delivered",
                    suppliername :"NETROXE",

                    
                },
                {
                    title: 'Order No #XSAD3423',
                    start: '2020-10-12',
                    status:4,
                    description:"Estimated delivery on 2020-10-12",
                    statustext : "Overdue",
                    suppliername :"ABCD",

                },
                {
                    title: 'Order No #222222',
                    start: '2020-11-29',
                    status: 2,
                    description:"",
                    statustext: "Estimated Delivery on time",
                    suppliername :"XYZASD",

                },
                {
                    title: 'Order No #3333',
                    start: '2020-11-29',
                    status: 5,
                    description:"",
                    statustext :"Shipped",
                    suppliername :"QWERTY",

                },
            
                {
                    title: 'Order No #BBB333',
                    // url: 'http://google.com/',
                    start: '2020-11-28',
                    status:1,
                    description:"",
                    statustext:"Estimated Delivery on time",
                    suppliername :"TYUYIUOP",

                    
                }
            ],
           
        
});

});



</script>

<style>


#calendar {
width: 100%;
margin: 0 auto;
}

.response {
height: 60px;
}

.success {
background: #cdf3cd;
padding: 10px 60px;
border: #c3e6c3 1px solid;
display: inline-block;
}
.fc-list-table td a , .fc-list-item-title{
text-align:left;
}
.fl-r{
float:right;
text-align:right;
}
.btn{
width:150px;
}
.checked {
color: orange;
}
</style>