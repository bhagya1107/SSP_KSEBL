<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/fullcalendar.min.css" />


<script src="<?=base_url()?>assets/supplier_portal/js/vendor/jquery-library.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>

<!-- <script src="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/lib/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url()?>/assets/supplier_portal/fullcalendar/fullcalendar.min.js"></script>



<script>

// $(document).ready(function() {
//   var event_list = $('#event_list');

//   $('#calendar').fullCalendar({
//    // mock events for demo
//     events: function(start, end, tz, callback) {
//       var events = [];
//       var num_events = Math.floor(Math.random() * 25) + 10;
//       for (var i = 0; i < num_events; i++) {
//         events.push({
//           start: moment(start).add(Math.random() * 30, 'days'),
//           title: 'Event that starts on'
//         });
//       }
//       callback(events);
//     },
//     // every time the view updates, update the event list
//     viewRender: function(view, element) {
//       var events = $('#calendar').fullCalendar('clientEvents');
//       handleViewChange(events);
//     }
//   });

//   function handleViewChange(events) {
//     event_list.html('');
//     var ul = $('<ul/>');
//     $.each(events, function(index, event) {
//       var li = $('<li/>');
//       li.text(event.title + ' ' + event.start.format());
//       ul.append(li);
//     });
//     event_list.html(ul);
//   }
// });

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
                    $(document).find(".fc-right").empty().prepend("<span>Performance</span>").append(" <span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star'></span><span class='fa fa-star'></span> ");

                    // add status flag in events,loop condition based on flag also
                    var title = event.title;
                    var status =event.status;
                    var today= new Date(y, m, d);
                    var description = event.description;
					  var destination = event.destination;
                    var statustext = event.statustext;

                    if(event.start > today){
                        // future delivery
                        // 1,2,5
                        var buttons =title;
                       

                        if(status ==5){
                              buttons +=" <div class='fl-r'><button class='btn btn-info' data-toggle='modal' data-target='#shipment'>Shipment Tracking</button><br>";

                            // buttons +=" <div class='fl-r'><button class='btn btn-primary'>Cancel ASN</button><br></div>";
                        }else{
                            
                             //future delivery with asn
                            //  buttons +="<div class='fl-r'><button class='btn btn-primary' onclick='modal_asn()'>ASN</button><br>";
                             buttons +="<div class='fl-r'><button class='btn btn-primary'  data-toggle='modal' data-target='#myModal_changereq'>Reschedule</button><br></div>";
                        }
                       
                    }
                  
                       
                    if(event.start < today){
                        if(event.start < today && status==3){
                            // past delivery & delivered
                            
                            var buttons =title ;
                          
                            // buttons +=" <div class='fl-r'><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><br>
                            // buttons +=" <div class='fl-r'><button class='btn btn-info'>Shipment Tracking</button><br>";
                            buttons += "<div class='fl-r'> <button class='btn btn-primary'>Return</button><br><button class='btn btn-success'>Receipt</button><br></div>";
                        }
                        else if(event.start < today && status==4){
                            // past delivery & not-delivered
                            
                            var buttons =title +" <div class='fl-r'><button class='btn btn-danger' onclick='modal_overdue()'>Overdue</button><br>";
                            buttons += " <button class='btn btn-primary'>Reschedule</button><br><button class='btn btn-success'>Deliver</button><br></div>";
                        }
                       

                    }

                
                   
                    element.find('.fc-list-item-title').html(buttons);
                    element.find('.fc-list-item-title').append('<br />'+description);
                    element.find('.fc-list-item-title').append('<br />Destination:'+destination);
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
						destination:"TVM",
                        statustext :  "Shipped,Estimated delivery on time",

                    
                    },
                    {
                        title: 'Order No #123567',
                        start: '2020-11-07',
                        status:3,
                        description :"Delivered 2020-11-07",
						destination:"ATTINGAL",
                        statustext :  "Delivered",
                        
                    },
                    {
                        id: 999,
                        title: 'Order No #24324',
                        start: '2020-11-09',
                        status:4,
						destination:"PATTOM",
                        description:"Estimated delivery on 2020-11-09",
                        statustext :  "Overdue",
                    },
                    
                    {
                        title: 'Order No #7568768',
                        start: '2020-12-11',
                        status: 1,
                        description:"",
						destination:"KALAMBALAM",
                        statustext : "Estimated Delivery on time",
                        
                    },
                    {
                        title: 'Order No #9876',
                        start: '2020-12-11',
                        status: 2,
                        description:"",
						destination:"KANNUR",
                        statustext :  "Estimated Delivery on time",
                        
                    },
                    {
                        title: 'Order No #9876',
                        start: '2020-12-11',
                        status:5,
						destination:"PALAYAM",
                        description:"",
                        statustext : "Shipped",
                        
                    },
                    {
                        title: 'Order No #9876',
                        start: '2020-11-30',
                        status:5,
                        description:"",
						destination:"KOVALAM",
                        statustext : "Shipped",
                        
                    },
                    {
                        title: 'Order No #12345678',
                        start: '2020-11-11',
                        status:3,
                        description :"Delivered 2020-11-12",
						destination:"KAZHAKOOTAM",
                        statustext : "Delivered",
                    
                    },
                    {
                        title: 'Order No #123567FE654',
                        start: '2020-11-13',
                        status:4,
                        description:"Estimated delivery on 2020-11-13",
						destination:"KARAMANA",
                        statustext : "Overdue",
                    },
                    {
                        title: 'Order No #ER543123567',
                        start: '2020-11-12',
                        status: 3,
                        description :"Delivered 2020-11-12",
						destination:"KOVALAM",
                        statustext : "Delivered",
                        
                    },
                    {
                        title: 'Order No #XSAD3423',
                        start: '2020-10-12',
                        status:4,
                        description:"Estimated delivery on 2020-10-12",
						destination:"THAMAPANOOR",
                        statustext : "Overdue",
                    },
                    {
                        title: 'Order No #222222',
                        start: '2020-11-29',
                        status: 2,
                        description:"",
						destination:"KOLLAM",
                        statustext: "Estimated Delivery on time",
                    },
                    {
                        title: 'Order No #3333',
                        start: '2020-11-29',
                        status: 5,
                        description:"",
						destination:"KOTTAYAM",
                        statustext :"Shipped",
                    },
                
                    {
                        title: 'Order No #BBB333',
                        // url: 'http://google.com/',
                        start: '2020-11-28',
                        status:1,
                        description:"",
						destination:"ernakulam",
                        statustext:"Estimated Delivery on time",
                        
                    }
                ],
                // eventClick: function(calEvent, jsEvent, view) {

                //     alert('Event: ' + calEvent.title);
                //     alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                //     alert('View: ' + view.name);

                //     // change the border color just for fun
                //     $(this).css('border-color', 'red');

                // }
            
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
</head>
<body>
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right" >
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>


</html>


<div id="myModal_asn" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ASN</h4>
      </div>
      <form>
        <div class="modal-body">
        
            <label>Upload ASN</label>
            <input type="file" class="form-control">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary " >Send ASN</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>

  </div>
</div>


<!--  overdue -->

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
        
            <!-- <label>Upload ASN</label>
            <input type="file" class="form-control"> -->
            <button type="button" class="btn btn-success " >Start shipment</button>
        
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-primary " >Send ASN</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </form>
    </div>

  </div>
</div>



<div id="myModal_changereq" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reshedule</h4>
      </div>
      <div class="modal-body">
	  <label>Penality Amount:1500</label>
		
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-dismiss="modal" >Reshedule</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="shipment" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Shipment Tracking</h4>
      </div>
      <div class="modal-body">
	  <label>TrackingId:TCVX123478900</label>
		
      </div>
	  <div class="modal-body">
	  <label>Tracking Status:Your Order Is On The Way To Deliver</label>
		
      </div>
      <div class="modal-footer">
	  <!--<button type="button" class="btn btn-primary" data-dismiss="modal" >Reshedule</button>-->

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--<style>
 fc-view-container{
  
.max-height:500px;overflow:auto;
} 
</style>-->
<script>

function modal_asn(){

    $('#myModal_asn').modal();
}

function modal_overdue(){
    $('#myModal_overdue').modal();
}

</script>