
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
   
      <li   ><a href="<?=supplier_url('dashboard/personal_profile')?>" class='<?php if($this->uri->segment(3) == 'personal_profile') echo "liActive";?>'><em >Basic Info</em><i></i></a></li>
      <li><a href="<?=supplier_url('dashboard/profile')?>" class='<?php if($this->uri->segment(3) == 'profile') echo "liActive";?>'><em>Company Profile</em></a></li>
      <li><a href="<?=supplier_url('dashboard/banking')?>" class='<?php if($this->uri->segment(3) == 'banking') echo "liActive";?>'><em>Banking Details</em></a></li>
      <li><a href="<?=supplier_url('dashboard/manage_user')?>" class='<?php if($this->uri->segment(3) == 'manage_user') echo "liActive";?>'><em>Employees</em><i></i></a></li>
      <li><a href="<?=supplier_url('dashboard/attachments')?>" class='<?php if($this->uri->segment(3) == 'attachments') echo "liActive";?>'><em>Attachments</em></a></li>
      <li><a href="<?=supplier_url('dashboard/portfolio')?>" class='<?php if($this->uri->segment(3) == 'portfolio') echo "liActive";?>'><em>Company Portfolio</em></a></li>
      <li><a href="<?=supplier_url('dashboard/subscription')?>" class='<?php if($this->uri->segment(3) == 'subscription') echo "liActive";?>'><em>Subscription Status</em></a></li>
      <li><a href="<?=supplier_url('dashboard/preference_profile')?>" class='<?php if($this->uri->segment(3) == 'preference_profile') echo "liActive";?>'><em>Preferences</em></a></li>
      <li> <a href="<?=supplier_url('dashboard/notifications')?>" class='<?php if($this->uri->segment(3) == 'notifications') echo "liActive";?>'><em>Notifications</em><i></i></a>
     
    </ul>
  </div>


</aside>

