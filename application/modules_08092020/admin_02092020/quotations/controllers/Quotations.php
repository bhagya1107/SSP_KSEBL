<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Quotations extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function index()
  {
    $data['page'] = 'Quotations';
    $data['title'] = 'Manage Quotations';
    $this->template->make('quotations/manage_quotations',$data);
  }


}
