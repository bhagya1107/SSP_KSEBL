
<style>
.liActive{
  color:#272360!important;
  font-weight: bold!important;
}

</style>
<aside id="tg-sidebar" class="tg-sidebar">

  <div class="tg-widget tg-catagories-widget">
    <h3>Administration </h3>
    <ul>
          <?php   
                $user_type=$this->session->userdata('user_type'); 
          ?>
        
      <li><a href="<?=supplier_url('dashboard/personal_profile')?>" class='<?php if($this->uri->segment(3) == 'personal_profile') echo "liActive";?>'><em >Basic Info</em><i></i></a></li>

      <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a href="<?=supplier_url('dashboard/profile')?>" class='<?php if($this->uri->segment(3) == 'profile') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" > <em>Company Profile</em></a></li>

      
      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a href="<?=supplier_url('dashboard/portfolio')?>" class='<?php if($this->uri->segment(3) == 'portfolio') echo "liActive";?>' style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><em> Portfolio</em></a></li>

      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  href="<?=supplier_url('dashboard/banking')?>" class='<?php if($this->uri->segment(3) == 'banking') echo "liActive";?>'><em>Banking Details</em></a></li>

      <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a href="<?=supplier_url('dashboard/manage_user')?>" class='<?php if($this->uri->segment(3) == 'manage_user') echo "liActive";?>' style="<?php if($user_type=='2') echo "display: none;" ?>" ><em>Employees</em><i></i></a></li>


      <!--<li><a href="<?=supplier_url('dashboard/attachments')?>" class='<?php if($this->uri->segment(3) == 'attachments') echo "liActive";?>'><em>Attachments</em></a></li>-->

	   <li style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><a href="<?=supplier_url('dashboard/permission')?>" class='<?php if($this->uri->segment(3) == 'permission') echo "liActive";?>' style="<?php if($user_type=='2' OR $user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"><em>Access Permission</em></a></li>


      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" href="<?=supplier_url('dashboard/subscription')?>" class='<?php if($this->uri->segment(3) == 'subscription') echo "liActive";?>'><em>Subscription Status</em></a></li>
      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" ><a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"  href="<?=supplier_url('dashboard/preference_profile')?>" class='<?php if($this->uri->segment(3) == 'preference_profile') echo "liActive";?>'><em>Preferences</em></a></li>
      <li style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>"> <a style="<?php if($user_type=='4' OR $user_type=='5' OR $user_type=='6') echo "display: none;" ?>" href="<?=supplier_url('dashboard/notifications')?>" class='<?php if($this->uri->segment(3) == 'notifications') echo "liActive";?>'><em>Notifications</em><i></i></a>
     <!-- <li> <a href="<?=supplier_url('dashboard/fontsize')?>" class='<?php if($this->uri->segment(3) == 'fontsize') echo "liActive";?>'><em>Font Size</em><i></i></a>-->
    </ul>
  </div>


</aside>

