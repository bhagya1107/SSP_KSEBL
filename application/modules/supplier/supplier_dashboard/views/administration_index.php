<style>
.h1{
	color:#171b82
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

@media screen and (max-width: 767px){
  .searchbar{
    display:none;
  }

}


</style>

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

				<div class="col-md-3 col-sm-4 col-xs-12">
					
<style>
.liActive{
  color:#272360!important;
  font-weight: bold!important;
}

</style>
<aside id="tg-sidebar" class="tg-sidebar">

  <div class="tg-widget tg-catagories-widget">
    <h3>Administration </h3>
    <ul class="nav nav-tabs" id="myTabs">
          <?php   
                $user_type=$this->session->userdata('user_type'); 
          ?>
        
      <li class="active"><a  class='<?php if($this->uri->segment(3) == 'personal_profile') echo "liActive";?>' data-toggle="tab" href="#tab_1"><em >Basic Info</em><i></i></a></li>

      <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a  class='<?php if($this->uri->segment(3) == 'profile') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_2"> <em>Company Profile</em></a></li>

      
      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a class='<?php if($this->uri->segment(3) == 'portfolio') echo "liActive";?>' style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_3"><em> Portfolio</em></a></li>

      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"   class='<?php if($this->uri->segment(3) == 'banking') echo "liActive";?>' data-toggle="tab" href="#tab_4"><em>Banking Details</em></a></li>

      <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a class='<?php if($this->uri->segment(3) == 'manage_user') echo "liActive";?>' style="<?php if($user_type=='2') echo "display: none;" ?>" data-toggle="tab" href="#tab_5" ><em>Employees</em><i></i></a></li>


    
	   <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a  class='<?php if($this->uri->segment(3) == 'permission') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_6"><em>Access Permission</em></a></li>


      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  class='<?php if($this->uri->segment(3) == 'subscription') echo "liActive";?>' data-toggle="tab" href="#tab_7"><em>Subscription Status</em></a></li>

      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"   class='<?php if($this->uri->segment(3) == 'preference_profile') echo "liActive";?>' data-toggle="tab" href="#tab_8"><em>Preferences</em></a></li>

      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"> <a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  class='<?php if($this->uri->segment(3) == 'notifications') echo "liActive";?>' data-toggle="tab" href="#tab_9"><em>Notifications</em><i></i></a>
   
    </ul>
  </div>


</aside>


				</div>
                <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
				                <?php
									$session=$this->session->userdata('uid');
									$user_type=$this->session->userdata('user_type');
									//  echo $user_type; exit();
								?>

              <div class="tab-content">
                  <div id="tab_1" class="tab-pane fade in active" data-src="<?php echo base_url()?>supplier/dashboard/personal_profile">

                     <iframe src="<?php echo base_url()?>supplier/dashboard/personal_profile" height="100%" style="min-height:450px"></iframe>
                   
                  </div>
                  <div id="tab_2" class="tab-pane fade" data-src="<?php echo base_url()?>supplier/dashboard/profile">
                   
                    <iframe src="" height="100%" style="min-height:800px"></iframe>

                  </div>
                  <div id="tab_3" class="tab-pane fade" data-src="<?=supplier_url('dashboard/portfolio')?>">
                     <iframe src="" height="100%" style="min-height:800px"></iframe>
                  </div>
                  <div id="tab_4" class="tab-pane fade" data-src="<?=supplier_url('dashboard/banking')?>">
                    <iframe src="" height="100%" style="min-height:800px"></iframe>
                  </div>
                  <div id="tab_5" class="tab-pane fade" data-src="<?=supplier_url('dashboard/manage_user')?>">
                    <iframe src="" height="100%" style="min-height:800px"></iframe>
                  </div>
                  <div id="tab_6" class="tab-pane fade" data-src="<?=supplier_url('dashboard/permission')?>">
                    <iframe src="" height="100%" style="min-height:500px"></iframe>
                  </div>
                  <div id="tab_7" class="tab-pane fade" data-src="<?=supplier_url('dashboard/subscription')?>">
                    <iframe src="" height="100%" style="min-height:400px"></iframe>
                  </div>
                  <div id="tab_8" class="tab-pane fade" data-src="<?=supplier_url('dashboard/preference_profile')?>">
                    <iframe src="" height="100%" style="min-height:300px"></iframe>
                  </div>
                  <div id="tab_9" class="tab-pane fade" data-src="<?=supplier_url('dashboard/notifications')?>">
                    <iframe src="" height="100%" style="min-height:800px"></iframe>
                  </div>
                
                </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</main>
<style>
.tg-widget ul li{
  padding:0 !important;
}
.nav-tabs>li.active>a{
  background-color:unset!important;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
  background-color:unset!important;
     border: unset!important;
    border-bottom-color: unset!important; */
}
.nav-tabs>li.active>a>em{
  font-weight:600;
}
</style>
<script>
$('#myTabs').click('show', function(e) {  
  // alert($(e.target).attr('href'));
    paneID = $(e.target).attr('href');
    // alert(paneID);
    src = $(paneID).attr('data-src');
    // if the iframe hasn't already been loaded once
    if($(paneID+" iframe").attr("src")=="")
    {
        $(paneID+" iframe").attr("src",src);
    }
});
</script>