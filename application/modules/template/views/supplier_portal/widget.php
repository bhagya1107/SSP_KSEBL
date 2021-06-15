
		
      <link rel = "stylesheet"
         href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>


      <style>
      	@media screen and (max-width: 767px){
			.vertical-menuss {
                width: 250px !important;
              
                            
            }
		}

.vertical-menu {
    width: 347px;
    /* width: 270px; */
    z-index: 1;
    top: 0;
    left: 0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-BOTTOM: 60px;
}

#drag-1 { 
    width: 350px;
   /* max-height: 600px;*/
    margin-bottom: 10px;
}

.vertical-menu a {
    /* background-color: #eee; */
    background-color: #FFF;

    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu li.active a {
    background-color: #272360;
    color: white;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
    color: #FFF;
    
    background-color: #272360;
  }

  /* .active{
      background:none!important;
  } */
 {
    box-sizing: border-box;
}

body {
    font-family: Verdana;
}

.slide {
    width: 100px;
    height: 59px;
    border: 1px solid #ccc;
    margin: 2px;
    background-color: white;
    padding: 1em;
    transition: all 0.3s linear;
}

.sort-stop .slide {
    transition: none; //prevent slide transition at end 
}

.sorting .sortable-placeholder {
    transition: height 0.3s linear; //compensate slide transition at begin
    height: 0px;
}

.sortable-placeholder {
    height: 60px;
}

.slide.ui-sortable-helper {
    transition: none;
}

.sortable-placeholder~.slide:not(.ui-sortable-helper) {
    transform: translateX(60px);
}


/* // sidebar */

.sidebar {
    /* height: 100%; */
    width: 0px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #272360;
    color: white;
    padding: 10px 15px;
    border: none;
    margin-top: 10px;
}

.openbtn:hover {
    background-color: #444;
}

#main {
    transition: margin-left .5s;
    /* padding: 16px; */
    text-align: left;
    padding: 0px;

}

.quick-menu {
    padding-bottom: 0px!important;
}
.hidedata{
    display:none;
}

.toggle-btn-quicklink {
    float: right;
}
.quick_sidebar_open .quick-sidebar {
    right: 0px !important;
}

.avatar-sm {
    width: 2.5rem;
    height: 2.5rem;
}.avatar-img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}
.rounded-circle {
    border-radius: 50%!important;
}
img {
    vertical-align: middle;
    border-style: none;
}

.tg-socialicons li a:hover,{
    color:#fff;
}
          

      </style>
      <script>
//       $(".all-slides").sortable({
//         placeholder: 'slide-placeholder',
//         axis: "x",
//         revert: 150,
//         start: function(e, ui){
            
//             placeholderHeight = ui.item.outerHeight();
//             ui.placeholder.height(placeholderHeight + 15);
//             $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
        
//         },
//         change: function(event, ui) {
            
//             ui.placeholder.stop().height(0).animate({
//                 width:'100%',
//                 height: ui.item.outerHeight() + 15
//             }, 300);
            
//             placeholderAnimatorHeight = parseInt($(".slide-placeholder-animator").attr("data-height"));
            
//             $(".slide-placeholder-animator").stop().height(placeholderAnimatorHeight + 15).animate({
//                 height: 0,
//                 width:'100%',
//             }, 300, function() {
//                 $(this).remove();
//                 placeholderHeight = ui.item.outerHeight();
//                 $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
//             });
            
//         },
//         stop: function(e, ui) {
            
//             $(".slide-placeholder-animator").remove();
            
//         },
// });



// var slides = $('.all-slides')
// slides.sortable({
//   axis:'x',
//   revert: 300,
//   placeholder: 'sortable-placeholder',
//   cursor: 'move',
//   tolerance:'pointer',
//   start: function(){
//     slides.addClass('sorting');
//   },
//   stop: function(){
//     slides
//       .addClass('sort-stop')
//       .removeClass('sorting');
//     setTimeout(function(){
//       slides.removeClass('sort-stop'); //:( ugly hack
//     }, 310);
//   }
// });
</script>
      
<script>
function openNav() {

//   var width =document.getElementById("drag-1").style.width;
 
//   if(width == "0" || width =="0px"){
   
//     document.getElementById("drag-1").style.width = "350px";
//     document.getElementById("drag-1").style.display = 'block';
//    // document.getElementById("drag-2").style.width = "83.33%";


//   }else{
    
//     document.getElementById("drag-1").style.width = "0";
//     document.getElementById("drag-1").style.display = 'none';
//    // document.getElementById("drag-2").style.width = "100%";
    

//   }
}

function closeNav() {
  document.getElementById("drag-1").style.width = 0;
}


$(document).ready(function(){
  
   
});
$(document).ready(function() {
//     SetClass();
//     var hasclass=$('#quicklinks').hasClass('hidedata');
//     var hasclasshead=$('.quicklinkheader').hasClass('active');
//     if(hasclasshead){
//       //  alert(1);
        document.getElementById("drag-2").style.width = '100%';
//         $('#quicklinks').addClass('hidedata');

//     }else{
//        // alert(2);
//         // document.getElementById("drag-2").style.width = '83.33333333%';
//         $('#quicklinks').removeClass('hidedata');
//     }
});
// function SetClass() {
// //before assigning class check local storage if it has any value
//     //alert(localStorage.ClassName);
//     $(".quicklinkheader").addClass(localStorage.ClassName);
// }

// function OpenFloatingWidget(){
//     var hasclass=$('#quicklinks').hasClass('hidedata');
//     var hasclasshead=$('.quicklinkheader').hasClass('active');  // hide widget
//     if(hasclasshead){
//         $('#quicklinks').removeClass('hidedata');
//         // document.getElementById("drag-2").style.width = '83.33333333%';
//         $('.quicklinkheader').removeClass('active');
//         localStorage.ClassName = "";
//     }else{
//         $('#quicklinks').addClass('hidedata');
//         document.getElementById("drag-2").style.width = '100%';
//         $('.quicklinkheader').addClass('active');
//         localStorage.ClassName = "active";
//     }


// }

$(document).ready( function(){
    $( '.quick-sidebar-overlay' ).hide();
    $('#toggle-button').click( function() {
        var status=$( "#multiCollapseExample1" ).is(":hidden");
        
        if(status== true){

            $('.quick-sidebar').css("position","fixed");
             $( '.quick-sidebar-overlay' ).show( );
            // document.getElementById("drag-2").style.width = '83.33333333%';
           
            
          
            $('.close').click(function(){
            
                // $( "#multiCollapseExample1" ).hide( "300");
                $( "#multiCollapseExample1" ).hide( {direction: 'left'}, 1000);
                $('.quick-sidebar-overlay').hide();
            });


            $('.quick-sidebar-overlay').on("click", function (event) {
          
                event.stopPropagation();
                // $( "#multiCollapseExample1" ).hide( "30");
                $( "#multiCollapseExample1" ).hide( {direction: 'left'}, 1000);
                $('.quick-sidebar-overlay').hide();
                // document.getElementById("drag-2").style.width = '100%';
            });
           
           
        }else{
            
            // document.getElementById("drag-2").style.width = '100%';
            $('.quick-sidebar-overlay').hide();

        }
        $( "#multiCollapseExample1" ).toggle( {direction: 'left'}, 1000);
        
        
    });
});



</script>
<style>


.quick-sidebar-overlay{
    position: fixed;
    z-index: 1100;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.63);
}
.test{
    z-index: 1;
    background: #ffffff;
}
.quick-sidebar{
    z-index:1101;
}
.quick-sidebar {
    z-index: 1101;
    /* left:0px!important; */
    /* position: fixed; */
    top: 0;
    bottom: 0;
    right: 0px;
    /* width: 380px; */
    overflow: auto;
    overflow-x: hidden;
    height: 100vh;
    /* display: block; */
    z-index: 1;
    background: #ffffff;
    background-size: cover;
    background-position: center center;
    box-shadow: 2px 0px 20px rgba(69, 65, 78, 0.07);
    transition: all .3s;
    z-index: 1101;
    padding: 20px 20px 0;
}
::-webkit-scrollbar {
    width:8px;
}
hr{
    margin:0px;
}

.notif-box .see-all, .messages-notif-box .see-all {
    border-top: 1px solid #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    color: #555;
    font-size: 13px;
    font-weight: 400;
    text-decoration: none;
    list-style-type:none;
}
.notif-box .notif-center a .notif-content, .messages-notif-box .notif-center a .notif-content,.notif-content {
    padding: 10px 15px 10px 0;
}

.notif-box > .notif-center> a> li{
    list-style-type:none;
}

.notif-box .notif-center a:hover, .messages-notif-box .notif-center a:hover {
    text-decoration: none;
    background: #fafafa;
    transition: all .2s;
}

 
::-webkit-scrollbar-thumb {
	
  outline: none !important;
} 

.nav-tabs{
    margin-right: 2px;
    line-height: 1.42857143; 
    border-radius: 4px 4px 0 0;
}

</style>



<div class="quick-sidebar-overlay hidedata"></div>
<!-- <div class="hidedata" id="quicklinks"> -->
<div class="hidedata quick-sidebar" id="multiCollapseExample1" >
    

    <!-- <div class="test"> -->

  <div class="vertical-menu vertical-menuss  quick-menu  " >
    
        <button type="button" class="close" id="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    
    <div class="clearfix"></div>
            <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
				<li class="nav-item active col-md-6" style="text-align: center;padding:0px;"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Quick Links</a> </li>
				<li class="nav-item col-md-6" style="text-align: center;padding:0px;"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Notifications</a> </li>
			</ul>
    <!-- <a href="#" class="active" onclick="openNav()" data-toggle="tooltip" title="Quick Links!">Quick Links  <span class="toggle-btn-quicklink" > ☰  </span></a> -->
  
  
    <div class="tab-content mt-3">
        <div class="tab-chat tab-pane fade in active" id="messages" role="tabpanel">
            <div class="vertical-menu vertical-menuss sidebar1" id="drag-1"> 
            <?php   
                $user_type=$this->session->userdata('user_type');

                ?>

            
    
        <br>
                <a style="<?php if($getcompanypermissiondetails->procurement_plan=='0') echo "display: none;" ?>"  href="<?=supplier_url('procurement')?>" class=""><b>PROCUREMENT PLAN</b></a><hr>
                <a style="<?php if($getcompanypermissiondetails->tenders=='0') echo "display: none;" ?>"  href="<?=supplier_url('tenders')?>" class=""><b>TENDERS</b></a><hr>
                <a style="<?php if($getcompanypermissiondetails->tenders=='0') echo "display: none;" ?>"  href="<?=supplier_url('tenders/my')?>">Favourite Tenders<i></i></a>
                   <a style="<?php if($getcompanypermissiondetails->tenders=='0') echo "display: none;" ?>"  href="<?=supplier_url('tenders/my')?>">Applied Tenders<i></i></a>
                <a style="<?php if($getcompanypermissiondetails->purchase_order=='0'  OR $user_type=="2") echo "display: none;" ?>"  href="<?=supplier_url('purchase_order')?>" class=""><b>PURCHASE ORDER</b></a><hr>
                <a style="<?php if($getcompanypermissiondetails->purchase_order=='0'  OR $user_type=="2") echo "display: none;" ?>"  href="<?=supplier_url('purchase_order')?>">My Purchase Order<i></i></a>
                <a style="<?php if($getcompanypermissiondetails->purchase_order=='0' OR $user_type=="1" OR $user_type=="3" OR $user_type=="4" OR $user_type=="5" OR $user_type=="6") echo "display: none;" ?>"  href="<?=supplier_url('purchase_order')?>" class=""><b>WORK ORDER</b></a><hr>
                <a style="<?php if($getcompanypermissiondetails->purchase_order=='0' OR $user_type=="1"  OR $user_type=="3" OR $user_type=="4" OR $user_type=="5" OR $user_type=="6") echo "display: none;" ?>"  href="<?=supplier_url('purchase_order')?>">My Work Order<i></i></a>
                <a style="<?php if($getcompanypermissiondetails->delivery=='0') echo "display: none;" ?>"  href="<?=supplier_url('delivery')?>" class=""><b>DELIVERY</b></a><hr>
                 <a style="<?php if($getcompanypermissiondetails->delivery=='0') echo "display: none;" ?>"  href="<?=supplier_url('delivery/delivery_module')?>">View Calender<i></i></a>
						<!-- <a href="#">Dispatch</a>
                        <a href="#">Check Points<i></i></a>
                        <a href="#">Shipment<i></i></a> -->
                        <!-- <a href="#">Order Tracking<i></i></a>
                        <a href="#">Delivery Confirmation<i></i></a> -->
                <!--<a href="<?=supplier_url('accounts/workmeasure')?>" class="active">WORK MEASUREMENT</a>-->
                   

    
                <a style="<?php if($getcompanypermissiondetails->accounts=='0') echo "display: none;" ?>"  href="<?=supplier_url('accounts/payments')?>" class=""><b>ACCOUNTS</b></a><hr>
                        <a style="<?php if($getcompanypermissiondetails->accounts=='0') echo "display: none;" ?>"  href="<?=supplier_url('accounts/payments')?>">Invoices</a>
                        <a  style="<?php if($getcompanypermissiondetails->accounts=='0') echo "display: none;" ?>"  href="<?=supplier_url('accounts/payments/2')?>">Payments</a>
                        <a style="<?php if($getcompanypermissiondetails->work_measurement=='0') echo "display: none;" ?>" href="#"><b>WORK MEASUREMENT</b></a>  
                <?php   
                $user_type=$this->session->userdata('user_type');

                ?>

                <a href="#" class=""><b>ADMINISTRATION</b></a><hr> 
                        <!-- <a href="<?=supplier_url('dashboard/supplier_administration/tab_1')?>">Basic Info<i></i></a>
                        <a href="<?=supplier_url('dashboard/profile')?>" style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6')  echo "display: none;" ?>">Company Profile</a>
                        <a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" href="<?=supplier_url('dashboard/banking')?>">Banking Details</a>
                        <a href="<?=supplier_url('dashboard/manage_user')?>" style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Employees<i></i></a>
                        <a href="<?=supplier_url('dashboard/portfolio')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"> Portfolio</a>
                        <a href="<?=supplier_url('dashboard/subscription')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Subscription Status</a>
                        <a href="<?=supplier_url('dashboard/preference_profile')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Preferences</a>
                        <a href="<?=supplier_url('dashboard/notifications')?>" style="<?php if($user_type=='6' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Notifications<i></i></a> -->
                        
                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_1')?>">Basic Info<i></i></a>
                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_2')?>" style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6')  echo "display: none;" ?>">Company Profile</a>

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_3')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"> Portfolio</a>


                        <a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" href="<?=supplier_url('dashboard/supplier_administration/tab_4')?>">Banking Details</a>

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_5')?>" style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Employees<i></i></a>

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_6')?>" style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Access Permission<i></i></a>

                      

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_7')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Subscription Status</a>

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_8')?>" style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Preferences</a>

                        <a href="<?=supplier_url('dashboard/supplier_administration/tab_9')?>" style="<?php if($user_type=='6' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>">Notifications<i></i></a>

            </div>
        </div>
        <div class="tab-pane fade" id="tasks" role="tabpanel">   
            <br><br>
            <h5  style="<?php if($notifications=='0' or $notificationsview->preference_display_status=='false') echo "display: none;" ?>" >You have <?php echo $notifications;?> new notification</h3>
            <hr> 
            <ul class="notif-box">
                <div class="notif-center submenu"> 
                    <a href="<?php echo base_url('supplier/dashboard/preference_profile');?>"  style="<?php if($notificationsview->preference_display_status=='true') echo "display: none;" ?>">
                    <li><div class="notif-content">
                    <b>Turn on your notifications</b>
                            <div class="clear-fix"></div>
                            <!-- <span class="time">5 minutes ago</span> -->
                        </div>
                    </li>
                    </a>
                    <a href="#"  style="<?php if($notificationsview->preference_display_status=='false') echo "display: none;" ?>" >
                    <li><div class="notif-content">
                    <?php echo $notificationsview->message;?>
                            <div class="clear-fix"></div>
                            <!-- <span class="time">5 minutes ago</span> -->
                        </div>
                    </li>
                    </a>
                    <!-- <a href="#">
                        <li>
                            <div class="notif-content">
                                You Tender #E2332 is approved.
                                <div class="clear-fix"></div>
                                <span class="time">10 minutes ago</span>
                            </div>
                        </li>
                    </a>
                     -->
                 
                    
                    
                    <!-- <a href="#">
                        <li>
                            <div class="notif-content">
                                You Tender #22222 is Rejected.
                                <div class="clear-fix"></div>
                                <span class="time">5 days ago</span>
                            </div>
                        
                    
                        </li>
                    
                    </a> -->
                
                    <a class="see-all" href="<?=supplier_url('dashboard/supplier_administration/tab_9')?>">See all notifications<i class="fa fa-angle-right"></i> </a>
                </div>
            </ul>

        </div>

    
    </div>
  </div>

   
   
    <!-- </div> -->
</div>

          
    








      <!--  closing from banner.php -->
      </div>
      <div class="col-md-10" id="drag-2">
  