
		
      <link rel = "stylesheet"
         href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>


      <style>

.vertical-menu {
    width: 250px;
    z-index: 1;
    top: 0;
    left: 0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-BOTTOM: 60px;
}

#drag-1 {
    width: 250px;
    max-height: 600px;
    margin-bottom: 10px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #272360;
    color: white;
}

* {
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

.toggle-btn-quicklink {
    float: right;
}
          

      </style>
      <script>
      $(".all-slides").sortable({
        placeholder: 'slide-placeholder',
        axis: "x",
        revert: 150,
        start: function(e, ui){
            
            placeholderHeight = ui.item.outerHeight();
            ui.placeholder.height(placeholderHeight + 15);
            $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
        
        },
        change: function(event, ui) {
            
            ui.placeholder.stop().height(0).animate({
                width:'100%',
                height: ui.item.outerHeight() + 15
            }, 300);
            
            placeholderAnimatorHeight = parseInt($(".slide-placeholder-animator").attr("data-height"));
            
            $(".slide-placeholder-animator").stop().height(placeholderAnimatorHeight + 15).animate({
                height: 0,
                width:'100%',
            }, 300, function() {
                $(this).remove();
                placeholderHeight = ui.item.outerHeight();
                $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
            });
            
        },
        stop: function(e, ui) {
            
            $(".slide-placeholder-animator").remove();
            
        },
});



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

  var width =document.getElementById("drag-1").style.width;
 
  if(width == "0" || width =="0px"){
   
    document.getElementById("drag-1").style.width = "250px";
    document.getElementById("drag-1").style.display = 'block';
   // document.getElementById("drag-2").style.width = "83.33%";


  }else{
    
    document.getElementById("drag-1").style.width = "0";
    document.getElementById("drag-1").style.display = 'none';
   // document.getElementById("drag-2").style.width = "100%";
    

  }
}

function closeNav() {
  document.getElementById("drag-1").style.width = 0;
}
</script>



  

  <div class="vertical-menu quick-menu ">
    <a href="#" class="active" onclick="openNav()" data-toggle="tooltip" title="Quick Links!">Quick Links  <span class="toggle-btn-quicklink">☰  </span></a>
  </div>

<div class="vertical-menu sidebar1" id="drag-1">

  
    
    <a href="<?=supplier_url('procurement')?>" class="active">PROCUREMENT PLAN</a>
    <a href="<?=supplier_url('tenders')?>" class="active">TENDERS</a>
    <a href="<?=supplier_url('tenders/my')?>">My Tenders<i></i></a>
    <a href="<?=supplier_url('purchase_order')?>" class="active">PURCHASE ORDER</a>
    <a href="<?=supplier_url('delivery')?>" class="active">DELIVERY</a>
            <!-- <a href="#">Dispatch</a>
			<a href="#">Check Points<i></i></a>
			<a href="#">Shipment<i></i></a> -->
			<!-- <a href="#">Order Tracking<i></i></a>
			<a href="#">Delivery Confirmation<i></i></a> -->
    <!--<a href="<?=supplier_url('accounts/workmeasure')?>" class="active">WORK MEASUREMENT</a>-->
  <!-- <a href="<?=supplier_url('workmeasurement/workmeasure')?>">WORK MEASUREMENT</a>-->

    
    <a href="<?=supplier_url('accounts/payments')?>" class="active">ACCOUNTS</a>
			<a href="<?=supplier_url('accounts/payments')?>">Invoices</a>
            <a href="<?=supplier_url('accounts/payments/2')?>">Payments</a>

  <a href="#" class="active">Administration</a>
            <a href="<?=supplier_url('dashboard/personal_profile')?>">Basic Info<i></i></a>
            <a href="<?=supplier_url('dashboard/profile')?>">Company Profile</a>
            <a href="<?=supplier_url('dashboard/banking')?>">Banking Details</a>
            <a href="<?=supplier_url('dashboard/manage_user')?>">Employees<i></i></a>
            <a href="<?=supplier_url('dashboard/attachments')?>">Attachments</a>
            <a href="<?=supplier_url('dashboard/portfolio')?>">Company Portfolio</a>
            <a href="<?=supplier_url('dashboard/subscription')?>">Subscription Status</a>
            <a href="<?=supplier_url('dashboard/preference_profile')?>">Preferences</a>
            <a href="<?=supplier_url('dashboard/notifications')?>">Notifications<i></i></a>
           <!-- <a href="<?=supplier_url('dashboard/fontsize')?>">Font Size<i></i></a>-->
   
</div>

          
    








      <!--  closing from banner.php -->
      </div>
      <div class="col-md-10" id="drag-2">
  