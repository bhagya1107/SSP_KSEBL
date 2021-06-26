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


.liActive{
  color:#272360!important;
  font-weight: bold!important;
}

@media (min-width: 992px){
      .col-md-5 {
          width: 41.66666667%;
      }
    }
   


</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0;" />

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

				<div class="col-md-3 col-sm-4 col-xs-12">
					

          <aside id="tg-sidebar" class="tg-sidebar">

            <div class="tg-widget tg-catagories-widget">
              <h3>Administration </h3>
              <ul class="nav nav-tabs" id="myTabs">
                    <?php   
                          $user_type=$this->session->userdata('user_type'); 
                          $tab_selected=$tab_s;

                    ?>
                  
                <li <?php if($tab_selected == 'tab_1'){ echo "class='active'";} ?> ><a  class='<?php if($this->uri->segment(3) == 'personal_profile') echo "liActive";?>' data-toggle="tab" href="#tab_1"><em >Basic Info</em><i></i></a></li>

                <li <?php if($tab_selected == 'tab_2'){ echo "class='active'";} ?> style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a  class='<?php if($this->uri->segment(3) == 'profile') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_2"> <em>Company Profile</em></a></li>

                
                <li <?php if($tab_selected == 'tab_3'){ echo "class='active'";} ?> style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a class='<?php if($this->uri->segment(3) == 'portfolio') echo "liActive";?>' style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_3"><em> Portfolio</em></a></li>

                <li <?php if($tab_selected == 'tab_4'){ echo "class='active'";} ?> style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"   class='<?php if($this->uri->segment(3) == 'banking') echo "liActive";?>' data-toggle="tab" href="#tab_4"><em>Banking Details</em></a></li>

                <li <?php if($tab_selected == 'tab_5'){ echo "class='active'";} ?> style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a class='<?php if($this->uri->segment(3) == 'manage_user') echo "liActive";?>' style="<?php if($user_type=='2') echo "display: none;" ?>" data-toggle="tab" href="#tab_5" ><em>Employees</em><i></i></a></li>


              
              <li <?php if($tab_selected == 'tab_6'){ echo "class='active'";} ?> style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a  class='<?php if($this->uri->segment(3) == 'permission') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" data-toggle="tab" href="#tab_6"><em>Access Permission</em></a></li>


                <li <?php if($tab_selected == 'tab_7'){ echo "class='active'";} ?> style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  class='<?php if($this->uri->segment(3) == 'subscription') echo "liActive";?>' data-toggle="tab" href="#tab_7"><em>Subscription Status</em></a></li>

                <li <?php if($tab_selected == 'tab_8'){ echo "class='active'";} ?> style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"   class='<?php if($this->uri->segment(3) == 'preference_profile') echo "liActive";?>' data-toggle="tab" href="#tab_8"><em>Preferences</em></a></li>

                <li <?php if($tab_selected == 'tab_9'){ echo "class='active'";} ?> style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"> <a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  class='<?php if($this->uri->segment(3) == 'notifications') echo "liActive";?>' data-toggle="tab" href="#tab_9"><em>Notifications</em><i></i></a>
            
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

              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  
                  <div id="loader2" class="center2">
                      <lottie-player src='{"v":"5.5.9","fr":60,"ip":0,"op":90,"w":612,"h":792,"nm":"zap","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"zap Outlines 2","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":45,"s":[0]},{"t":70,"s":[100]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[306,396,0],"ix":2},"a":{"a":0,"k":[306,396,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":45,"s":[0,0,100]},{"t":70,"s":[100,100,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[1.894,3.342],[3.842,0],[0,0],[0,0],[5.893,0.618],[2.197,-3.378],[0,0],[-5.019,-3.086],[-1.972,0],[0,0],[0,0],[-5.909,-0.453],[-2.124,3.352],[0,0]],"o":[[-1.895,-3.342],[0,0],[0,0],[0.618,-5.893],[-4.008,-0.421],[0,0],[-3.086,5.019],[1.68,1.033],[0,0],[0,0],[-0.451,5.909],[3.956,0.301],[0,0],[1.973,-3.296]],"v":[[158.186,-58.532],[148.905,-63.94],[9.171,-63.94],[32.599,-242.933],[23.049,-254.722],[12.938,-249.904],[-156.993,47.806],[-153.493,62.48],[-147.908,64.06],[-10.262,64.06],[-28.828,243.324],[-18.947,254.842],[-9.065,249.886],[158.057,-47.793]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tr","p":{"a":0,"k":[306,396.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":1,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":0,"k":0,"ix":1},"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"fl","c":{"a":0,"k":[0.5647058823529412,0.5372549019607843,0.8862745098039215,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false}],"ip":0,"op":182,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":4,"nm":"zap Outlines","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[306,396,0],"ix":2},"a":{"a":0,"k":[306,396,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ef":[{"ty":5,"nm":"Emboss","np":6,"mn":"ADBE Emboss","ix":1,"en":1,"ef":[{"ty":0,"nm":"Direction","mn":"ADBE Emboss-0001","ix":1,"v":{"a":0,"k":45,"ix":1}},{"ty":0,"nm":"Relief","mn":"ADBE Emboss-0002","ix":2,"v":{"a":0,"k":1,"ix":2}},{"ty":0,"nm":"Contrast","mn":"ADBE Emboss-0003","ix":3,"v":{"a":0,"k":0,"ix":3}},{"ty":0,"nm":"Blend With Original","mn":"ADBE Emboss-0004","ix":4,"v":{"a":0,"k":2,"ix":4}}]}],"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[1.894,3.342],[3.842,0],[0,0],[0,0],[5.893,0.618],[2.197,-3.378],[0,0],[-5.019,-3.086],[-1.972,0],[0,0],[0,0],[-5.909,-0.453],[-2.124,3.352],[0,0]],"o":[[-1.895,-3.342],[0,0],[0,0],[0.618,-5.893],[-4.008,-0.421],[0,0],[-3.086,5.019],[1.68,1.033],[0,0],[0,0],[-0.451,5.909],[3.956,0.301],[0,0],[1.973,-3.296]],"v":[[158.186,-58.532],[148.905,-63.94],[9.171,-63.94],[32.599,-242.933],[23.049,-254.722],[12.938,-249.904],[-156.993,47.806],[-153.493,62.48],[-147.908,64.06],[-10.262,64.06],[-28.828,243.324],[-18.947,254.842],[-9.065,249.886],[158.057,-47.793]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0.5647058823529412,0.5372549019607843,0.8862745098039215,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[306,396.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"t":45,"s":[0]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"t":45,"s":[100]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false}],"ip":0,"op":182,"st":0,"bm":0}],"markers":[]}'  background="transparent"  speed="1"    loop  autoplay></lottie-player>
                      <!-- height:300px; width:300px; -->
                  </div>

              <div class="tab-content">
                  <div id="tab_1" class="tab-pane fade <?php if($tab_selected == 'tab_1'){ echo 'in active'; }?>" data-src="<?php echo base_url()?>supplier/dashboard/personal_profile">

                     <iframe src="<?php echo base_url()?>supplier/dashboard/personal_profile" height="100%" style="min-height:450px" id="frame_1" ></iframe>
                   
                  </div>
                  <div id="tab_2" class="tab-pane fade <?php if($tab_selected == 'tab_2'){ echo 'in active'; }?>" data-src="<?php echo base_url()?>supplier/dashboard/profile">
                   
                    <iframe src="<?php if($tab_selected=='tab_2'){ echo base_url().'supplier/dashboard/profile';} ?>" height="100%" style="min-height:800px" onload="" id="frame_2"></iframe>

                  </div>
                  <div id="tab_3" class="tab-pane fade <?php if($tab_selected == 'tab_3'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/portfolio')?>">
                     <iframe src="<?php if($tab_selected=='tab_3'){ echo base_url().'supplier/dashboard/portfolio';} ?>" height="100%" style="min-height:1000px;" id="frame_3" ></iframe>
                  </div>
                  <div id="tab_4" class="tab-pane fade <?php if($tab_selected == 'tab_4'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/banking')?>">
                    <iframe src="<?php if($tab_selected=='tab_4'){ echo base_url().'supplier/dashboard/banking';} ?>" height="100%" style="min-height:600px" id="frame_4"></iframe>
                  </div>
                  <div id="tab_5" class="tab-pane fade <?php if($tab_selected == 'tab_5'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/manage_user')?>">
                    <iframe src="<?php if($tab_selected=='tab_5'){ echo base_url().'supplier/dashboard/manage_user';} ?>" height="100%" style="min-height:700px"  id="frame_5"></iframe>
                  </div>
                  <div id="tab_6" class="tab-pane fade <?php if($tab_selected == 'tab_6'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/permission')?>">
                    <iframe src="<?php if($tab_selected=='tab_6'){ echo base_url().'supplier/dashboard/permission';} ?>" height="100%" style="min-height:500px" id="frame_6"></iframe>
                  </div>
                  <div id="tab_7" class="tab-pane fade <?php if($tab_selected == 'tab_7'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/subscription')?>">
                    <iframe src="<?php if($tab_selected=='tab_7'){ echo base_url().'supplier/dashboard/subscription';} ?>" height="100%" style="min-height:200px" id="frame_7" scrolling="no"></iframe>
                  </div>
                  <div id="tab_8" class="tab-pane fade <?php if($tab_selected == 'tab_8'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/preference_profile')?>">
                    <iframe src="<?php if($tab_selected=='tab_8'){ echo base_url().'supplier/dashboard/preference_profile';} ?>" height="100%" style="min-height:300px" id="frame_8"></iframe>
                  </div>
                  <div id="tab_9" class="tab-pane fade <?php if($tab_selected == 'tab_9'){ echo 'in active'; }?>" data-src="<?=supplier_url('dashboard/notifications')?>">
                    <iframe src="<?php if($tab_selected=='tab_9'){ echo base_url().'supplier/dashboard/notifications';} ?>" height="100%" style="min-height:400px" id="frame_9"></iframe>
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

.nav-tabs>li.active>a {
    color: black!important;
}

.center2{
  position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin-left: 32%;
    cursor: pointer;
}
</style>
<script>
$(document).ready(function(){

  document.querySelector("#loader2").style.visibility = "hidden"; 
				  
});

jQuery(document).ready(function($) {


  var paneID ;
  $('.nav-tabs > li > a').on('click', function(event) {
    document.querySelector("#loader2").style.visibility = "hidden"; 

    //avoid <a> tag to load his href
    event.preventDefault();
    //getting the main subjects
    // var id_of_selected = $(this).attr('load-in');
    var paneID = $(this).attr('href');
    sessionStorage.setItem('activeTab', paneID);
    console.log(paneID);
    var src = $(paneID).attr('data-src');
    if($(paneID+" iframe").attr("src")=="")
    {
      document.querySelector("#loader2").style.visibility = "visible"; 

        $(paneID+" iframe").attr("src",src);
        var frame=$(paneID+" iframe").attr("id");
      
      $('#'+frame).on('load', function(){
        document.querySelector("#loader2").style.visibility = "hidden"; 


      });

    }

    
  });


});

function onMyFrameLoad(iframeid){

//   var iframe = document.createElement('iframe');
// iframe.onload = function() {

//         document.querySelector("#loader2").style.visibility = "hidden"; 

}


$(window).load(function(){
    var activeTab = sessionStorage.getItem('activeTab');
    if(activeTab){
      // setTimeout(function(){ 
        console.log(activeTab);
        console.log('jk');
          $('#myTabs li').removeClass('active');
          $('#myTabs a[href="' + activeTab + '"]').parent().addClass('active');
          $('.tab-content div').removeClass('in active');
          $(activeTab).addClass('in active');
          $('#myTabs a[href="' + activeTab + '"]').trigger('click');
      //  }, 13000);

    }
});


</script>