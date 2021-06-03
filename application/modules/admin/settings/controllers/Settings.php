<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends AD_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->model('Settings_model','SettingsM');
  $this->load->model('procurement/Procurement_model','procM');

}
	public function query_rep()
	{
   $data['page'] = 'Settings';
   $data['mainpage'] = '';
   $data['title'] = 'Settings';
   $data['form_types'] =$this->procM->getFormengine_Titles();
    $data['form_questions'] =$this->procM->getFormengine_questions();
  $this->template->make('settings/query_rep',$data);
  }


  public function fee_management(){

    $data['page'] = 'Settings';
    $data['mainpage'] = '';
    $data['title'] = 'Settings';
   $this->template->make('settings/fee_management',$data);

  }
  public function globals(){
    $data['page'] = 'Globals';
    $data['mainpage'] = '';
    $data['title'] = 'Globals';
    $data['globals'] =$this->SettingsM->getGlobalsdata();

    // echo getApi_url();
   $this->template->make('settings/global_settings',$data);
  }

  public function save_globals(){

    foreach ($this->input->post() as $key => $value) {
     
      $check_exist=$this->SettingsM->checkGlobalExist($key);
      $data=array(
            'name'=>$key,
            'value'=>$value,
        
        );
      if(!$check_exist){
       
          $this->SettingsM->insert('admin_globals',$data);

      }else{
       
        // $where=array('name'=>$key);
        simpleUpdate('admin_globals',$data,'name',$key);
      }
     

    }
    // exit;
    redirect(admin_url("settings/globals"));

  }
 
}
