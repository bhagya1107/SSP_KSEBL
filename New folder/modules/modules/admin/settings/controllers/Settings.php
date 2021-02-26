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
    // $data['form_types'] =$this->procM->getFormengine_Titles();
    //  $data['form_questions'] =$this->procM->getFormengine_questions();
   $this->template->make('settings/fee_management',$data);

  }
 
}
